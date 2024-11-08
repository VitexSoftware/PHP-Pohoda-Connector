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

namespace Pohoda\Parameter;

/**
 * Class representing UserAgendaDefType.
 *
 * Definice uživatelské agendy.
 * XSD Type: userAgendaDefType
 */
class UserAgendaDefType
{
    /**
     * Krátký název uživatelské agendy.
     */
    private ?string $idsUserAgenda = null;

    /**
     * Plný název nebo popis uživatelské agendy. Tento údaj se poté zobrazuje v seznamu uživatelských agend.
     */
    private ?string $name = null;

    /**
     * Název tabulky, k názvu je automaticky doplněno VTb a pod tímto označením bude agenda evidována v databázi účetní jednotky.
     */
    private ?string $tabMain = null;

    /**
     * Název položkové tabulky.
     */
    private ?string $tabItem = null;

    /**
     * Evidenční číslo.
     */
    private ?\Pohoda\Type\NumberType $number = null;

    /**
     * Uživatelská agenda obsahuje položkové doklady.
     */
    private ?string $items = null;

    /**
     * Uživatelská agenda obsahuje šablony.
     */
    private ?string $templates = null;

    /**
     * Uživatelská agenda obsahuje evidenci dokumentů.
     */
    private ?string $documents = null;
    private ?string $list = null;
    private ?string $listIDS = null;
    private ?string $listSText = null;

    /**
     * Gets as idsUserAgenda.
     *
     * Krátký název uživatelské agendy.
     *
     * @return string
     */
    public function getIdsUserAgenda()
    {
        return $this->idsUserAgenda;
    }

    /**
     * Sets a new idsUserAgenda.
     *
     * Krátký název uživatelské agendy.
     *
     * @param string $idsUserAgenda
     *
     * @return self
     */
    public function setIdsUserAgenda($idsUserAgenda)
    {
        $this->idsUserAgenda = $idsUserAgenda;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Plný název nebo popis uživatelské agendy. Tento údaj se poté zobrazuje v seznamu uživatelských agend.
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
     * Plný název nebo popis uživatelské agendy. Tento údaj se poté zobrazuje v seznamu uživatelských agend.
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
     * Gets as tabMain.
     *
     * Název tabulky, k názvu je automaticky doplněno VTb a pod tímto označením bude agenda evidována v databázi účetní jednotky.
     *
     * @return string
     */
    public function getTabMain()
    {
        return $this->tabMain;
    }

    /**
     * Sets a new tabMain.
     *
     * Název tabulky, k názvu je automaticky doplněno VTb a pod tímto označením bude agenda evidována v databázi účetní jednotky.
     *
     * @param string $tabMain
     *
     * @return self
     */
    public function setTabMain($tabMain)
    {
        $this->tabMain = $tabMain;

        return $this;
    }

    /**
     * Gets as tabItem.
     *
     * Název položkové tabulky.
     *
     * @return string
     */
    public function getTabItem()
    {
        return $this->tabItem;
    }

    /**
     * Sets a new tabItem.
     *
     * Název položkové tabulky.
     *
     * @param string $tabItem
     *
     * @return self
     */
    public function setTabItem($tabItem)
    {
        $this->tabItem = $tabItem;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Evidenční číslo.
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Evidenční číslo.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as items.
     *
     * Uživatelská agenda obsahuje položkové doklady.
     *
     * @return string
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Sets a new items.
     *
     * Uživatelská agenda obsahuje položkové doklady.
     *
     * @param string $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Gets as templates.
     *
     * Uživatelská agenda obsahuje šablony.
     *
     * @return string
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * Sets a new templates.
     *
     * Uživatelská agenda obsahuje šablony.
     *
     * @param string $templates
     *
     * @return self
     */
    public function setTemplates($templates)
    {
        $this->templates = $templates;

        return $this;
    }

    /**
     * Gets as documents.
     *
     * Uživatelská agenda obsahuje evidenci dokumentů.
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents.
     *
     * Uživatelská agenda obsahuje evidenci dokumentů.
     *
     * @param string $documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Gets as list.
     *
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list.
     *
     * @param string $list
     *
     * @return self
     */
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Gets as listIDS.
     *
     * @return string
     */
    public function getListIDS()
    {
        return $this->listIDS;
    }

    /**
     * Sets a new listIDS.
     *
     * @param string $listIDS
     *
     * @return self
     */
    public function setListIDS($listIDS)
    {
        $this->listIDS = $listIDS;

        return $this;
    }

    /**
     * Gets as listSText.
     *
     * @return string
     */
    public function getListSText()
    {
        return $this->listSText;
    }

    /**
     * Sets a new listSText.
     *
     * @param string $listSText
     *
     * @return self
     */
    public function setListSText($listSText)
    {
        $this->listSText = $listSText;

        return $this;
    }
}
