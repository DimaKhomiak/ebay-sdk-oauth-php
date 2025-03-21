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
 * @property string $Description
 * @property boolean $ExpeditedService
 * @property boolean $InternationalService
 * @property string $ShippingService
 * @property integer $ShippingServiceID
 * @property integer $ShippingTimeMax
 * @property integer $ShippingTimeMin
 * @property \DKH\eBaySDK\Trading\Enums\ShippingServiceCodeType $ShippingServiceCode
 * @property \DKH\eBaySDK\Trading\Enums\ShippingTypeCodeType[] $ServiceType
 * @property \DKH\eBaySDK\Trading\Enums\ShippingPackageCodeType[] $ShippingPackage
 * @property boolean $DimensionsRequired
 * @property boolean $ValidForSellingFlow
 * @property boolean $SurchargeApplicable
 * @property \DKH\eBaySDK\Trading\Enums\ShippingCarrierCodeType[] $ShippingCarrier
 * @property boolean $CODService
 * @property \DKH\eBaySDK\Trading\Types\AnnouncementMessageType[] $DeprecationDetails
 * @property integer $MappedToShippingServiceID
 * @property string $CostGroupFlat
 * @property \DKH\eBaySDK\Trading\Types\ShippingServicePackageDetailsType[] $ShippingServicePackageDetails
 * @property boolean $WeightRequired
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 * @property string $ShippingCategory
 */
class ShippingServiceDetailsType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'ExpeditedService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ],
        'InternationalService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InternationalService'
        ],
        'ShippingService' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ],
        'ShippingServiceID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceID'
        ],
        'ShippingTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ],
        'ShippingTimeMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ],
        'ShippingServiceCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCode'
        ],
        'ServiceType' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ServiceType'
        ],
        'ShippingPackage' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ],
        'DimensionsRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DimensionsRequired'
        ],
        'ValidForSellingFlow' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValidForSellingFlow'
        ],
        'SurchargeApplicable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SurchargeApplicable'
        ],
        'ShippingCarrier' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrier'
        ],
        'CODService' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CODService'
        ],
        'DeprecationDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AnnouncementMessageType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'DeprecationDetails'
        ],
        'MappedToShippingServiceID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MappedToShippingServiceID'
        ],
        'CostGroupFlat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CostGroupFlat'
        ],
        'ShippingServicePackageDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShippingServicePackageDetailsType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShippingServicePackageDetails'
        ],
        'WeightRequired' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WeightRequired'
        ],
        'DetailVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ],
        'ShippingCategory' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingCategory'
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
