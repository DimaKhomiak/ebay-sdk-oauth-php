<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Order\Enums;

use DKH\eBaySDK\Order\Enums\PurchaseOrderPaymentStatusEnum;

class PurchaseOrderPaymentStatusEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new PurchaseOrderPaymentStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Order\Enums\PurchaseOrderPaymentStatusEnum', $this->obj);
    }
}
