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
 * @property string $ApplicationData
 * @property boolean $AutoPay
 * @property \DKH\eBaySDK\Trading\Types\PaymentDetailsType $PaymentDetails
 * @property \DKH\eBaySDK\Trading\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DKH\eBaySDK\Trading\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DKH\eBaySDK\Trading\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DKH\eBaySDK\Trading\Types\CharityType $Charity
 * @property \DKH\eBaySDK\Trading\Enums\CountryCodeType $Country
 * @property \DKH\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DKH\eBaySDK\Trading\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property \DKH\eBaySDK\Trading\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DKH\eBaySDK\Trading\Types\ListingDetailsType $ListingDetails
 * @property \DKH\eBaySDK\Trading\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DKH\eBaySDK\Trading\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DKH\eBaySDK\Trading\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DKH\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DKH\eBaySDK\Trading\Types\CategoryType $PrimaryCategory
 * @property \DKH\eBaySDK\Trading\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property string $PrivateNotes
 * @property boolean $RelistLink
 * @property \DKH\eBaySDK\Trading\Types\AmountType $ReservePrice
 * @property \DKH\eBaySDK\Trading\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DKH\eBaySDK\Trading\Types\CategoryType $SecondaryCategory
 * @property \DKH\eBaySDK\Trading\Types\CategoryType $FreeAddedCategory
 * @property \DKH\eBaySDK\Trading\Types\UserType $Seller
 * @property \DKH\eBaySDK\Trading\Types\SellingStatusType $SellingStatus
 * @property \DKH\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DKH\eBaySDK\Trading\Enums\SiteCodeType $Site
 * @property \DKH\eBaySDK\Trading\Types\AmountType $StartPrice
 * @property \DKH\eBaySDK\Trading\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DKH\eBaySDK\Trading\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DKH\eBaySDK\Trading\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $UseTaxTable
 * @property boolean $BuyerResponsibleForShipping
 * @property string $eBayNotes
 * @property integer $QuestionCount
 * @property boolean $Relisted
 * @property integer $QuantityAvailable
 * @property string $SKU
 * @property boolean $CategoryBasedAttributesPrefill
 * @property string $PostalCode
 * @property boolean $ShippingTermsInDescription
 * @property \DKH\eBaySDK\Trading\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property \DKH\eBaySDK\Trading\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DKH\eBaySDK\Trading\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DKH\eBaySDK\Trading\Types\NameValueListArrayType $ItemSpecifics
 * @property \DKH\eBaySDK\Trading\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DKH\eBaySDK\Trading\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DKH\eBaySDK\Trading\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DKH\eBaySDK\Trading\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DKH\eBaySDK\Trading\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DKH\eBaySDK\Trading\Types\AmountType $BuyerGuaranteePrice
 * @property \DKH\eBaySDK\Trading\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DKH\eBaySDK\Trading\Types\ReturnPolicyType $ReturnPolicy
 * @property \DKH\eBaySDK\Trading\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DKH\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DKH\eBaySDK\Trading\Types\VariationsType $Variations
 * @property \DKH\eBaySDK\Trading\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DKH\eBaySDK\Trading\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property \DKH\eBaySDK\Trading\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VRM
 * @property \DKH\eBaySDK\Trading\Types\QuantityInfoType $QuantityInfo
 * @property \DKH\eBaySDK\Trading\Types\SellerProfilesType $SellerProfiles
 * @property \DKH\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DKH\eBaySDK\Trading\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DKH\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DKH\eBaySDK\Trading\Types\AmountType $FloorPrice
 * @property \DKH\eBaySDK\Trading\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DKH\eBaySDK\Trading\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DKH\eBaySDK\Trading\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DKH\eBaySDK\Trading\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DKH\eBaySDK\Trading\Types\DigitalGoodInfoType $DigitalGoodInfo
 * @property boolean $eBayPlus
 * @property boolean $eBayPlusEligible
 * @property boolean $eMailDeliveryAvailable
 * @property boolean $IsSecureDescription
 */
