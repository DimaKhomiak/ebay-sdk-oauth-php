<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Marketing\Types;

/**
 *
 * @property \DKH\eBaySDK\Marketing\Enums\InventoryCriterionEnum $inventoryCriterionType
 * @property \DKH\eBaySDK\Marketing\Types\InventoryItem[] $inventoryItems
 * @property string[] $listingIds
 * @property \DKH\eBaySDK\Marketing\Types\RuleCriteria $ruleCriteria
 */
class InventoryCriterion extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'inventoryCriterionType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'inventoryCriterionType'
        ],
        'inventoryItems' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\InventoryItem',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'inventoryItems'
        ],
        'listingIds' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'listingIds'
        ],
        'ruleCriteria' => [
            'type' => 'DKH\eBaySDK\Marketing\Types\RuleCriteria',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ruleCriteria'
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
