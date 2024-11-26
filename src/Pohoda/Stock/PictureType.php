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

namespace Pohoda\Stock;

/**
 * Class representing PictureType.
 *
 * XSD Type: pictureType
 */
class PictureType
{
    private ?bool $default = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private ?\Pohoda\Type\ActionTypeItemType $actionType = null;

    /**
     * ID obrázku (jen pro export).
     */
    private ?int $id = null;

    /**
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     */
    private ?string $filepath = null;

    /**
     * Popis obrázku. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Obrázek_(1) .. n.
     */
    private ?string $description = null;

    /**
     * Pořadí (jen pro export).
     */
    private ?int $order = null;

    /**
     * Gets as default.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default.
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Gets as actionType.
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
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID obrázku (jen pro export).
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
     * Gets as filepath.
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
     * Sets a new filepath.
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @param string $filepath
     *
     * @return self
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Gets as description.
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
     * Sets a new description.
     *
     * Popis obrázku. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Obrázek_(1) .. n.
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
     * Gets as order.
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
     * Sets a new order.
     *
     * Pořadí (jen pro export).
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
