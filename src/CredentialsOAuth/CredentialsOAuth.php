<?php
namespace DKH\eBaySDK\CredentialsOAuth;

/**
 * Implementation of the CredentialsInterface that allows client code
 * to pass in their credentials in the constructor.
 */
class CredentialsOAuth implements \DKH\eBaySDK\CredentialsOAuth\CredentialsOAuthInterface
{
    /**
     * @var string $appId Application ID
     */
    private $appId;

    /**
     * @var string $certId Certificate ID
     */
    private $certId;

    /**
     * @var string $devId Developer ID
     */
    private $devId;


    /**
     * @var string $iafToken app access_token
     */
    private $iafToken;

    /**
     * @param string $appId Application ID
     * @param string $certId Certificate ID
     * @param string $devId Developer ID
     */
    public function __construct($appId, $certId, $devId, $iafToken)
    {
        $this->appId = trim($appId);
        $this->certId = trim($certId);
        $this->devId = trim($devId);
        $this->iafToken = trim($iafToken);
    }

    /**
     * Returns the application ID.
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Returns the certificate ID.
     *
     * @return string
     */
    public function getCertId()
    {
        return $this->certId;
    }

    /**
     * Returns the developer ID.
     *
     * @return string
     */
    public function getDevId()
    {
        return $this->devId;
    }


    /**
     * Returns the application access_token.
     *
     * @return string
     */
    public function getIafToken(){
        return $this->iafToken;
    }
}
