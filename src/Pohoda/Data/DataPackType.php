<?php

namespace Pohoda\Data;

/**
 * Class representing DataPackType
 *
 *
 * XSD Type: dataPackType
 */
class DataPackType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * ID dokladu, podle této hodnoty a hodnoty "id" v "dataPackItem" se kontrolují duplicity importovaných dokladů.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * IČ firmy, pro kterou je XML určeno. Hodnota musí souhlasit s IČ zadané firmy. Má vyšší prioritu než atribut "key".
     *
     * @var string $ico
     */
    private $ico = null;

    /**
     * Jedinečný identifikátor účetnictví firmy, pro kterou je XML určeno. Pokud není uveden atribut "ico" (nebo je prázdný), hodnota musí souhlasit s "klíčem" zadané firmy.
     *
     * @var string $key
     */
    private $key = null;

    /**
     * Hodnota účetního období vybrané účetní jednotky v programu Pohoda. Pokud nebude atribut použit, bude XML import dat proveden do aktuálně nastavené účetního období přihlášeného uživatele. Pokud bude atribut uveden, bude při importu dat proveden kontrola nastaveného účetního období. Jestliže nebude období shodné, XML komunikace bude ukončena.
     *
     * @var string $period
     */
    private $period = null;

    /**
     * Textový popis, hodnota se zobrazí v poli "Aplikace" v agendě XML Import.
     *
     * @var string $application
     */
    private $application = null;

    /**
     * @var string $programVersion
     */
    private $programVersion = null;

    /**
     * Textová poznámka, hodnota se zobrazí v záložce "Poznámky" v agendě XML Import.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Transformace vstupu a výstupu (od verze "1.1" elementu "dataPack").
     *  Transformaci pro všechny zpracovávané soubory lze nastavit v INI souboru.
     *  Nejdříve se provede transformace zadané v INI souboru, poté transformace zadaná v XML.
     *
     * @var \Pohoda\Data\TransformationType $transformation
     */
    private $transformation = null;

    /**
     * @var \Pohoda\Data\DataPackItemType[] $dataPackItem
     */
    private $dataPackItem = [
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as id
     *
     * ID dokladu, podle této hodnoty a hodnoty "id" v "dataPackItem" se kontrolují duplicity importovaných dokladů.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID dokladu, podle této hodnoty a hodnoty "id" v "dataPackItem" se kontrolují duplicity importovaných dokladů.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ico
     *
     * IČ firmy, pro kterou je XML určeno. Hodnota musí souhlasit s IČ zadané firmy. Má vyšší prioritu než atribut "key".
     *
     * @return string
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Sets a new ico
     *
     * IČ firmy, pro kterou je XML určeno. Hodnota musí souhlasit s IČ zadané firmy. Má vyšší prioritu než atribut "key".
     *
     * @param string $ico
     * @return self
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * Gets as key
     *
     * Jedinečný identifikátor účetnictví firmy, pro kterou je XML určeno. Pokud není uveden atribut "ico" (nebo je prázdný), hodnota musí souhlasit s "klíčem" zadané firmy.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * Jedinečný identifikátor účetnictví firmy, pro kterou je XML určeno. Pokud není uveden atribut "ico" (nebo je prázdný), hodnota musí souhlasit s "klíčem" zadané firmy.
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as period
     *
     * Hodnota účetního období vybrané účetní jednotky v programu Pohoda. Pokud nebude atribut použit, bude XML import dat proveden do aktuálně nastavené účetního období přihlášeného uživatele. Pokud bude atribut uveden, bude při importu dat proveden kontrola nastaveného účetního období. Jestliže nebude období shodné, XML komunikace bude ukončena.
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Hodnota účetního období vybrané účetní jednotky v programu Pohoda. Pokud nebude atribut použit, bude XML import dat proveden do aktuálně nastavené účetního období přihlášeného uživatele. Pokud bude atribut uveden, bude při importu dat proveden kontrola nastaveného účetního období. Jestliže nebude období shodné, XML komunikace bude ukončena.
     *
     * @param string $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as application
     *
     * Textový popis, hodnota se zobrazí v poli "Aplikace" v agendě XML Import.
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * Textový popis, hodnota se zobrazí v poli "Aplikace" v agendě XML Import.
     *
     * @param string $application
     * @return self
     */
    public function setApplication($application)
    {
        $this->application = $application;
        return $this;
    }

    /**
     * Gets as programVersion
     *
     * @return string
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }

    /**
     * Sets a new programVersion
     *
     * @param string $programVersion
     * @return self
     */
    public function setProgramVersion($programVersion)
    {
        $this->programVersion = $programVersion;
        return $this;
    }

    /**
     * Gets as note
     *
     * Textová poznámka, hodnota se zobrazí v záložce "Poznámky" v agendě XML Import.
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
     * Textová poznámka, hodnota se zobrazí v záložce "Poznámky" v agendě XML Import.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as transformation
     *
     * Transformace vstupu a výstupu (od verze "1.1" elementu "dataPack").
     *  Transformaci pro všechny zpracovávané soubory lze nastavit v INI souboru.
     *  Nejdříve se provede transformace zadané v INI souboru, poté transformace zadaná v XML.
     *
     * @return \Pohoda\Data\TransformationType
     */
    public function getTransformation()
    {
        return $this->transformation;
    }

    /**
     * Sets a new transformation
     *
     * Transformace vstupu a výstupu (od verze "1.1" elementu "dataPack").
     *  Transformaci pro všechny zpracovávané soubory lze nastavit v INI souboru.
     *  Nejdříve se provede transformace zadané v INI souboru, poté transformace zadaná v XML.
     *
     * @param \Pohoda\Data\TransformationType $transformation
     * @return self
     */
    public function setTransformation(?\Pohoda\Data\TransformationType $transformation = null)
    {
        $this->transformation = $transformation;
        return $this;
    }

    /**
     * Adds as dataPackItem
     *
     * @return self
     * @param \Pohoda\Data\DataPackItemType $dataPackItem
     */
    public function addToDataPackItem(\Pohoda\Data\DataPackItemType $dataPackItem)
    {
        $this->dataPackItem[] = $dataPackItem;
        return $this;
    }

    /**
     * isset dataPackItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataPackItem($index)
    {
        return isset($this->dataPackItem[$index]);
    }

    /**
     * unset dataPackItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataPackItem($index)
    {
        unset($this->dataPackItem[$index]);
    }

    /**
     * Gets as dataPackItem
     *
     * @return \Pohoda\Data\DataPackItemType[]
     */
    public function getDataPackItem()
    {
        return $this->dataPackItem;
    }

    /**
     * Sets a new dataPackItem
     *
     * @param \Pohoda\Data\DataPackItemType[] $dataPackItem
     * @return self
     */
    public function setDataPackItem(array $dataPackItem)
    {
        $this->dataPackItem = $dataPackItem;
        return $this;
    }
}