class ItemType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ApplicationData' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplicationData'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'PaymentDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PaymentDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ],
        'BiddingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BiddingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BiddingDetails'
        ],
        'MotorsGermanySearchable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MotorsGermanySearchable'
        ],
        'BuyerProtection' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerProtection'
        ],
        'BuyItNowPrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyItNowPrice'
        ],
        'CategoryMappingAllowed' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryMappingAllowed'
        ],
        'Charity' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CharityType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Charity'
        ],
        'Country' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Country'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'Description' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ],
        'DescriptionReviseMode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DescriptionReviseMode'
        ],
        'HitCounter' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCounter'
        ],
        'ItemID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ],
        'ListingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ],
        'ListingDesigner' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ListingDesignerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDesigner'
        ],
        'ListingDuration' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDuration'
        ],
        'ListingEnhancement' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ListingEnhancement'
        ],
        'ListingType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingType'
        ],
        'Location' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Location'
        ],
        'LotSize' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LotSize'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'PayPalEmailAddress' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ],
        'PrimaryCategory' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ],
        'ProductListingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ProductListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductListingDetails'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'PrivateNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ],
        'RelistLink' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistLink'
        ],
        'ReservePrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ],
        'ReviseStatus' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ReviseStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReviseStatus'
        ],
        'ScheduleTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduleTime'
        ],
        'SecondaryCategory' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ],
        'FreeAddedCategory' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ],
        'Seller' => [
            'type' => 'DKH\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'SellingStatus' => [
            'type' => 'DKH\eBaySDK\Trading\Types\SellingStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'ShippingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'ShipToLocations' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ShipToLocations'
        ],
        'Site' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Site'
        ],
        'StartPrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Storefront' => [
            'type' => 'DKH\eBaySDK\Trading\Types\StorefrontType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Storefront'
        ],
        'SubTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SubTitle'
        ],
        'TimeLeft' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeLeft'
        ],
        'Title' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ],
        'UUID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ],
        'VATDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\VATDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VATDetails'
        ],
        'SellerVacationNote' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerVacationNote'
        ],
        'WatchCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
        ],
        'HitCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HitCount'
        ],
        'DisableBuyerRequirements' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DisableBuyerRequirements'
        ],
        'BestOfferDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BestOfferDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferDetails'
        ],
        'LocationDefaulted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LocationDefaulted'
        ],
        'UseTaxTable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseTaxTable'
        ],
        'BuyerResponsibleForShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerResponsibleForShipping'
        ],
        'eBayNotes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNotes'
        ],
        'QuestionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuestionCount'
        ],
        'Relisted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Relisted'
        ],
        'QuantityAvailable' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ],
        'SKU' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ],
        'CategoryBasedAttributesPrefill' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryBasedAttributesPrefill'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'ShippingTermsInDescription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTermsInDescription'
        ],
        'PictureDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PictureDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureDetails'
        ],
        'DispatchTimeMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DispatchTimeMax'
        ],
        'SellerContactDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerContactDetails'
        ],
        'TotalQuestionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalQuestionCount'
        ],
        'ProxyItem' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProxyItem'
        ],
        'ExtendedSellerContactDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ExtendedContactDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedSellerContactDetails'
        ],
        'LeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ],
        'NewLeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewLeadCount'
        ],
        'ItemSpecifics' => [
            'type' => 'DKH\eBaySDK\Trading\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'ClassifiedAdPayPerLeadFee' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ],
        'ApplyBuyerProtection' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BuyerProtectionDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ApplyBuyerProtection'
        ],
        'ListingSubtype2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingSubtype2'
        ],
        'MechanicalCheckAccepted' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MechanicalCheckAccepted'
        ],
        'UpdateSellerInfo' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateSellerInfo'
        ],
        'UpdateReturnPolicy' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateReturnPolicy'
        ],
        'ItemPolicyViolation' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ItemPolicyViolationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemPolicyViolation'
        ],
        'CrossBorderTrade' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CrossBorderTrade'
        ],
        'BusinessSellerDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BusinessSellerDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BuyerRequirementDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ReturnPolicy' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnPolicy'
        ],
        'PaymentAllowedSite' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentAllowedSite'
        ],
        'InventoryTrackingMethod' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'Variations' => [
            'type' => 'DKH\eBaySDK\Trading\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'ItemCompatibilityList' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ItemCompatibilityListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityList'
        ],
        'ItemCompatibilityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemCompatibilityCount'
        ],
        'ConditionID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionID'
        ],
        'ConditionDescription' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDescription'
        ],
        'ConditionDisplayName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDisplayName'
        ],
        'TaxCategory' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TaxCategory'
        ],
        'QuantityAvailableHint' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailableHint'
        ],
        'QuantityThreshold' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityThreshold'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DKH\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'SellerProvidedTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProvidedTitle'
        ],
        'VIN' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VIN'
        ],
        'VRM' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VRM'
        ],
        'QuantityInfo' => [
            'type' => 'DKH\eBaySDK\Trading\Types\QuantityInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'SellerProfiles' => [
            'type' => 'DKH\eBaySDK\Trading\Types\SellerProfilesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ],
        'ShippingServiceCostOverrideList' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShippingServiceCostOverrideListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ],
        'ShippingPackageDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShipPackageDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackageDetails'
        ],
        'TopRatedListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TopRatedListing'
        ],
        'QuantityRestrictionPerBuyer' => [
            'type' => 'DKH\eBaySDK\Trading\Types\QuantityRestrictionPerBuyerInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ],
        'FloorPrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ],
        'CeilingPrice' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CeilingPrice'
        ],
        'IsIntermediatedShippingEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsIntermediatedShippingEligible'
        ],
        'UnitInfo' => [
            'type' => 'DKH\eBaySDK\Trading\Types\UnitInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UnitInfo'
        ],
        'RelistParentID' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistParentID'
        ],
        'ConditionDefinition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConditionDefinition'
        ],
        'HideFromSearch' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HideFromSearch'
        ],
        'ReasonHideFromSearch' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReasonHideFromSearch'
        ],
        'IncludeRecommendations' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IncludeRecommendations'
        ],
        'PickupInStoreDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PickupInStoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupInStoreDetails'
        ],
        'eBayNowEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowEligible'
        ],
        'eBayNowAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayNowAvailable'
        ],
        'IgnoreQuantity' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IgnoreQuantity'
        ],
        'AvailableForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AvailableForPickupDropOff'
        ],
        'EligibleForPickupDropOff' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EligibleForPickupDropOff'
        ],
        'LiveAuction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LiveAuction'
        ],
        'DigitalGoodInfo' => [
            'type' => 'DKH\eBaySDK\Trading\Types\DigitalGoodInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalGoodInfo'
        ],
        'eBayPlus' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlus'
        ],
        'eBayPlusEligible' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPlusEligible'
        ],
        'eMailDeliveryAvailable' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eMailDeliveryAvailable'
        ],
        'IsSecureDescription' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsSecureDescription'
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
