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
 * @property \DKH\eBaySDK\Taxonomy\Types\AspectConstraint $aspectConstraint
 * @property \DKH\eBaySDK\Taxonomy\Types\AspectValue[] $aspectValues
 * @property string $localizedAspectName
 */
class Aspect extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'aspectConstraint' => [
            'type' => 'DKH\eBaySDK\Taxonomy\Types\AspectConstraint',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'aspectConstraint'
        ],
        'aspectValues' => [
            'type' => 'DKH\eBaySDK\Taxonomy\Types\AspectValue',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectValues'
        ],
        'localizedAspectName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'localizedAspectName'
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
