<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Taxonomy\Types;

/**
 *
 * @property \DKH\eBaySDK\Taxonomy\Types\CategorySuggestion[] $categorySuggestions
 * @property string $categoryTreeId
 * @property string $categoryTreeVersion
 */
class CategorySuggestionResponse extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'categorySuggestions' => [
            'type' => 'DKH\eBaySDK\Taxonomy\Types\CategorySuggestion',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'categorySuggestions'
        ],
        'categoryTreeId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeId'
        ],
        'categoryTreeVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'categoryTreeVersion'
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
