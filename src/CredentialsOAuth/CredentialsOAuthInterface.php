<?php
namespace DKH\eBaySDK\CredentialsOAuth;

/**
 * Provides access to the API credentials used for accessing the eBay services.
 */
interface CredentialsOAuthInterface
{
    /**
     * Returns the application ID.
     *
     * @return string
     */
    public function getAppId();

    /**
     * Returns the certificate ID.
     *
     * @return string
     */
    public function getCertId();

    /**
     * Returns the developer ID.
     *
     * @return string
     */
    public function getDevId();


    /**
     * Returns the application access_token.
     *
     * @return string
     */
    public function getIafToken();

}
