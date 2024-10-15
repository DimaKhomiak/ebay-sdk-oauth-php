<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Trading\Types;

use DKH\eBaySDK\Trading\Types\AddToItemDescriptionResponseType;

class AddToItemDescriptionResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddToItemDescriptionResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Trading\Types\AddToItemDescriptionResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Trading\Types\AbstractResponseType', $this->obj);
    }
}
