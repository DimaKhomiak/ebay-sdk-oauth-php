<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\PostOrder\Types;

use DKH\eBaySDK\PostOrder\Types\ProvideReturnShipmentInfoRestRequest;

class ProvideReturnShipmentInfoRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideReturnShipmentInfoRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\ProvideReturnShipmentInfoRestRequest', $this->obj);
    }

    public function testExtendsProvideShipmentInfoRequest()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\ProvideShipmentInfoRequest', $this->obj);
    }
}
