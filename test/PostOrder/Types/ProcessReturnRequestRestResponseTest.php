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

use DKH\eBaySDK\PostOrder\Types\ProcessReturnRequestRestResponse;

class ProcessReturnRequestRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProcessReturnRequestRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\ProcessReturnRequestRestResponse', $this->obj);
    }

    public function testExtendsDecideReturnResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\DecideReturnResponse', $this->obj);
    }
}
