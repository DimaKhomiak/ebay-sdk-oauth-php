<?php
namespace DKH\eBaySDK\Test\Mocks;

class Service extends \DKH\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\DKH\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\DKH\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\DKH\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\DKH\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
