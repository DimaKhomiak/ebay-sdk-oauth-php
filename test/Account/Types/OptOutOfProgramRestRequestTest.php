<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\Account\Types;

use DKH\eBaySDK\Account\Types\OptOutOfProgramRestRequest;

class OptOutOfProgramRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new OptOutOfProgramRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Account\Types\OptOutOfProgramRestRequest', $this->obj);
    }

    public function testExtendsProgram()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Account\Types\Program', $this->obj);
    }
}
