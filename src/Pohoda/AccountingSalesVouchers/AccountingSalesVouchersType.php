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

namespace Pohoda\AccountingSalesVouchers;

/**
 * Class representing AccountingSalesVouchersType.
 *
 * XSD Type: accountingSalesVouchersType
 */
class AccountingSalesVouchersType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\Filter\RequestProdejkaType $recordFilter = null;

    /**
     * Středisko které se nastaví do hlavičky zaúčtovávacích dokladů.
     */
    private ?\Pohoda\Type\RefType $centre = null;

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
     * Gets as recordFilter.
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
     * Sets a new recordFilter.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecordFilter(?\Pohoda\Filter\RequestProdejkaType $recordFilter = null)
    {
        $this->recordFilter = $recordFilter;

        return $this;
    }

    /**
     * Gets as centre.
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
     * Sets a new centre.
     *
     * Středisko které se nastaví do hlavičky zaúčtovávacích dokladů
     *
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }
}
