<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Account\Types;

use DKH\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse;

class GetReturnPoliciesByMarketplaceRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnPoliciesByMarketplaceRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Account\Types\GetReturnPoliciesByMarketplaceRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicyResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Account\Types\ReturnPolicyResponse', $this->obj);
    }
}
