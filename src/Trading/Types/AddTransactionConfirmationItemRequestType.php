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
 * @property string $RecipientUserID
 * @property string $VerifyEligibilityOnly
 * @property string $RecipientPostalCode
 * @property \DKH\eBaySDK\Trading\Enums\RecipientRelationCodeType $RecipientRelationType
 * @property \DKH\eBaySDK\Trading\Types\AmountType $NegotiatedPrice
 * @property \DKH\eBaySDK\Trading\Enums\SecondChanceOfferDurationCodeType $ListingDuration
 * @property string $ItemID
 * @property string $Comments
 */
class AddTransactionConfirmationItemRequestType extends \DKH\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'RecipientUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ],
        'VerifyEligibilityOnly' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VerifyEligibilityOnly'
        ],
        'RecipientPostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RecipientPostalCode'
        ],
        'RecipientRelationType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RecipientRelationType'
        ],
        'NegotiatedPrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NegotiatedPrice'
        ],
        'ListingDuration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'Comments' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Comments'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'AddTransactionConfirmationItemRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
