<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\ReturnManagement\Types;

/**
 *
 * @property \DKH\eBaySDK\ReturnManagement\Types\ReturnIdType $ReturnId
 */
class SetItemAsReceivedRequest extends \DKH\eBaySDK\ReturnManagement\Types\BaseRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ReturnId' => [
            'type' => 'DKH\eBaySDK\ReturnManagement\Types\ReturnIdType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnId'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/returns/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'setItemAsReceivedRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
