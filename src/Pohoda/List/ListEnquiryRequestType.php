<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\List;

/**
 * Class representing ListEnquiryRequestType.
 *
 * XSD Type: listEnquiryRequestType
 */
class ListEnquiryRequestType
{
    private string $version = null;
    private string $enquiryType = null;

    /**
     * Požadovaná verze dokladu.
     */
    private string $enquiryVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestEnquiryType[]
     */
    private array $requestEnquiry = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as enquiryType.
     *
     * @return string
     */
    public function getEnquiryType()
    {
        return $this->enquiryType;
    }

    /**
     * Sets a new enquiryType.
     *
     * @param string $enquiryType
     *
     * @return self
     */
    public function setEnquiryType($enquiryType)
    {
        $this->enquiryType = $enquiryType;

        return $this;
    }

    /**
     * Gets as enquiryVersion.
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
     * Sets a new enquiryVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $enquiryVersion
     *
     * @return self
     */
    public function setEnquiryVersion($enquiryVersion)
    {
        $this->enquiryVersion = $enquiryVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
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
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Adds as requestEnquiry.
     *
     * @return self
     */
    public function addToRequestEnquiry(\Pohoda\Filter\RequestEnquiryType $requestEnquiry)
    {
        $this->requestEnquiry[] = $requestEnquiry;

        return $this;
    }

    /**
     * isset requestEnquiry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestEnquiry($index)
    {
        return isset($this->requestEnquiry[$index]);
    }

    /**
     * unset requestEnquiry.
     *
     * @param int|string $index
     */
    public function unsetRequestEnquiry($index): void
    {
        unset($this->requestEnquiry[$index]);
    }

    /**
     * Gets as requestEnquiry.
     *
     * @return \Pohoda\Filter\RequestEnquiryType[]
     */
    public function getRequestEnquiry()
    {
        return $this->requestEnquiry;
    }

    /**
     * Sets a new requestEnquiry.
     *
     * @param \Pohoda\Filter\RequestEnquiryType[] $requestEnquiry
     *
     * @return self
     */
    public function setRequestEnquiry(array $requestEnquiry)
    {
        $this->requestEnquiry = $requestEnquiry;

        return $this;
    }
}
