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

namespace Pohoda\Filter;

/**
 * Class representing SelectedCompanysType.
 *
 * XSD Type: selectedCompanysType
 */
class SelectedCompanysType
{
    /**
     * Firma.
     *
     * @var string[]
     */
    private array $company = [
    ];

    /**
     * Adds as company.
     *
     * Firma
     *
     * @param string $company
     *
     * @return self
     */
    public function addToCompany($company)
    {
        $this->company[] = $company;

        return $this;
    }

    /**
     * isset company.
     *
     * Firma
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCompany($index)
    {
        return isset($this->company[$index]);
    }

    /**
     * unset company.
     *
     * Firma
     *
     * @param int|string $index
     */
    public function unsetCompany($index): void
    {
        unset($this->company[$index]);
    }

    /**
     * Gets as company.
     *
     * Firma
     *
     * @return string[]
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company.
     *
     * Firma
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(array $company)
    {
        $this->company = $company;

        return $this;
    }
}
