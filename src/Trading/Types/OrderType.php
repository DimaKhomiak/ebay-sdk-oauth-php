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
 * @property string $OrderID
 * @property \DKH\eBaySDK\Trading\Enums\OrderStatusCodeType $OrderStatus
 * @property \DKH\eBaySDK\Trading\Types\AmountType $AdjustmentAmount
 * @property \DKH\eBaySDK\Trading\Types\AmountType $AmountPaid
 * @property \DKH\eBaySDK\Trading\Types\AmountType $AmountSaved
 * @property \DKH\eBaySDK\Trading\Types\CheckoutStatusType $CheckoutStatus
 * @property \DKH\eBaySDK\Trading\Types\ShippingDetailsType $ShippingDetails
 * @property \DKH\eBaySDK\Trading\Enums\TradingRoleCodeType $CreatingUserRole
 * @property \DateTime $CreatedTime
 * @property \DKH\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType[] $PaymentMethods
 * @property string $SellerEmail
 * @property \DKH\eBaySDK\Trading\Types\AddressType $ShippingAddress
 * @property \DKH\eBaySDK\Trading\Types\ShippingServiceOptionsType $ShippingServiceSelected
 * @property \DKH\eBaySDK\Trading\Types\AmountType $Subtotal
 * @property \DKH\eBaySDK\Trading\Types\AmountType $Total
 * @property \DKH\eBaySDK\Trading\Types\ExternalTransactionType[] $ExternalTransaction
 * @property \DKH\eBaySDK\Trading\Types\TransactionArrayType $TransactionArray
 * @property string $BuyerUserID
 * @property \DateTime $PaidTime
 * @property \DateTime $ShippedTime
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property string $BuyerCheckoutMessage
 * @property string $EIASToken
 * @property \DKH\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DKH\eBaySDK\Trading\Types\PaymentHoldDetailType $PaymentHoldDetails
 * @property \DKH\eBaySDK\Trading\Types\AmountType $RefundAmount
 * @property string $RefundStatus
 * @property boolean $IsMultiLegShipping
 * @property \DKH\eBaySDK\Trading\Types\MultiLegShippingDetailsType $MultiLegShippingDetails
 * @property \DKH\eBaySDK\Trading\Types\PaymentsInformationType $MonetaryDetails
 * @property \DKH\eBaySDK\Trading\Types\PickupDetailsType $PickupDetails
 * @property \DKH\eBaySDK\Trading\Types\PickupMethodSelectedType $PickupMethodSelected
 * @property string $SellerUserID
 * @property string $SellerEIASToken
 * @property string $CancelReason
 * @property \DKH\eBaySDK\Trading\Enums\CancelStatusCodeType $CancelStatus
 * @property string $CancelReasonDetails
 * @property \DKH\eBaySDK\Trading\Types\AmountType $ShippingConvenienceCharge
 * @property \DKH\eBaySDK\Trading\Types\CancelDetailType[] $CancelDetail
 * @property string $LogisticsPlanType
 * @property \DKH\eBaySDK\Trading\Types\TaxIdentifierType[] $BuyerTaxIdentifier
 * @property \DKH\eBaySDK\Trading\Types\BuyerPackageEnclosuresType $BuyerPackageEnclosures
 * @property string $ExtendedOrderID
 * @property boolean $ContainseBayPlusTransaction
 */
class OrderType extends \DKH\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'OrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ],
        'OrderStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ],
        'AdjustmentAmount' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ],
        'AmountPaid' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ],
        'AmountSaved' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ],
        'CheckoutStatus' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CheckoutStatusType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'ShippingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ],
        'CreatingUserRole' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ],
        'CreatedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ],
        'PaymentMethods' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ],
        'SellerEmail' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ],
        'ShippingAddress' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AddressType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ],
        'ShippingServiceSelected' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ],
        'Subtotal' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ],
        'Total' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ],
        'ExternalTransaction' => [
            'type' => 'DKH\eBaySDK\Trading\Types\ExternalTransactionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ],
        'TransactionArray' => [
            'type' => 'DKH\eBaySDK\Trading\Types\TransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'BuyerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ],
        'PaidTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ],
        'ShippedTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'BuyerCheckoutMessage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ],
        'EIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'PaymentHoldDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PaymentHoldDetailType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ],
        'RefundAmount' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'RefundStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'IsMultiLegShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ],
        'MultiLegShippingDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\MultiLegShippingDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ],
        'MonetaryDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PaymentsInformationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ],
        'PickupDetails' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PickupDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ],
        'PickupMethodSelected' => [
            'type' => 'DKH\eBaySDK\Trading\Types\PickupMethodSelectedType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ],
        'SellerUserID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ],
        'SellerEIASToken' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ],
        'CancelReason' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
        ],
        'CancelReasonDetails' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelReasonDetails'
        ],
        'ShippingConvenienceCharge' => [
            'type' => 'DKH\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingConvenienceCharge'
        ],
        'CancelDetail' => [
            'type' => 'DKH\eBaySDK\Trading\Types\CancelDetailType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'CancelDetail'
        ],
        'LogisticsPlanType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LogisticsPlanType'
        ],
        'BuyerTaxIdentifier' => [
            'type' => 'DKH\eBaySDK\Trading\Types\TaxIdentifierType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'BuyerTaxIdentifier'
        ],
        'BuyerPackageEnclosures' => [
            'type' => 'DKH\eBaySDK\Trading\Types\BuyerPackageEnclosuresType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerPackageEnclosures'
        ],
        'ExtendedOrderID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtendedOrderID'
        ],
        'ContainseBayPlusTransaction' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ContainseBayPlusTransaction'
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
