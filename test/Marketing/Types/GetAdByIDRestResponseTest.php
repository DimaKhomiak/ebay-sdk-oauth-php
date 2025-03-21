<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Marketing\Types;

use DKH\eBaySDK\Marketing\Types\GetAdByIDRestResponse;

class GetAdByIDRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAdByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Marketing\Types\GetAdByIDRestResponse', $this->obj);
    }

    public function testExtendsAd()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Marketing\Types\Ad', $this->obj);
    }
}
