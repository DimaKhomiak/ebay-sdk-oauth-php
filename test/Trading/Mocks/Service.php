<?php
namespace DKH\eBaySDK\Test\Trading\Mocks;

use DKH\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \DKH\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\DKH\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
