<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\Catalog\Services;

class CatalogService extends \DKH\eBaySDK\Catalog\Services\CatalogBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetProduct' => [
            'method' => 'GET',
            'resource' => 'product/{epid}',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\GetProductRestResponse',
            'params' => [
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'Search' => [
            'method' => 'GET',
            'resource' => 'product_summary/search',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\SearchRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'mpn' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetProductMetadata' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\GetProductMetadataRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetProductMetadataForCategories' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata_for_categories',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequest' => [
            'method' => 'GET',
            'resource' => 'change_request/{change_request_id}',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\GetChangeRequestRestResponse',
            'params' => [
                'change_request_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequests' => [
            'method' => 'GET',
            'resource' => 'change_request',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateChangeRequest' => [
            'method' => 'PUT',
            'resource' => 'change_request',
            'responseClass' => '\DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestResponse',
            'params' => [
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\GetProductRestResponse
     */
    public function getProduct(\DKH\eBaySDK\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->getProductAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync(\DKH\eBaySDK\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->callOperationAsync('GetProduct', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\SearchRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\SearchRestResponse
     */
    public function search(\DKH\eBaySDK\Catalog\Types\SearchRestRequest $request)
    {
        return $this->searchAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\SearchRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync(\DKH\eBaySDK\Catalog\Types\SearchRestRequest $request)
    {
        return $this->callOperationAsync('Search', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\GetProductMetadataRestResponse
     */
    public function getProductMetadata(\DKH\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->getProductMetadataAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataAsync(\DKH\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadata', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse
     */
    public function getProductMetadataForCategories(\DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->getProductMetadataForCategoriesAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataForCategoriesAsync(\DKH\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadataForCategories', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\GetChangeRequestRestResponse
     */
    public function getChangeRequest(\DKH\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->getChangeRequestAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestAsync(\DKH\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequest', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse
     */
    public function getChangeRequests(\DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->getChangeRequestsAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestsAsync(\DKH\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequests', $request);
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestResponse
     */
    public function createChangeRequest(\DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->createChangeRequestAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChangeRequestAsync(\DKH\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('CreateChangeRequest', $request);
    }
}
