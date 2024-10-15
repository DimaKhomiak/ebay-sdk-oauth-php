<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Marketing\Types;

/**
 *
 * @property \DKH\eBaySDK\Marketing\Types\Amount $averageItemDiscount
 * @property \DKH\eBaySDK\Marketing\Types\Amount $averageItemRevenue
 * @property \DKH\eBaySDK\Marketing\Types\Amount $averageOrderDiscount
 * @property \DKH\eBaySDK\Marketing\Types\Amount $averageOrderRevenue
 * @property string $averageOrderSize
 * @property \DKH\eBaySDK\Marketing\Types\Amount $baseSale
 * @property integer $itemsSoldQuantity
 * @property integer $numberOfOrdersSold
 * @property string $percentageSalesLift
 * @property string $promotionHref
 * @property string $promotionId
 * @property string $promotionReportId
 * @property \DKH\eBaySDK\Marketing\Types\Amount $promotionSale
 * @property \DKH\eBaySDK\Marketing\Types\Amount $totalDiscount
 * @property \DKH\eBaySDK\Marketing\Types\Amount $totalSale
 */
class PromotionReportDetail extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'averageItemDiscount' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageItemDiscount'
        ],
        'averageItemRevenue' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageItemRevenue'
        ],
        'averageOrderDiscount' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageOrderDiscount'
        ],
        'averageOrderRevenue' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageOrderRevenue'
        ],
        'averageOrderSize' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'averageOrderSize'
        ],
        'baseSale' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'baseSale'
        ],
        'itemsSoldQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'itemsSoldQuantity'
        ],
        'numberOfOrdersSold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'numberOfOrdersSold'
        ],
        'percentageSalesLift' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'percentageSalesLift'
        ],
        'promotionHref' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionHref'
        ],
        'promotionId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionId'
        ],
        'promotionReportId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionReportId'
        ],
        'promotionSale' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'promotionSale'
        ],
        'totalDiscount' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalDiscount'
        ],
        'totalSale' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'totalSale'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
