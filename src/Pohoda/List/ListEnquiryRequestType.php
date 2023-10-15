<?php

namespace Pohoda\List;

/**
 * Class representing ListEnquiryRequestType
 *
 *
 * XSD Type: listEnquiryRequestType
 */
class ListEnquiryRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $enquiryType
     */
    private $enquiryType = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $enquiryVersion
     */
    private $enquiryVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestEnquiryType[] $requestEnquiry
     */
    private $requestEnquiry = [
        
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as enquiryType
     *
     * @return string
     */
    public function getEnquiryType()
    {
        return $this->enquiryType;
    }

    /**
     * Sets a new enquiryType
     *
     * @param string $enquiryType
     * @return self
     */
    public function setEnquiryType($enquiryType)
    {
        $this->enquiryType = $enquiryType;
        return $this;
    }

    /**
     * Gets as enquiryVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getEnquiryVersion()
    {
        return $this->enquiryVersion;
    }

    /**
     * Sets a new enquiryVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $enquiryVersion
     * @return self
     */
    public function setEnquiryVersion($enquiryVersion)
    {
        $this->enquiryVersion = $enquiryVersion;
        return $this;
    }

    /**
     * Gets as extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;
        return $this;
    }

    /**
     * Adds as requestEnquiry
     *
     * @return self
     * @param \Pohoda\Filter\RequestEnquiryType $requestEnquiry
     */
    public function addToRequestEnquiry(\Pohoda\Filter\RequestEnquiryType $requestEnquiry)
    {
        $this->requestEnquiry[] = $requestEnquiry;
        return $this;
    }

    /**
     * isset requestEnquiry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestEnquiry($index)
    {
        return isset($this->requestEnquiry[$index]);
    }

    /**
     * unset requestEnquiry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestEnquiry($index)
    {
        unset($this->requestEnquiry[$index]);
    }

    /**
     * Gets as requestEnquiry
     *
     * @return \Pohoda\Filter\RequestEnquiryType[]
     */
    public function getRequestEnquiry()
    {
        return $this->requestEnquiry;
    }

    /**
     * Sets a new requestEnquiry
     *
     * @param \Pohoda\Filter\RequestEnquiryType[] $requestEnquiry
     * @return self
     */
    public function setRequestEnquiry(array $requestEnquiry)
    {
        $this->requestEnquiry = $requestEnquiry;
        return $this;
    }
}

