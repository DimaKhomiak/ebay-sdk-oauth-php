<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DateTime $EstimatedDeliveryDate
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $InsuredValue
 * @property \DKH\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \DKH\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \DKH\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property integer $ShipmentID
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $PostageTotal
 * @property \DateTime $PrintedTime
 * @property \DKH\eBaySDK\MerchantData\Types\AddressType $ShipFromAddress
 * @property \DKH\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \DKH\eBaySDK\MerchantData\Enums\ShippingFeatureCodeType[] $ShippingFeature
 * @property \DKH\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property \DKH\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \DKH\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 * @property \DKH\eBaySDK\MerchantData\Types\ItemTransactionIDType[] $ItemTransactionID
 * @property \DateTime $DeliveryDate
 * @property \DKH\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property \DateTime $RefundGrantedTime
 * @property \DateTime $RefundRequestedTime
 * @property \DKH\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType $Status
 * @property \DateTime $ShippedTime
 * @property string $Notes
 * @property \DKH\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \DKH\eBaySDK\MerchantData\Types\ShipmentLineItemType $ShipmentLineItem
 */
class ShipmentType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'EstimatedDeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ],
        'InsuredValue' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ],
        'PackageDepth' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ],
        'PackageLength' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ],
        'PackageWidth' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ],
        'PayPalShipmentID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ],
        'ShipmentID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ],
        'PostageTotal' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ],
        'PrintedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ],
        'ShipFromAddress' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ],
        'ShippingAddress' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingFeature' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'ShippingServiceUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ],
        'WeightMajor' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ],
        'WeightMinor' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\MeasureType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        ],
        'ItemTransactionID' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ItemTransactionIDType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ],
        'DeliveryDate' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ],
        'DeliveryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ],
        'RefundGrantedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ],
        'RefundRequestedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ],
        'Status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'Notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ],
        'ShipmentTrackingDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ],
        'ShipmentLineItem' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ShipmentLineItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
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
