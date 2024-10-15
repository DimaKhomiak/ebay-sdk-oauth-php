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

use DKH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest;

class CreateInventoryLocationRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateInventoryLocationRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\CreateInventoryLocationRestRequest', $this->obj);
    }

    public function testExtendsInventoryLocationFull()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\InventoryLocationFull', $this->obj);
    }
}
