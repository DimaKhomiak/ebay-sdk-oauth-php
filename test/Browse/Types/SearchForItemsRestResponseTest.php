<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Browse\Types;

use DKH\eBaySDK\Browse\Types\SearchForItemsRestResponse;

class SearchForItemsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new SearchForItemsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Browse\Types\SearchForItemsRestResponse', $this->obj);
    }

    public function testExtendsSearchPagedCollection()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Browse\Types\SearchPagedCollection', $this->obj);
    }
}
