<?php

namespace Pohoda\Stock;

/**
 * Class representing PictureType
 *
 *
 * XSD Type: pictureType
 */
class PictureType
{
    /**
     * @var bool $default
     */
    private $default = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\Type\ActionTypeItemType $actionType
     */
    private $actionType = null;

    /**
     * ID obrázku (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @var string $filepath
     */
    private $filepath = null;

    /**
     * Popis obrázku. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Obrázek_(1) .. n.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Pořadí (jen pro export).
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\Type\ActionTypeItemType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as id
     *
     * ID obrázku (jen pro export).
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
     * ID obrázku (jen pro export).
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
     * Gets as filepath
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Sets a new filepath
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @param string $filepath
     * @return self
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis obrázku. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Obrázek_(1) .. n.
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
     * Popis obrázku. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Obrázek_(1) .. n.
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
     * Gets as order
     *
     * Pořadí (jen pro export).
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Pořadí (jen pro export).
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}

