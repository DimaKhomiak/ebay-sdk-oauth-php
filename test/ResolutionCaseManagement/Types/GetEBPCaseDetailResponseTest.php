<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\ResolutionCaseManagement\Types;

use DKH\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse;

class GetEBPCaseDetailResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetEBPCaseDetailResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\ResolutionCaseManagement\Types\GetEBPCaseDetailResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
