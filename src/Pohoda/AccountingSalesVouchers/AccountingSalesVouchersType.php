<?php

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing AccountingSalesVouchersType
 *
 *
 * XSD Type: accountingSalesVouchersType
 */
class AccountingSalesVouchersType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\Filter\RequestProdejkaType $recordFilter
     */
    private $recordFilter = null;

    /**
     * Středisko které se nastaví do hlavičky zaúčtovávacích dokladů
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

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
     * Gets as recordFilter
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\Filter\RequestProdejkaType
     */
    public function getRecordFilter()
    {
        return $this->recordFilter;
    }

    /**
     * Sets a new recordFilter
     *
     * Výběr záznamu.
     *
     * @param \Pohoda\Filter\RequestProdejkaType $recordFilter
     * @return self
     */
    public function setRecordFilter(?\Pohoda\Filter\RequestProdejkaType $recordFilter = null)
    {
        $this->recordFilter = $recordFilter;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko které se nastaví do hlavičky zaúčtovávacích dokladů
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * Středisko které se nastaví do hlavičky zaúčtovávacích dokladů
     *
     * @param \Pohoda\Type\RefType $centre
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }
}

