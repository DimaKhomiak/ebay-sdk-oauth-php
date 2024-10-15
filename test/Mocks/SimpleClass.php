<?php
namespace DKH\eBaySDK\Test\Mocks;

class SimpleClass extends \DKH\eBaySDK\Types\BaseType
{
    private static $propertyTypes = [
        'integer' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'integer'
        ],
        'string' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'string'
        ],
        'double' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'double'
        ],
        'booleanTrue' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanTrue'
        ],
        'booleanFalse' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanFalse'
        ],
        'DateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DateTime'
        ],
        'SimpleClass' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\SimpleClass',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SimpleClass'
        ],
        'strings' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'strings'
        ],
        'integers' => [
            'type' => 'integer',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'integers'
        ],
        'base64BinaryType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\Base64BinaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'base64BinaryType'
        ],
        'booleanType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\BooleanType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'booleanType'
        ],
        'decimalType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalType'
        ],
        'doubleType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DoubleType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'doubleType'
        ],
        'integerType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\IntegerType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'integerType'
        ],
        'stringType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\StringType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'stringType'
        ],
        'tokenType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\TokenType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'tokenType'
        ],
        'uriType' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\URIType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'uriType'
        ],
        'IntegerAttribute' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'IntegerAttribute'
        ],
        'doubleAttribute' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'doubleAttribute'
        ],
        'BooleanTrueAttribute' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'BooleanTrueAttribute'
        ],
        'booleanFalseAttribute' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'booleanFalseAttribute'
        ],
        'DateTimeAttribute' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => true,
            'attributeName' => 'DateTimeAttribute'
        ],
        'decimalTypes' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'decimalTypes'
        ],
        'decimalTypePosInteger' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypePosInteger'
        ],
        'decimalTypePosFloat' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypePosFloat'
        ],
        'decimalTypeNegInteger' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypeNegInteger'
        ],
        'decimalTypeNegFloat' => [
            'type' => 'DKH\eBaySDK\Test\Mocks\DecimalType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'decimalTypeNegFloat'
        ],
        'anyType' => [
            'type' => 'any',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'anyType'
        ],
        'anyTypes' => [
            'type' => 'any',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'anyTypes'
        ]
    ];

    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://davidtsadler.com"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
