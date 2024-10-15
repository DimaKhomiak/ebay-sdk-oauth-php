<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Merchandising\Types;

use DKH\eBaySDK\Merchandising\Types\ProductId;

class ProductIdTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductId();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Merchandising\Types\ProductId', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\StringType', $this->obj);
    }
}
