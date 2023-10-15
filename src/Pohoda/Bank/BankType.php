<?php

namespace Pohoda\Bank;

/**
 * Class representing BankType
 *
 *
 * XSD Type: bankType
 */
class BankType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Bank\BankHeaderType $bankHeader
     */
    private $bankHeader = null;

    /**
     * @var \Pohoda\Bank\BankItemType[] $bankDetail
     */
    private $bankDetail = null;

    /**
     * @var \Pohoda\Bank\BankSummaryType $bankSummary
     */
    private $bankSummary = null;

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
     * Gets as bankHeader
     *
     * @return \Pohoda\Bank\BankHeaderType
     */
    public function getBankHeader()
    {
        return $this->bankHeader;
    }

    /**
     * Sets a new bankHeader
     *
     * @param \Pohoda\Bank\BankHeaderType $bankHeader
     * @return self
     */
    public function setBankHeader(?\Pohoda\Bank\BankHeaderType $bankHeader = null)
    {
        $this->bankHeader = $bankHeader;
        return $this;
    }

    /**
     * Adds as bankItem
     *
     * @return self
     * @param \Pohoda\Bank\BankItemType $bankItem
     */
    public function addToBankDetail(\Pohoda\Bank\BankItemType $bankItem)
    {
        $this->bankDetail[] = $bankItem;
        return $this;
    }

    /**
     * isset bankDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankDetail($index)
    {
        return isset($this->bankDetail[$index]);
    }

    /**
     * unset bankDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankDetail($index)
    {
        unset($this->bankDetail[$index]);
    }

    /**
     * Gets as bankDetail
     *
     * @return \Pohoda\Bank\BankItemType[]
     */
    public function getBankDetail()
    {
        return $this->bankDetail;
    }

    /**
     * Sets a new bankDetail
     *
     * @param \Pohoda\Bank\BankItemType[] $bankDetail
     * @return self
     */
    public function setBankDetail(array $bankDetail = null)
    {
        $this->bankDetail = $bankDetail;
        return $this;
    }

    /**
     * Gets as bankSummary
     *
     * @return \Pohoda\Bank\BankSummaryType
     */
    public function getBankSummary()
    {
        return $this->bankSummary;
    }

    /**
     * Sets a new bankSummary
     *
     * @param \Pohoda\Bank\BankSummaryType $bankSummary
     * @return self
     */
    public function setBankSummary(?\Pohoda\Bank\BankSummaryType $bankSummary = null)
    {
        $this->bankSummary = $bankSummary;
        return $this;
    }
}
