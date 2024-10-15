<?php
namespace DKH\eBaySDK\Test\BusinessPoliciesManagement\Mocks;

use DKH\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \DKH\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
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
