<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \DKH\eBaySDK\Sdk();

$trading = new \DKH\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \DKH\eBaySDK\Sdk::VERSION;
