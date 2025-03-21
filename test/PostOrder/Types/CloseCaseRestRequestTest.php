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

use DKH\eBaySDK\PostOrder\Types\CloseCaseRestRequest;

class CloseCaseRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CloseCaseRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\CloseCaseRestRequest', $this->obj);
    }

    public function testExtendsBuyerCloseCaseRequest()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\BuyerCloseCaseRequest', $this->obj);
    }
}
