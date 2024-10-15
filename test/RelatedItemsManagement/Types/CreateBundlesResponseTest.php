<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\RelatedItemsManagement\Types;

use DKH\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse;

class CreateBundlesResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateBundlesResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\RelatedItemsManagement\Types\CreateBundlesResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}
