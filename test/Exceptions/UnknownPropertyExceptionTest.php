<?php
namespace DKH\eBaySDK\Exceptions\Test;

use DKH\eBaySDK\Exceptions\UnknownPropertyException;

class UnknownPropertyExceptionTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new UnknownPropertyException('foo');
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DKH\eBaySDK\Exceptions\UnknownPropertyException', $this->obj);
    }

    public function testExtendsLogicException()
    {
        $this->assertInstanceOf('\LogicException', $this->obj);
    }

    public function testCorrectMessageIsGenerated()
    {
        $this->assertEquals('Unknown property foo', $this->obj->getMessage());
    }
}
