<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DKH\eBaySDK\PostOrder\Types\GetDetailResponse $detail
 * @property \DKH\eBaySDK\PostOrder\Types\ReturnEligibilityPerItemType $eligibilityResult
 * @property string $returnId
 * @property \DKH\eBaySDK\PostOrder\Types\ReturnSummaryType $summary
 */
class CreateReturnResponse extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'detail' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\GetDetailResponse',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'detail'
        ],
        'eligibilityResult' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\ReturnEligibilityPerItemType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eligibilityResult'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'summary' => [
            'type' => 'DKH\eBaySDK\PostOrder\Types\ReturnSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'summary'
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
