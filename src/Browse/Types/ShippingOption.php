<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Browse\Types;

/**
 *
 * @property \DKH\eBaySDK\Browse\Types\ConvertedAmount $additionalShippingCostPerUnit
 * @property string $cutOffDateUsedForEstimate
 * @property string $maxEstimatedDeliveryDate
 * @property string $minEstimatedDeliveryDate
 * @property integer $quantityUsedForEstimate
 * @property string $shippingCarrierCode
 * @property \DKH\eBaySDK\Browse\Types\ConvertedAmount $shippingCost
 * @property string $shippingCostType
 * @property string $shippingServiceCode
 * @property \DKH\eBaySDK\Browse\Types\ShipToLocation $shipToLocationUsedForEstimate
 * @property string $trademarkSymbol
 * @property string $type
 */
class ShippingOption extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'additionalShippingCostPerUnit' => [
            'type' => 'DKH\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'additionalShippingCostPerUnit'
        ],
        'cutOffDateUsedForEstimate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'cutOffDateUsedForEstimate'
        ],
        'maxEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'maxEstimatedDeliveryDate'
        ],
        'minEstimatedDeliveryDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'minEstimatedDeliveryDate'
        ],
        'quantityUsedForEstimate' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'quantityUsedForEstimate'
        ],
        'shippingCarrierCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCarrierCode'
        ],
        'shippingCost' => [
            'type' => 'DKH\eBaySDK\Browse\Types\ConvertedAmount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCost'
        ],
        'shippingCostType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingCostType'
        ],
        'shippingServiceCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCode'
        ],
        'shipToLocationUsedForEstimate' => [
            'type' => 'DKH\eBaySDK\Browse\Types\ShipToLocation',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'shipToLocationUsedForEstimate'
        ],
        'trademarkSymbol' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trademarkSymbol'
        ],
        'type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'type'
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
