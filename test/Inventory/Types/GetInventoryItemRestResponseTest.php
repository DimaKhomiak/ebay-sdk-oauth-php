<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Inventory\Types;

use DKH\eBaySDK\Inventory\Types\GetInventoryItemRestResponse;

class GetInventoryItemRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetInventoryItemRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\GetInventoryItemRestResponse', $this->obj);
    }

    public function testExtendsInventoryItem()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\InventoryItem', $this->obj);
    }
}
