<?php

namespace Pohoda\IndividualPrice;

/**
 * Class representing PriceGroupItemType
 *
 *
 * XSD Type: priceGroupItemType
 */
class PriceGroupItemType
{
    /**
     * ID cenové skupiny.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název cenové skupiny
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis cenové skupiny.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Sleva v procentech.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Gets as id
     *
     * ID cenové skupiny.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID cenové skupiny.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název cenové skupiny
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
     * Název cenové skupiny
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis cenové skupiny.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Popis cenové skupiny.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Sleva v procentech.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * Sleva v procentech.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }
}
