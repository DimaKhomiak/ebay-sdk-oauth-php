<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\PostOrder\Types;

/**
 *
 * @property string $carrierUsed
 * @property string $escalateReason
 * @property \DKH\eBaySDK\PostOrder\Types\MoneyMovementRef $moneyMovementRef
 * @property \DKH\eBaySDK\PostOrder\Types\Amount $partialRefundAmount
 * @property string $RMA
 * @property \DKH\eBaySDK\PostOrder\Types\ReturnAddressType $sellerReturnAddress
 * @property string $toEmailAddress
 * @property string $trackingNumber
 */
class ResponseHistoryAttributesType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'carrierUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'carrierUsed'
        ],
        'escalateReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalateReason'
        ],
        'moneyMovementRef' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\MoneyMovementRef',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'moneyMovementRef'
        ],
        'partialRefundAmount' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'partialRefundAmount'
        ],
        'RMA' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RMA'
        ],
        'sellerReturnAddress' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\ReturnAddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerReturnAddress'
        ],
        'toEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'toEmailAddress'
        ],
        'trackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'trackingNumber'
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
