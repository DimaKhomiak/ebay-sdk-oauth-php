<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\MerchantData\Types;

use DKH\eBaySDK\MerchantData\Types\CharityIDType;

class CharityIDTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharityIDType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\MerchantData\Types\CharityIDType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\StringType', $this->obj);
    }
}
