<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Finding\Types;

use DKH\eBaySDK\Finding\Types\FindItemsByCategoryRequest;

class FindItemsByCategoryRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindItemsByCategoryRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Finding\Types\FindItemsByCategoryRequest', $this->obj);
    }

    public function testExtendsBaseFindingServiceRequest()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Finding\Types\BaseFindingServiceRequest', $this->obj);
    }
}
