<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $ApplicationData
 * @property \DKH\eBaySDK\MerchantData\Types\AttributeArrayType $AttributeArray
 * @property boolean $AutoPay
 * @property \DKH\eBaySDK\MerchantData\Types\PaymentDetailsType $PaymentDetails
 * @property \DKH\eBaySDK\MerchantData\Types\BiddingDetailsType $BiddingDetails
 * @property boolean $MotorsGermanySearchable
 * @property \DKH\eBaySDK\MerchantData\Enums\BuyerProtectionCodeType $BuyerProtection
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $BuyItNowPrice
 * @property boolean $CategoryMappingAllowed
 * @property \DKH\eBaySDK\MerchantData\Types\CharityType $Charity
 * @property \DKH\eBaySDK\MerchantData\Enums\CountryCodeType $Country
 * @property \DKH\eBaySDK\MerchantData\Enums\CurrencyCodeType $Currency
 * @property string $Description
 * @property \DKH\eBaySDK\MerchantData\Enums\DescriptionReviseModeCodeType $DescriptionReviseMode
 * @property integer $GiftIcon
 * @property \DKH\eBaySDK\MerchantData\Enums\GiftServicesCodeType[] $GiftServices
 * @property \DKH\eBaySDK\MerchantData\Enums\HitCounterCodeType $HitCounter
 * @property string $ItemID
 * @property \DKH\eBaySDK\MerchantData\Types\ListingDetailsType $ListingDetails
 * @property \DKH\eBaySDK\MerchantData\Types\ListingDesignerType $ListingDesigner
 * @property string $ListingDuration
 * @property \DKH\eBaySDK\MerchantData\Enums\ListingEnhancementsCodeType[] $ListingEnhancement
 * @property \DKH\eBaySDK\MerchantData\Enums\ListingTypeCodeType $ListingType
 * @property string $Location
 * @property integer $LotSize
 * @property \DKH\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $PayPalEmailAddress
 * @property \DKH\eBaySDK\MerchantData\Types\CategoryType $PrimaryCategory
 * @property boolean $PrivateListing
 * @property \DKH\eBaySDK\MerchantData\Types\ProductListingDetailsType $ProductListingDetails
 * @property integer $Quantity
 * @property string $PrivateNotes
 * @property boolean $RelistLink
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $ReservePrice
 * @property \DKH\eBaySDK\MerchantData\Types\ReviseStatusType $ReviseStatus
 * @property \DateTime $ScheduleTime
 * @property \DKH\eBaySDK\MerchantData\Types\CategoryType $SecondaryCategory
 * @property \DKH\eBaySDK\MerchantData\Types\CategoryType $FreeAddedCategory
 * @property \DKH\eBaySDK\MerchantData\Types\UserType $Seller
 * @property \DKH\eBaySDK\MerchantData\Types\SellingStatusType $SellingStatus
 * @property \DKH\eBaySDK\MerchantData\Types\ShippingDetailsType $ShippingDetails
 * @property string[] $ShipToLocations
 * @property \DKH\eBaySDK\MerchantData\Enums\SiteCodeType $Site
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $StartPrice
 * @property \DKH\eBaySDK\MerchantData\Types\StorefrontType $Storefront
 * @property string $SubTitle
 * @property string $TimeLeft
 * @property string $Title
 * @property string $UUID
 * @property \DKH\eBaySDK\MerchantData\Types\VATDetailsType $VATDetails
 * @property string $SellerVacationNote
 * @property integer $WatchCount
 * @property integer $HitCount
 * @property boolean $DisableBuyerRequirements
 * @property \DKH\eBaySDK\MerchantData\Types\BestOfferDetailsType $BestOfferDetails
 * @property boolean $LocationDefaulted
 * @property boolean $ThirdPartyCheckout
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
 * @property string $SellerInventoryID
 * @property \DKH\eBaySDK\MerchantData\Types\PictureDetailsType $PictureDetails
 * @property integer $DispatchTimeMax
 * @property boolean $SkypeEnabled
 * @property string $SkypeID
 * @property \DKH\eBaySDK\MerchantData\Enums\SkypeContactOptionCodeType[] $SkypeContactOption
 * @property boolean $ThirdPartyCheckoutIntegration
 * @property \DKH\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType $ListingCheckoutRedirectPreference
 * @property \DKH\eBaySDK\MerchantData\Types\AddressType $SellerContactDetails
 * @property integer $TotalQuestionCount
 * @property boolean $ProxyItem
 * @property \DKH\eBaySDK\MerchantData\Types\ExtendedContactDetailsType $ExtendedSellerContactDetails
 * @property integer $LeadCount
 * @property integer $NewLeadCount
 * @property \DKH\eBaySDK\MerchantData\Types\NameValueListArrayType $ItemSpecifics
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $ClassifiedAdPayPerLeadFee
 * @property \DKH\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType $ApplyBuyerProtection
 * @property \DKH\eBaySDK\MerchantData\Enums\ListingSubtypeCodeType $ListingSubtype2
 * @property boolean $MechanicalCheckAccepted
 * @property boolean $UpdateSellerInfo
 * @property boolean $UpdateReturnPolicy
 * @property \DKH\eBaySDK\MerchantData\Types\ItemPolicyViolationType $ItemPolicyViolation
 * @property string[] $CrossBorderTrade
 * @property \DKH\eBaySDK\MerchantData\Types\BusinessSellerDetailsType $BusinessSellerDetails
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $BuyerGuaranteePrice
 * @property \DKH\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType $BuyerRequirementDetails
 * @property \DKH\eBaySDK\MerchantData\Types\ReturnPolicyType $ReturnPolicy
 * @property \DKH\eBaySDK\MerchantData\Enums\SiteCodeType[] $PaymentAllowedSite
 * @property \DKH\eBaySDK\MerchantData\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DKH\eBaySDK\MerchantData\Types\VariationsType $Variations
 * @property \DKH\eBaySDK\MerchantData\Types\ItemCompatibilityListType $ItemCompatibilityList
 * @property integer $ItemCompatibilityCount
 * @property integer $ConditionID
 * @property string $ConditionDescription
 * @property string $ConditionDisplayName
 * @property string $TaxCategory
 * @property \DKH\eBaySDK\MerchantData\Enums\QuantityAvailableHintCodeType $QuantityAvailableHint
 * @property integer $QuantityThreshold
 * @property boolean $PostCheckoutExperienceEnabled
 * @property \DKH\eBaySDK\MerchantData\Types\DiscountPriceInfoType $DiscountPriceInfo
 * @property boolean $UseRecommendedProduct
 * @property string $SellerProvidedTitle
 * @property string $VIN
 * @property string $VRM
 * @property \DKH\eBaySDK\MerchantData\Types\QuantityInfoType $QuantityInfo
 * @property \DKH\eBaySDK\MerchantData\Types\SellerProfilesType $SellerProfiles
 * @property \DKH\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType $ShippingServiceCostOverrideList
 * @property \DKH\eBaySDK\MerchantData\Types\ShipPackageDetailsType $ShippingPackageDetails
 * @property boolean $TopRatedListing
 * @property \DKH\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType $QuantityRestrictionPerBuyer
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $FloorPrice
 * @property \DKH\eBaySDK\MerchantData\Types\AmountType $CeilingPrice
 * @property boolean $IsIntermediatedShippingEligible
 * @property \DKH\eBaySDK\MerchantData\Types\UnitInfoType $UnitInfo
 * @property integer $RelistParentID
 * @property string $ConditionDefinition
 * @property boolean $HideFromSearch
 * @property \DKH\eBaySDK\MerchantData\Enums\ReasonHideFromSearchCodeType $ReasonHideFromSearch
 * @property boolean $IncludeRecommendations
 * @property \DKH\eBaySDK\MerchantData\Types\PickupInStoreDetailsType $PickupInStoreDetails
 * @property boolean $eBayNowEligible
 * @property boolean $eBayNowAvailable
 * @property boolean $IgnoreQuantity
 * @property boolean $AvailableForPickupDropOff
 * @property boolean $EligibleForPickupDropOff
 * @property boolean $LiveAuction
 * @property \DKH\eBaySDK\MerchantData\Types\DigitalGoodInfoType $DigitalGoodInfo
 * @property boolean $eBayPlus
 * @property boolean $eBayPlusEligible
 * @property boolean $eMailDeliveryAvailable
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
        'AttributeArray' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AttributeArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AttributeArray'
        ],
        'AutoPay' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AutoPay'
        ],
        'PaymentDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\PaymentDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentDetails'
        ],
        'BiddingDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\BiddingDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\CharityType',
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
        'GiftIcon' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ],
        'GiftServices' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'GiftServices'
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\ListingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingDetails'
        ],
        'ListingDesigner' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ListingDesignerType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrimaryCategory'
        ],
        'PrivateListing' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PrivateListing'
        ],
        'ProductListingDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ProductListingDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReservePrice'
        ],
        'ReviseStatus' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ReviseStatusType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondaryCategory'
        ],
        'FreeAddedCategory' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\CategoryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FreeAddedCategory'
        ],
        'Seller' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'SellingStatus' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\SellingStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ],
        'ShippingDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ShippingDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ],
        'Storefront' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\StorefrontType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\VATDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\BestOfferDetailsType',
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
        'ThirdPartyCheckout' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckout'
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
        'SellerInventoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ],
        'PictureDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\PictureDetailsType',
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
        'SkypeEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SkypeEnabled'
        ],
        'SkypeID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SkypeID'
        ],
        'SkypeContactOption' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SkypeContactOption'
        ],
        'ThirdPartyCheckoutIntegration' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ThirdPartyCheckoutIntegration'
        ],
        'ListingCheckoutRedirectPreference' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ListingCheckoutRedirectPreferenceType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
        ],
        'SellerContactDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AddressType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\ExtendedContactDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\NameValueListArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ],
        'ClassifiedAdPayPerLeadFee' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdPayPerLeadFee'
        ],
        'ApplyBuyerProtection' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\BuyerProtectionDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\ItemPolicyViolationType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\BusinessSellerDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BusinessSellerDetails'
        ],
        'BuyerGuaranteePrice' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ],
        'BuyerRequirementDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\BuyerRequirementDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerRequirementDetails'
        ],
        'ReturnPolicy' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ReturnPolicyType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\VariationsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Variations'
        ],
        'ItemCompatibilityList' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ItemCompatibilityListType',
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
        'PostCheckoutExperienceEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostCheckoutExperienceEnabled'
        ],
        'DiscountPriceInfo' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\DiscountPriceInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ],
        'UseRecommendedProduct' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UseRecommendedProduct'
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\QuantityInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityInfo'
        ],
        'SellerProfiles' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\SellerProfilesType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerProfiles'
        ],
        'ShippingServiceCostOverrideList' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ShippingServiceCostOverrideListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCostOverrideList'
        ],
        'ShippingPackageDetails' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\ShipPackageDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\QuantityRestrictionPerBuyerInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityRestrictionPerBuyer'
        ],
        'FloorPrice' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FloorPrice'
        ],
        'CeilingPrice' => [
            'type' => 'DKH\eBaySDK\MerchantData\Types\AmountType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\UnitInfoType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\PickupInStoreDetailsType',
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
            'type' => 'DKH\eBaySDK\MerchantData\Types\DigitalGoodInfoType',
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
