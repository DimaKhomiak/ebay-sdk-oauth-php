<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Trading\Types;

/**
 *
 * @property boolean $AlwaysUseThisPaymentAddress
 * @property \DKH\eBaySDK\Trading\Enums\DisplayPayNowButtonCodeType $DisplayPayNowButton
 * @property boolean $PayPalPreferred
 * @property string $DefaultPayPalEmailAddress
 * @property boolean $PayPalAlwaysOn
 * @property \DKH\eBaySDK\Trading\Types\AddressType $SellerPaymentAddress
 * @property \DKH\eBaySDK\Trading\Enums\UPSRateOptionCodeType $UPSRateOption
 * @property \DKH\eBaySDK\Trading\Enums\FedExRateOptionCodeType $FedExRateOption
 * @property \DKH\eBaySDK\Trading\Enums\USPSRateOptionCodeType $USPSRateOption
 */
class SellerPaymentPreferencesType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AlwaysUseThisPaymentAddress' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AlwaysUseThisPaymentAddress'
        ],
        'DisplayPayNowButton' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisplayPayNowButton'
        ],
        'PayPalPreferred' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalPreferred'
        ],
        'DefaultPayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DefaultPayPalEmailAddress'
        ],
        'PayPalAlwaysOn' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalAlwaysOn'
        ],
        'SellerPaymentAddress' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentAddress'
        ],
        'UPSRateOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UPSRateOption'
        ],
        'FedExRateOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FedExRateOption'
        ],
        'USPSRateOption' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'USPSRateOption'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
