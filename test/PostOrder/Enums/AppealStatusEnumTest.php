<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Test\PostOrder\Enums;

use DKH\eBaySDK\PostOrder\Enums\AppealStatusEnum;

class AppealStatusEnumTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AppealStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\PostOrder\Enums\AppealStatusEnum', $this->obj);
    }
}
