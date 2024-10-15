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

use DKH\eBaySDK\PostOrder\Types\GetReturnFilesRestResponse;

class GetReturnFilesRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetReturnFilesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\GetReturnFilesRestResponse', $this->obj);
    }

    public function testExtendsGetFileResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\GetFileResponse', $this->obj);
    }
}
