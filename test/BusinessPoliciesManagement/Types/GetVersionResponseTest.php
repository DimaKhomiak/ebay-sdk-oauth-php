<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\BusinessPoliciesManagement\Types;

use DKH\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse;

class GetVersionResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetVersionResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\BusinessPoliciesManagement\Types\BaseResponse', $this->obj);
    }
}
