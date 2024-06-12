<?php

namespace Pohoda\Filter;

/**
 * Class representing SelectedCompanysType
 *
 *
 * XSD Type: selectedCompanysType
 */
class SelectedCompanysType
{
    /**
     * Firma
     *
     * @var string[] $company
     */
    private $company = [
    ];

    /**
     * Adds as company
     *
     * Firma
     *
     * @return self
     * @param string $company
     */
    public function addToCompany($company)
    {
        $this->company[] = $company;
        return $this;
    }

    /**
     * isset company
     *
     * Firma
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompany($index)
    {
        return isset($this->company[$index]);
    }

    /**
     * unset company
     *
     * Firma
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompany($index)
    {
        unset($this->company[$index]);
    }

    /**
     * Gets as company
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
     * Sets a new company
     *
     * Firma
     *
     * @param string $company
     * @return self
     */
    public function setCompany(array $company)
    {
        $this->company = $company;
        return $this;
    }
}
