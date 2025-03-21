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
 * @property string $changeRequestId
 * @property \DKH\eBaySDK\Catalog\Enums\ChangeRequestStatus $changeRequestStatus
 * @property \DKH\eBaySDK\Catalog\Enums\ChangeRequestType $changeRequestType
 * @property string $creationDate
 * @property string $expectedCompletionDate
 * @property \DKH\eBaySDK\Catalog\Types\ProcessResolution $processResolution
 * @property string $processStatusMessage
 * @property string $reasonForChangeRequest
 * @property string $referenceId
 * @property \DKH\eBaySDK\Catalog\Enums\ReferenceType $referenceType
 * @property string $resolutionDate
 * @property \DKH\eBaySDK\Catalog\Types\SuggestedProduct $suggestedProduct
 */
class ChangeRequest extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'changeRequestId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'changeRequestId'
        ],
        'changeRequestStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'changeRequestStatus'
        ],
        'changeRequestType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'changeRequestType'
        ],
        'creationDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationDate'
        ],
        'expectedCompletionDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'expectedCompletionDate'
        ],
        'processResolution' => [
            'type' => 'DKH\eBaySDK\Catalog\Types\ProcessResolution',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'processResolution'
        ],
        'processStatusMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'processStatusMessage'
        ],
        'reasonForChangeRequest' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'reasonForChangeRequest'
        ],
        'referenceId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'referenceId'
        ],
        'referenceType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'referenceType'
        ],
        'resolutionDate' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'resolutionDate'
        ],
        'suggestedProduct' => [
            'type' => 'DKH\eBaySDK\Catalog\Types\SuggestedProduct',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'suggestedProduct'
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
