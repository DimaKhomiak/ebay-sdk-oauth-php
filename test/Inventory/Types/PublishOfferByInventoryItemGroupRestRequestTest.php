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

use DKH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest;

class PublishOfferByInventoryItemGroupRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PublishOfferByInventoryItemGroupRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest', $this->obj);
    }

    public function testExtendsPublishByInventoryItemGroupRequest()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Inventory\Types\PublishByInventoryItemGroupRequest', $this->obj);
    }
}
