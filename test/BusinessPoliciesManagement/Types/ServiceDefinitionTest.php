<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\BusinessPoliciesManagement\Types;

use DKH\eBaySDK\BusinessPoliciesManagement\Types\ServiceDefinition;

class ServiceDefinitionTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ServiceDefinition();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\BusinessPoliciesManagement\Types\ServiceDefinition', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\BaseType', $this->obj);
    }
}
