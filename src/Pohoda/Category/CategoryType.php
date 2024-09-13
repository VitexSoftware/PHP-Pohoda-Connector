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

namespace Pohoda\Category;

/**
 * Class representing CategoryType.
 *
 * Údaje kategorie internetového obchodu.
 * XSD Type: categoryType
 */
class CategoryType
{
    /**
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     */
    private int $parentId = null;

    /**
     * ID záznamu (jen pro export).
     */
    private int $id = null;

    /**
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
     */
    private string $name = null;

    /**
     * Textový popis kategorie.
     */
    private string $description = null;

    /**
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     */
    private int $sequence = null;

    /**
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     */
    private string $displayed = null;

    /**
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     */
    private string $picture = null;
    private string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private string $markRecord = null;

    /**
     * @var \Pohoda\Category\CategoryType[]
     */
    private array $subCategories = null;
    private \Pohoda\Category\InternetParamsType $internetParams = null;

    /**
     * Gets as parentId.
     *
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets a new parentId.
     *
     * ID nadřazené kategorie (jen pro import). Pokud hodnota není uvedena, jedná se o nejvyšší kategorii. Nelze použít u subCategories.
     *
     * @param int $parentId
     *
     * @return self
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
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
     * Jedinečný název Kategorie internetového obchodu (např. GUID).
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
     * Textový popis kategorie.
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
     * Textový popis kategorie.
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
     * Gets as sequence.
     *
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence.
     *
     * Prostřednictvím pole Pořadí můžete určovat pořadí kategorií v jednotlivých větvích stromu. Kategorie s nejmenší hodnotou je na prvním místě.
     *  Každá zadaná kategorie má svoje ID.
     *
     * @param int $sequence
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Gets as displayed.
     *
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     *
     * @return string
     */
    public function getDisplayed()
    {
        return $this->displayed;
    }

    /**
     * Sets a new displayed.
     *
     * Zobrazení. Určuje, zda je kategorie přenášena na internetový obchod.
     *
     * @param string $displayed
     *
     * @return self
     */
    public function setDisplayed($displayed)
    {
        $this->displayed = $displayed;

        return $this;
    }

    /**
     * Gets as picture.
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture.
     *
     * Název obrázku. Soubor se musí nacházet v adresáři Dokumenty\firma\Obrázky\. Název obrázku se uvádí bez cesty.
     *
     * @param string $picture
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Gets as note.
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
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Adds as category.
     *
     * @return self
     */
    public function addToSubCategories(self $category)
    {
        $this->subCategories[] = $category;

        return $this;
    }

    /**
     * isset subCategories.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetSubCategories($index)
    {
        return isset($this->subCategories[$index]);
    }

    /**
     * unset subCategories.
     *
     * @param int|string $index
     */
    public function unsetSubCategories($index): void
    {
        unset($this->subCategories[$index]);
    }

    /**
     * Gets as subCategories.
     *
     * @return \Pohoda\Category\CategoryType[]
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * Sets a new subCategories.
     *
     * @param \Pohoda\Category\CategoryType[] $subCategories
     *
     * @return self
     */
    public function setSubCategories(?array $subCategories = null)
    {
        $this->subCategories = $subCategories;

        return $this;
    }

    /**
     * Gets as internetParams.
     *
     * @return \Pohoda\Category\InternetParamsType
     */
    public function getInternetParams()
    {
        return $this->internetParams;
    }

    /**
     * Sets a new internetParams.
     *
     * @return self
     */
    public function setInternetParams(?\Pohoda\Category\InternetParamsType $internetParams = null)
    {
        $this->internetParams = $internetParams;

        return $this;
    }
}
