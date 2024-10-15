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
 * @property integer $availabilityThreshold
 * @property \DKH\eBaySDK\Browse\Enums\AvailabilityThresholdEnum $availabilityThresholdType
 * @property \DKH\eBaySDK\Browse\Enums\DeliveryOptionsEnum[] $deliveryOptions
 * @property \DKH\eBaySDK\Browse\Enums\AvailabilityStatusEnum $estimatedAvailabilityStatus
 * @property integer $estimatedAvailableQuantity
 * @property integer $estimatedSoldQuantity
 */
class EstimatedAvailability extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'availabilityThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availabilityThreshold'
        ],
        'availabilityThresholdType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'availabilityThresholdType'
        ],
        'deliveryOptions' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'deliveryOptions'
        ],
        'estimatedAvailabilityStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimatedAvailabilityStatus'
        ],
        'estimatedAvailableQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimatedAvailableQuantity'
        ],
        'estimatedSoldQuantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'estimatedSoldQuantity'
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
