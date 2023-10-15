<?php

namespace Pohoda\Parameter;

/**
 * Class representing UserAgendaDefType
 *
 * Definice uživatelské agendy.
 * XSD Type: userAgendaDefType
 */
class UserAgendaDefType
{
    /**
     * Krátký název uživatelské agendy.
     *
     * @var string $idsUserAgenda
     */
    private $idsUserAgenda = null;

    /**
     * Plný název nebo popis uživatelské agendy. Tento údaj se poté zobrazuje v seznamu uživatelských agend.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Název tabulky, k názvu je automaticky doplněno VTb a pod tímto označením bude agenda evidována v databázi účetní jednotky.
     *
     * @var string $tabMain
     */
    private $tabMain = null;

    /**
     * Název položkové tabulky.
     *
     * @var string $tabItem
     */
    private $tabItem = null;

    /**
     * Evidenční číslo.
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Uživatelská agenda obsahuje položkové doklady.
     *
     * @var string $items
     */
    private $items = null;

    /**
     * Uživatelská agenda obsahuje šablony.
     *
     * @var string $templates
     */
    private $templates = null;

    /**
     * Uživatelská agenda obsahuje evidenci dokumentů.
     *
     * @var string $documents
     */
    private $documents = null;

    /**
     * @var string $list
     */
    private $list = null;

    /**
     * @var string $listIDS
     */
    private $listIDS = null;

    /**
     * @var string $listSText
     */
    private $listSText = null;

    /**
     * Gets as idsUserAgenda
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
     * Sets a new idsUserAgenda
     *
     * Krátký název uživatelské agendy.
     *
     * @param string $idsUserAgenda
     * @return self
     */
    public function setIdsUserAgenda($idsUserAgenda)
    {
        $this->idsUserAgenda = $idsUserAgenda;
        return $this;
    }

    /**
     * Gets as name
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
     * Sets a new name
     *
     * Plný název nebo popis uživatelské agendy. Tento údaj se poté zobrazuje v seznamu uživatelských agend.
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
     * Gets as tabMain
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
     * Sets a new tabMain
     *
     * Název tabulky, k názvu je automaticky doplněno VTb a pod tímto označením bude agenda evidována v databázi účetní jednotky.
     *
     * @param string $tabMain
     * @return self
     */
    public function setTabMain($tabMain)
    {
        $this->tabMain = $tabMain;
        return $this;
    }

    /**
     * Gets as tabItem
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
     * Sets a new tabItem
     *
     * Název položkové tabulky.
     *
     * @param string $tabItem
     * @return self
     */
    public function setTabItem($tabItem)
    {
        $this->tabItem = $tabItem;
        return $this;
    }

    /**
     * Gets as number
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
     * Sets a new number
     *
     * Evidenční číslo.
     *
     * @param \Pohoda\Type\NumberType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as items
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
     * Sets a new items
     *
     * Uživatelská agenda obsahuje položkové doklady.
     *
     * @param string $items
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Gets as templates
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
     * Sets a new templates
     *
     * Uživatelská agenda obsahuje šablony.
     *
     * @param string $templates
     * @return self
     */
    public function setTemplates($templates)
    {
        $this->templates = $templates;
        return $this;
    }

    /**
     * Gets as documents
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
     * Sets a new documents
     *
     * Uživatelská agenda obsahuje evidenci dokumentů.
     *
     * @param string $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * Gets as list
     *
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * @param string $list
     * @return self
     */
    public function setList($list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Gets as listIDS
     *
     * @return string
     */
    public function getListIDS()
    {
        return $this->listIDS;
    }

    /**
     * Sets a new listIDS
     *
     * @param string $listIDS
     * @return self
     */
    public function setListIDS($listIDS)
    {
        $this->listIDS = $listIDS;
        return $this;
    }

    /**
     * Gets as listSText
     *
     * @return string
     */
    public function getListSText()
    {
        return $this->listSText;
    }

    /**
     * Sets a new listSText
     *
     * @param string $listSText
     * @return self
     */
    public function setListSText($listSText)
    {
        $this->listSText = $listSText;
        return $this;
    }
}
