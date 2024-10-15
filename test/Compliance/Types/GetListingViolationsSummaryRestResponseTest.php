<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Compliance\Types;

use DKH\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestResponse;

class GetListingViolationsSummaryRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetListingViolationsSummaryRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Compliance\Types\GetListingViolationsSummaryRestResponse', $this->obj);
    }

    public function testExtendsComplianceSummary()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Compliance\Types\ComplianceSummary', $this->obj);
    }
}
