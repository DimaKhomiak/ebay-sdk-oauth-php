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

use DKH\eBaySDK\MerchantData\Types\MetadataType;

class MetadataTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MetadataType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\MerchantData\Types\MetadataType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\BaseType', $this->obj);
    }
}
