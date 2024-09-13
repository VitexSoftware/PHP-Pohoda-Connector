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

namespace Pohoda\Bank;

/**
 * Class representing BankType.
 *
 * XSD Type: bankType
 */
class BankType
{
    private string $version = null;
    private \Pohoda\Bank\BankHeaderType $bankHeader = null;

    /**
     * @var \Pohoda\Bank\BankItemType[]
     */
    private array $bankDetail = null;
    private \Pohoda\Bank\BankSummaryType $bankSummary = null;

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
     * Gets as bankHeader.
     *
     * @return \Pohoda\Bank\BankHeaderType
     */
    public function getBankHeader()
    {
        return $this->bankHeader;
    }

    /**
     * Sets a new bankHeader.
     *
     * @return self
     */
    public function setBankHeader(?\Pohoda\Bank\BankHeaderType $bankHeader = null)
    {
        $this->bankHeader = $bankHeader;

        return $this;
    }

    /**
     * Adds as bankItem.
     *
     * @return self
     */
    public function addToBankDetail(\Pohoda\Bank\BankItemType $bankItem)
    {
        $this->bankDetail[] = $bankItem;

        return $this;
    }

    /**
     * isset bankDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBankDetail($index)
    {
        return isset($this->bankDetail[$index]);
    }

    /**
     * unset bankDetail.
     *
     * @param int|string $index
     */
    public function unsetBankDetail($index): void
    {
        unset($this->bankDetail[$index]);
    }

    /**
     * Gets as bankDetail.
     *
     * @return \Pohoda\Bank\BankItemType[]
     */
    public function getBankDetail()
    {
        return $this->bankDetail;
    }

    /**
     * Sets a new bankDetail.
     *
     * @param \Pohoda\Bank\BankItemType[] $bankDetail
     *
     * @return self
     */
    public function setBankDetail(?array $bankDetail = null)
    {
        $this->bankDetail = $bankDetail;

        return $this;
    }

    /**
     * Gets as bankSummary.
     *
     * @return \Pohoda\Bank\BankSummaryType
     */
    public function getBankSummary()
    {
        return $this->bankSummary;
    }

    /**
     * Sets a new bankSummary.
     *
     * @return self
     */
    public function setBankSummary(?\Pohoda\Bank\BankSummaryType $bankSummary = null)
    {
        $this->bankSummary = $bankSummary;

        return $this;
    }
}
