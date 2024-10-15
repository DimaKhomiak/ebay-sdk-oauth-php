<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Order\Types;

use DKH\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse;

class InitiateGuestCheckoutSessionRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new InitiateGuestCheckoutSessionRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Order\Types\InitiateGuestCheckoutSessionRestResponse', $this->obj);
    }

    public function testExtendsCheckoutSessionResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Order\Types\CheckoutSessionResponse', $this->obj);
    }
}
