<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DKH\eBaySDK\BulkDataExchange\Services;

class BulkDataExchangeService extends \DKH\eBaySDK\BulkDataExchange\Services\BulkDataExchangeBaseService
{
    const API_VERSION = '1.5.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse
     */
    public function createUploadJob(\DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->createUploadJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'createUploadJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\CreateUploadJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse
     */
    public function startUploadJob(\DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->startUploadJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startUploadJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startUploadJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\StartUploadJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\AbortJobResponse
     */
    public function abortJob(\DKH\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->abortJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\AbortJobRequest $request)
    {
        return $this->callOperationAsync(
            'abortJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\AbortJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\GetJobsResponse
     */
    public function getJobs(\DKH\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->getJobsAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsync(\DKH\eBaySDK\BulkDataExchange\Types\GetJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getJobs',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\GetJobsResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse
     */
    public function getJobStatus(\DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->getJobStatusAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobStatusAsync(\DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getJobStatus',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\GetJobStatusResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse
     */
    public function startDownloadJob(\DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->startDownloadJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function startDownloadJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobRequest $request)
    {
        return $this->callOperationAsync(
            'startDownloadJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\StartDownloadJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse
     */
    public function createRecurringJob(\DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->createRecurringJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRecurringJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'createRecurringJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\CreateRecurringJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->deleteRecurringJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRecurringJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'deleteRecurringJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\DeleteRecurringJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->getRecurringJobsAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobsAsync(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobs',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobsResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->getRecurringJobExecutionStatusAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionStatusAsync(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionStatus',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionStatusResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->getRecurringJobExecutionHistoryAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRecurringJobExecutionHistoryAsync(\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryRequest $request)
    {
        return $this->callOperationAsync(
            'getRecurringJobExecutionHistory',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\GetRecurringJobExecutionHistoryResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->activateRecurringJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateRecurringJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'activateRecurringJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\ActivateRecurringJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->suspendRecurringJobAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function suspendRecurringJobAsync(\DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobRequest $request)
    {
        return $this->callOperationAsync(
            'suspendRecurringJob',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\SuspendRecurringJobResponse'
        );
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->abortRecurringJobExecutionAsync($request)->wait();
    }

    /**
     * @param \DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function abortRecurringJobExecutionAsync(\DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionRequest $request)
    {
        return $this->callOperationAsync(
            'abortRecurringJobExecution',
            $request,
            '\DKH\eBaySDK\BulkDataExchange\Types\AbortRecurringJobExecutionResponse'
        );
    }
}
