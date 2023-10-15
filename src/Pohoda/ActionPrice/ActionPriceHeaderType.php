<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceHeaderType
 *
 *
 * XSD Type: actionPriceHeaderType
 */
class ActionPriceHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název akční ceny.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis akční ceny.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Platnost akční ceny.
     *
     * @var \Pohoda\ActionPrice\ValidityActionType $validityAction
     */
    private $validityAction = null;

    /**
     * Sleva v procentech. Pokud není definována, bere se jako NULOVÁ.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Odvozovat z vedlejší ceny (jen E1).
     *
     * @var string $deriveFromAccesoryPrice
     */
    private $deriveFromAccesoryPrice = null;

    /**
     * Zaokrouhlení výsledné akční ceny. Pokud není uvedeno zaokrouhlení, bude pro každou zásobu použito stejné zaokrouhlení, jako u ceny, z níž je akční cena vypočítána.
     *
     * @var string $rounding
     */
    private $rounding = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as id
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Název akční ceny.
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
     * Název akční ceny.
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
     * Popis akční ceny.
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
     * Popis akční ceny.
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
     * Gets as validityAction
     *
     * Platnost akční ceny.
     *
     * @return \Pohoda\ActionPrice\ValidityActionType
     */
    public function getValidityAction()
    {
        return $this->validityAction;
    }

    /**
     * Sets a new validityAction
     *
     * Platnost akční ceny.
     *
     * @param \Pohoda\ActionPrice\ValidityActionType $validityAction
     * @return self
     */
    public function setValidityAction(\Pohoda\ActionPrice\ValidityActionType $validityAction)
    {
        $this->validityAction = $validityAction;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Sleva v procentech. Pokud není definována, bere se jako NULOVÁ.
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
     * Sleva v procentech. Pokud není definována, bere se jako NULOVÁ.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * Gets as deriveFromAccesoryPrice
     *
     * Odvozovat z vedlejší ceny (jen E1).
     *
     * @return string
     */
    public function getDeriveFromAccesoryPrice()
    {
        return $this->deriveFromAccesoryPrice;
    }

    /**
     * Sets a new deriveFromAccesoryPrice
     *
     * Odvozovat z vedlejší ceny (jen E1).
     *
     * @param string $deriveFromAccesoryPrice
     * @return self
     */
    public function setDeriveFromAccesoryPrice($deriveFromAccesoryPrice)
    {
        $this->deriveFromAccesoryPrice = $deriveFromAccesoryPrice;
        return $this;
    }

    /**
     * Gets as rounding
     *
     * Zaokrouhlení výsledné akční ceny. Pokud není uvedeno zaokrouhlení, bude pro každou zásobu použito stejné zaokrouhlení, jako u ceny, z níž je akční cena vypočítána.
     *
     * @return string
     */
    public function getRounding()
    {
        return $this->rounding;
    }

    /**
     * Sets a new rounding
     *
     * Zaokrouhlení výsledné akční ceny. Pokud není uvedeno zaokrouhlení, bude pro každou zásobu použito stejné zaokrouhlení, jako u ceny, z níž je akční cena vypočítána.
     *
     * @param string $rounding
     * @return self
     */
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }
}

