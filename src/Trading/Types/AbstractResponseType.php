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
 * @property \DateTime $Timestamp
 * @property \DKH\eBaySDK\Trading\Enums\AckCodeType $Ack
 * @property string $CorrelationID
 * @property \DKH\eBaySDK\Trading\Types\ErrorType[] $Errors
 * @property string $Message
 * @property string $Version
 * @property string $Build
 * @property string $NotificationEventName
 * @property \DKH\eBaySDK\Trading\Types\DuplicateInvocationDetailsType $DuplicateInvocationDetails
 * @property string $RecipientUserID
 * @property string $EIASToken
 * @property string $NotificationSignature
 * @property string $HardExpirationWarning
 * @property \DKH\eBaySDK\Trading\Types\BotBlockResponseType $BotBlock
 * @property string $ExternalUserData
 */
class AbstractResponseType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Timestamp' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Timestamp'
        ],
        'Ack' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Ack'
        ],
        'CorrelationID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ],
        'Errors' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ErrorType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Errors'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'Version' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Version'
        ],
        'Build' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Build'
        ],
        'NotificationEventName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationEventName'
        ],
        'DuplicateInvocationDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\DuplicateInvocationDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DuplicateInvocationDetails'
        ],
        'RecipientUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'NotificationSignature' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NotificationSignature'
        ],
        'HardExpirationWarning' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HardExpirationWarning'
        ],
        'BotBlock' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BotBlockResponseType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BotBlock'
        ],
        'ExternalUserData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
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
