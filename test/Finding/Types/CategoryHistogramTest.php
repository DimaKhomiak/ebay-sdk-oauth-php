<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Finding\Types;

use DKH\eBaySDK\Finding\Types\CategoryHistogram;

class CategoryHistogramTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CategoryHistogram();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Finding\Types\CategoryHistogram', $this->obj);
    }

    public function testExtendsCategory()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Finding\Types\Category', $this->obj);
    }
}
