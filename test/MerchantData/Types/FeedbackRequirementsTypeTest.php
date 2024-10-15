<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\MerchantData\Types;

use DKH\eBaySDK\MerchantData\Types\FeedbackRequirementsType;

class FeedbackRequirementsTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FeedbackRequirementsType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\MerchantData\Types\FeedbackRequirementsType', $this->obj);
    }

    public function testExtendsBooleanType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\BooleanType', $this->obj);
    }
}
