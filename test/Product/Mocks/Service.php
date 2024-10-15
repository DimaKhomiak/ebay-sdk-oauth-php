<?php
namespace DKH\eBaySDK\Test\Product\Mocks;

use DKH\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DKH\eBaySDK\Product\Services\ProductBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\DKH\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
