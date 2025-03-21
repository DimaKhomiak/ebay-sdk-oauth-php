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
 * @property string $Name
 * @property integer $ItemCount
 * @property integer $FavoriteSellerCount
 * @property \DKH\eBaySDK\Trading\Types\ItemArrayType $ItemArray
 * @property \DKH\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType $FavoriteSearches
 * @property \DKH\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType $FavoriteSellers
 */
class UserDefinedListType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Name' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ],
        'ItemCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCount'
        ],
        'FavoriteSellerCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellerCount'
        ],
        'ItemArray' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemArray'
        ],
        'FavoriteSearches' => [
            'type' => 'DKH\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ],
        'FavoriteSellers' => [
            'type' => 'DKH\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
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
