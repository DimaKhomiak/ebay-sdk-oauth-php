<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Catalog\Types;

/**
 *
 * @property \DKH\eBaySDK\Catalog\Types\CategoryAspect[] $aspects
 * @property \DKH\eBaySDK\Catalog\Types\ProductIdentifier $brand
 * @property \DKH\eBaySDK\Catalog\Types\ProductIdentifier $mpn
 */
class ProductMetadataForCategories extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspects' => [
            'type' => 'DKH\eBaySDK\Catalog\Types\CategoryAspect',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspects'
        ],
        'brand' => [
            'type' => 'DKH\eBaySDK\Catalog\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'brand'
        ],
        'mpn' => [
            'type' => 'DKH\eBaySDK\Catalog\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'mpn'
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
