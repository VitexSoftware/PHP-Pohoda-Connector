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
 * Class representing ListInvoiceRequestType.
 *
 * XSD Type: listInvoiceRequestType
 */
class ListInvoiceRequestType
{
    private ?string $version = null;
    private ?string $invoiceType = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $invoiceVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestInvoiceType[]
     */
    private array $requestInvoice = [
    ];

    /**
     * Omezení exportu dat dokladů.
     *
     * @var \Pohoda\List\RestrictionDocParamType[]
     */
    private array $restrictionData = [
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
     * Gets as invoiceType.
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Sets a new invoiceType.
     *
     * @param string $invoiceType
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;

        return $this;
    }

    /**
     * Gets as invoiceVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getInvoiceVersion()
    {
        return $this->invoiceVersion;
    }

    /**
     * Sets a new invoiceVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $invoiceVersion
     *
     * @return self
     */
    public function setInvoiceVersion($invoiceVersion)
    {
        $this->invoiceVersion = $invoiceVersion;

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
     * Adds as requestInvoice.
     *
     * @return self
     */
    public function addToRequestInvoice(\Pohoda\Filter\RequestInvoiceType $requestInvoice)
    {
        $this->requestInvoice[] = $requestInvoice;

        return $this;
    }

    /**
     * isset requestInvoice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestInvoice($index)
    {
        return isset($this->requestInvoice[$index]);
    }

    /**
     * unset requestInvoice.
     *
     * @param int|string $index
     */
    public function unsetRequestInvoice($index): void
    {
        unset($this->requestInvoice[$index]);
    }

    /**
     * Gets as requestInvoice.
     *
     * @return \Pohoda\Filter\RequestInvoiceType[]
     */
    public function getRequestInvoice()
    {
        return $this->requestInvoice;
    }

    /**
     * Sets a new requestInvoice.
     *
     * @param \Pohoda\Filter\RequestInvoiceType[] $requestInvoice
     *
     * @return self
     */
    public function setRequestInvoice(array $requestInvoice)
    {
        $this->requestInvoice = $requestInvoice;

        return $this;
    }

    /**
     * Adds as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return self
     */
    public function addToRestrictionData(\Pohoda\List\RestrictionDocParamType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;

        return $this;
    }

    /**
     * isset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param int|string $index
     */
    public function unsetRestrictionData($index): void
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @return \Pohoda\List\RestrictionDocParamType[]
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData.
     *
     * Omezení exportu dat dokladů.
     *
     * @param \Pohoda\List\RestrictionDocParamType[] $restrictionData
     *
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;

        return $this;
    }
}
