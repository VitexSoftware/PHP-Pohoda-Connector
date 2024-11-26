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

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceHeaderType.
 *
 * XSD Type: actionPriceHeaderType
 */
class ActionPriceHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     */
    private ?int $id = null;

    /**
     * Název akční ceny.
     */
    private ?string $name = null;

    /**
     * Popis akční ceny.
     */
    private ?string $description = null;

    /**
     * Platnost akční ceny.
     */
    private ?\Pohoda\ActionPrice\ValidityActionType $validityAction = null;

    /**
     * Sleva v procentech. Pokud není definována, bere se jako NULOVÁ.
     */
    private ?float $discountPercentage = null;

    /**
     * Odvozovat z vedlejší ceny (jen E1).
     */
    private ?string $deriveFromAccesoryPrice = null;

    /**
     * Zaokrouhlení výsledné akční ceny. Pokud není uvedeno zaokrouhlení, bude pro každou zásobu použito stejné zaokrouhlení, jako u ceny, z níž je akční cena vypočítána.
     */
    private ?string $rounding = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID záznamu (pouze pro export).
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as name.
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
     * Sets a new name.
     *
     * Název akční ceny.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as description.
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
     * Sets a new description.
     *
     * Popis akční ceny.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as validityAction.
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
     * Sets a new validityAction.
     *
     * Platnost akční ceny.
     *
     * @return self
     */
    public function setValidityAction(\Pohoda\ActionPrice\ValidityActionType $validityAction)
    {
        $this->validityAction = $validityAction;

        return $this;
    }

    /**
     * Gets as discountPercentage.
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
     * Sets a new discountPercentage.
     *
     * Sleva v procentech. Pokud není definována, bere se jako NULOVÁ.
     *
     * @param float $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as deriveFromAccesoryPrice.
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
     * Sets a new deriveFromAccesoryPrice.
     *
     * Odvozovat z vedlejší ceny (jen E1).
     *
     * @param string $deriveFromAccesoryPrice
     *
     * @return self
     */
    public function setDeriveFromAccesoryPrice($deriveFromAccesoryPrice)
    {
        $this->deriveFromAccesoryPrice = $deriveFromAccesoryPrice;

        return $this;
    }

    /**
     * Gets as rounding.
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
     * Sets a new rounding.
     *
     * Zaokrouhlení výsledné akční ceny. Pokud není uvedeno zaokrouhlení, bude pro každou zásobu použito stejné zaokrouhlení, jako u ceny, z níž je akční cena vypočítána.
     *
     * @param string $rounding
     *
     * @return self
     */
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;

        return $this;
    }

    /**
     * Gets as note.
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
     * Sets a new note.
     *
     * Poznámka.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }
}
