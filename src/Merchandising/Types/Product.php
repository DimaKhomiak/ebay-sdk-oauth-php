<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Merchandising\Types;

/**
 *
 * @property \DKH\eBaySDK\Merchandising\Types\ProductId $productId
 * @property string $title
 * @property string $productURL
 * @property string $catalogName
 * @property string $imageURL
 * @property integer $reviewCount
 * @property \DKH\eBaySDK\Merchandising\Types\Amount $priceRangeMin
 * @property \DKH\eBaySDK\Merchandising\Types\Amount $priceRangeMax
 */
class Product extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'productId' => [
            'type' => 'DKH\eBaySDK\Merchandising\Types\ProductId',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productId'
        ],
        'title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'title'
        ],
        'productURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productURL'
        ],
        'catalogName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'catalogName'
        ],
        'imageURL' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'imageURL'
        ],
        'reviewCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reviewCount'
        ],
        'priceRangeMin' => [
            'type' => 'DKH\eBaySDK\Merchandising\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceRangeMin'
        ],
        'priceRangeMax' => [
            'type' => 'DKH\eBaySDK\Merchandising\Types\Amount',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'priceRangeMax'
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
