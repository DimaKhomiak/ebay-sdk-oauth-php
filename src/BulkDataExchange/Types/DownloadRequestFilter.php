<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property \DKH\eBaySDK\BulkDataExchange\Types\FeeSettlementReportFilter $feeSettlementReportFilter
 * @property \DKH\eBaySDK\BulkDataExchange\Types\SiteFilter $siteFilter
 * @property \DKH\eBaySDK\BulkDataExchange\Types\ActiveInventoryReportFilter $activeInventoryReportFilter
 * @property \DKH\eBaySDK\BulkDataExchange\Types\DateFilter $dateFilter
 * @property \DKH\eBaySDK\BulkDataExchange\Types\SoldReportFilter $soldReportFilter
 * @property \DKH\eBaySDK\BulkDataExchange\Types\OrderReportFilter $orderReportFilter
 */
class DownloadRequestFilter extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'feeSettlementReportFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\FeeSettlementReportFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'feeSettlementReportFilter'
        ],
        'siteFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\SiteFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'siteFilter'
        ],
        'activeInventoryReportFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\ActiveInventoryReportFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'activeInventoryReportFilter'
        ],
        'dateFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\DateFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'dateFilter'
        ],
        'soldReportFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\SoldReportFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'soldReportFilter'
        ],
        'orderReportFilter' => [
            'type' => 'DKH\eBaySDK\BulkDataExchange\Types\OrderReportFilter',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'orderReportFilter'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
