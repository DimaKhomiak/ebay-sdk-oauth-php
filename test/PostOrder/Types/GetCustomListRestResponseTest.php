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

use DKH\eBaySDK\PostOrder\Types\GetCustomListRestResponse;

class GetCustomListRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetCustomListRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\GetCustomListRestResponse', $this->obj);
    }

    public function testExtendsGetCustomListDetailResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\GetCustomListDetailResponse', $this->obj);
    }
}
