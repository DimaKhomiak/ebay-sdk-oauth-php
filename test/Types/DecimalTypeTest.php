<?php
namespace DKH\eBaySDK\Types\Test;

use DKH\eBaySDK\Types\DecimalType;

class DecimalTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DecimalType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\DecimalType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertInternalType('integer', $this->obj->value);

        $this->obj->value = -123;
        $this->assertEquals(-123, $this->obj->value);
        $this->assertInternalType('integer', $this->obj->value);

        $this->obj->value = 123.00;
        $this->assertEquals(123.00, $this->obj->value);
        $this->assertInternalType('float', $this->obj->value);

        $this->obj->value = -123.00;
        $this->assertEquals(-123.00, $this->obj->value);
        $this->assertInternalType('float', $this->obj->value);

        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertInternalType('float', $this->obj->value);

        $this->obj->value = -123.45;
        $this->assertEquals(-123.45, $this->obj->value);
        $this->assertInternalType('float', $this->obj->value);
    }
}
