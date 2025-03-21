<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\ProductMetadata\Types;

use DKH\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse;

class GetCompatibilitySearchDataVersionResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCompatibilitySearchDataVersionResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\ProductMetadata\Types\BaseServiceResponse', $this->obj);
    }
}
