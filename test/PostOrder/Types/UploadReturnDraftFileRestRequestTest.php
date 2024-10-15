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

use DKH\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestRequest;

class UploadReturnDraftFileRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UploadReturnDraftFileRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\UploadReturnDraftFileRestRequest', $this->obj);
    }

    public function testExtendsUploadFileRequest()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Types\UploadFileRequest', $this->obj);
    }
}
