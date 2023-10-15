<?php

namespace Pohoda\List;

/**
 * Class representing ItemCashType
 *
 *
 * XSD Type: itemCashType
 */
class ItemCashType extends ItemType
{
    /**
     * @var string $codeCurrency
     */
    private $codeCurrency = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as codeCurrency
     *
     * @return string
     */
    public function getCodeCurrency()
    {
        return $this->codeCurrency;
    }

    /**
     * Sets a new codeCurrency
     *
     * @param string $codeCurrency
     * @return self
     */
    public function setCodeCurrency($codeCurrency)
    {
        $this->codeCurrency = $codeCurrency;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
