<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\ResolutionCaseManagement\Types;

use DKH\eBaySDK\ResolutionCaseManagement\Types\ItemFilterType;

class ItemFilterTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ItemFilterType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\ResolutionCaseManagement\Types\ItemFilterType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\BaseType', $this->obj);
    }
}
