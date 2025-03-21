<?php
namespace DKH\eBaySDK\Test\Services;

use DKH\eBaySDK\Test\TestTraits\ManageEnv;
use DKH\eBaySDK\Services\BaseService;
use DKH\eBaySDK\Credentials\Credentials;
use DKH\eBaySDK\Credentials\CredentialsProvider;
use DKH\eBaySDK\Test\Mocks\Service;
use DKH\eBaySDK\Test\Mocks\ComplexClass;
use DKH\eBaySDK\Test\Mocks\HttpHandler;

class ServiceTest extends \PHPUnit_Framework_TestCase
{
    use ManageEnv;

    public function testConfigDefinitions()
    {
        $d = BaseService::getConfigDefinitions();

        $this->assertArrayHasKey('compressResponse', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['compressResponse']);

        $this->assertArrayHasKey('credentials', $d);
        $this->assertEquals([
            'valid'   => ['DKH\eBaySDK\Credentials\CredentialsInterface', 'array', 'callable'],
            'fn'      => 'DKH\eBaySDK\applyCredentials',
            'default' => [CredentialsProvider::class, 'defaultProvider']
        ], $d['credentials']);

        $this->assertArrayHasKey('debug', $d);
        $this->assertEquals([
            'valid'   => ['bool', 'array'],
            'fn'      => 'DKH\eBaySDK\applyDebug',
            'default' => false
        ], $d['debug']);

        $this->assertArrayHasKey('httpHandler', $d);
        $this->assertEquals([
            'valid'   => ['callable'],
            'default' => 'DKH\eBaySDK\defaultHttpHandler'
        ], $d['httpHandler']);

        $this->assertArrayHasKey('httpOptions', $d);
        $this->assertEquals([
            'valid'   => ['array'],
            'default' => []
        ], $d['httpOptions']);

        $this->assertArrayHasKey('profile', $d);
        $this->assertEquals([
            'valid' => ['string'],
            'fn'    => 'DKH\eBaySDK\applyProfile',
        ], $d['profile']);

        $this->assertArrayHasKey('sandbox', $d);
        $this->assertEquals([
            'valid'   => ['bool'],
            'default' => false
        ], $d['sandbox']);
    }

    public function testProductionUrlIsUsed()
    {
        // By default sandbox will be false.
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://production.com', $h->url);
    }

    public function testSandboxUrlIsUsed()
    {
        $h = new HttpHandler();
        $s = new Service([
            'sandbox' => true,
            'httpHandler' => $h
        ]);
        $s->foo(new ComplexClass());

        $this->assertEquals('http://sandbox.com', $h->url);
    }

    public function testHttpHeadersAreCreated()
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('fooHdr', $h->headers);
        $this->assertEquals('foo', $h->headers['fooHdr']);
        $this->assertArrayHasKey('Content-Type', $h->headers);
        $this->assertEquals('text/xml', $h->headers['Content-Type']);
        $this->assertArrayHasKey('Content-Length', $h->headers);
        $this->assertEquals(strlen($r->toRequestXml()), $h->headers['Content-Length']);
    }

    public function testXmlIsCreated()
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertEquals($r->toRequestXml(), $h->body);
    }

    public function testResponseIsReturned()
    {
        $s = new Service(['httpHandler' => new HttpHandler()]);
        $r = $s->foo(new ComplexClass());

        $this->assertInstanceOf('\DKH\eBaySDK\Test\Mocks\ComplexClass', $r);
    }

    public function testDebugging()
    {
        $str = '';
        $logfn = function ($value) use (&$str) {
            $str .= $value;
        };

        $s = new Service([
            'debug' => ['logfn' => $logfn],
            'httpHandler' => new HttpHandler()
        ]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertContains('fooHdr: foo', $str);
        $this->assertContains('Content-Type: text/xml', $str);
        $this->assertContains('Content-Length: '.strlen($r->toRequestXml()), $str);
        $this->assertContains('<?xml version="1.0" encoding="UTF-8"?>', $str);
    }

    public function testCredentialsInstanceCanBePassed()
    {
        $s = new Service([
            'credentials' => new Credentials('111', '222', '333'),
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeHardCoded()
    {
        $s = new Service([
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeProvided()
    {
        $s = new Service([
            'credentials' => function () {
                return new Credentials('111', '222', '333');
            },
            'httpHandler' => new HttpHandler()
        ]);

        $c = $s->getCredentials();
        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testCredentialsCanBeLoadedFromIni()
    {
        $ini = <<<EOT
[foo]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $s = new Service([
            'profile' => 'foo',
            'httpHandler' => new HttpHandler()
        ]);
        $c = $s->getCredentials();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage No credentials present in INI profile
     */
    public function testCredentialsIniWillThrowException()
    {
        $ini = <<<EOT
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $s = new Service([
            'profile' => 'foo',
            'httpHandler' => new HttpHandler()
        ]);

        try {
            $s->getCredentials();
        } catch (\Exception $e) {
            unlink($dir . '/credentials');
            throw $e;
        }
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Cannot locate credentials
     */
    public function testCredentialsProviderThrowsIfCantProvide()
    {
        new Service([
            'credentials' => function () {
                return new \InvalidArgumentException('Cannot locate credentials');
            },
            'httpHandler' => new HttpHandler()
        ]);
    }

    public function testCanSetConfigurationOptionsAfterInstaniation()
    {
        $h = new HttpHandler();
        $s = new Service([
            'sandbox' => true,
            'compressResponse' => true,
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ],
            'httpHandler' => $h,
            'httpOptions' => []
        ]);

        $this->assertEquals([
            'sandbox' => true,
            'compressResponse' => true,
            'credentials' => new Credentials('111', '222', '333'),
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());

        $s->setConfig([
            'sandbox' => false,
            'compressResponse' => false,
            'credentials' => function () {
                return new Credentials('444', '555', '666');
            }
        ]);

        $this->assertEquals([
            'sandbox' => false,
            'compressResponse' => false,
            'credentials' => new Credentials('444', '555', '666'),
            'debug' => false,
            'httpHandler' => $h,
            'httpOptions' => []
        ], $s->getConfig());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid configuration value provided for "sandbox". Expected bool, but got int(-1)
     */
    public function testSetConfigWillThrow()
    {
        $s = new Service([
            'x'=> 1,
            'credentials' => [
                'appId' => '111',
                'certId' => '222',
                'devId' => '333'
            ]
        ]);

        $s->setConfig(['sandbox' => -1]);
    }

    public function testAcceptEncodingHttpHeadersIsCreated()
    {
        $h = new HttpHandler();
        $s = new Service(['httpHandler' => $h, 'compressResponse' => true]);
        $r = new ComplexClass();
        $s->foo($r);

        $this->assertArrayHasKey('Accept-Encoding', $h->headers);
        $this->assertEquals('application/gzip', $h->headers['Accept-Encoding']);
    }
}
