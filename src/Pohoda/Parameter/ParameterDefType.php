<?php

namespace Pohoda\Parameter;

/**
 * Class representing ParameterDefType
 *
 * Definice volitelného parametru.
 * XSD Type: parameterDefType
 */
class ParameterDefType
{
    /**
     * ID položky dokladu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název pole, který se bude zobrazovat ve formuláři zvolené agendy.
     *
     * @var string $label
     */
    private $label = null;

    /**
     * Název databázového pole, které bude zapsáno přímo do databáze. Program automaticky doplní před zadaný název zkratku VPr a v případě datového pole typu Seznam RefVpr.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Požadovaný datový typ jako je Text, Měna, Číslo, Ano/Ne, Datum a Seznam.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Požadovaná délka textového pole. Maximální délka textového pole je 250 znaků.
     *
     * @var int $length
     */
    private $length = null;

    /**
     * Definice počítaného sloupce.
     *
     * @var string $definition
     */
    private $definition = null;

    /**
     * @var \Pohoda\Type\RefType $list
     */
    private $list = null;

    /**
     * @var string $write
     */
    private $write = null;

    /**
     * Řádek v tabulce položek dokladu.
     *
     * @var int $row
     */
    private $row = null;

    /**
     * @var string $use0
     */
    private $use0 = null;

    /**
     * @var string $use1
     */
    private $use1 = null;

    /**
     * @var string $use2
     */
    private $use2 = null;

    /**
     * @var string $use3
     */
    private $use3 = null;

    /**
     * @var string $use4
     */
    private $use4 = null;

    /**
     * @var string $use5
     */
    private $use5 = null;

    /**
     * Gets as id
     *
     * ID položky dokladu (jen pro export).
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
     * ID položky dokladu (jen pro export).
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
     * Gets as label
     *
     * Název pole, který se bude zobrazovat ve formuláři zvolené agendy.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * Název pole, který se bude zobrazovat ve formuláři zvolené agendy.
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as name
     *
     * Název databázového pole, které bude zapsáno přímo do databáze. Program automaticky doplní před zadaný název zkratku VPr a v případě datového pole typu Seznam RefVpr.
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
     * Název databázového pole, které bude zapsáno přímo do databáze. Program automaticky doplní před zadaný název zkratku VPr a v případě datového pole typu Seznam RefVpr.
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
     * Gets as type
     *
     * Požadovaný datový typ jako je Text, Měna, Číslo, Ano/Ne, Datum a Seznam.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Požadovaný datový typ jako je Text, Měna, Číslo, Ano/Ne, Datum a Seznam.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as length
     *
     * Požadovaná délka textového pole. Maximální délka textového pole je 250 znaků.
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Požadovaná délka textového pole. Maximální délka textového pole je 250 znaků.
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as definition
     *
     * Definice počítaného sloupce.
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Definice počítaného sloupce.
     *
     * @param string $definition
     * @return self
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as list
     *
     * @return \Pohoda\Type\RefType
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * @param \Pohoda\Type\RefType $list
     * @return self
     */
    public function setList(?\Pohoda\Type\RefType $list = null)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Gets as write
     *
     * @return string
     */
    public function getWrite()
    {
        return $this->write;
    }

    /**
     * Sets a new write
     *
     * @param string $write
     * @return self
     */
    public function setWrite($write)
    {
        $this->write = $write;
        return $this;
    }

    /**
     * Gets as row
     *
     * Řádek v tabulce položek dokladu.
     *
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Sets a new row
     *
     * Řádek v tabulce položek dokladu.
     *
     * @param int $row
     * @return self
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }

    /**
     * Gets as use0
     *
     * @return string
     */
    public function getUse0()
    {
        return $this->use0;
    }

    /**
     * Sets a new use0
     *
     * @param string $use0
     * @return self
     */
    public function setUse0($use0)
    {
        $this->use0 = $use0;
        return $this;
    }

    /**
     * Gets as use1
     *
     * @return string
     */
    public function getUse1()
    {
        return $this->use1;
    }

    /**
     * Sets a new use1
     *
     * @param string $use1
     * @return self
     */
    public function setUse1($use1)
    {
        $this->use1 = $use1;
        return $this;
    }

    /**
     * Gets as use2
     *
     * @return string
     */
    public function getUse2()
    {
        return $this->use2;
    }

    /**
     * Sets a new use2
     *
     * @param string $use2
     * @return self
     */
    public function setUse2($use2)
    {
        $this->use2 = $use2;
        return $this;
    }

    /**
     * Gets as use3
     *
     * @return string
     */
    public function getUse3()
    {
        return $this->use3;
    }

    /**
     * Sets a new use3
     *
     * @param string $use3
     * @return self
     */
    public function setUse3($use3)
    {
        $this->use3 = $use3;
        return $this;
    }

    /**
     * Gets as use4
     *
     * @return string
     */
    public function getUse4()
    {
        return $this->use4;
    }

    /**
     * Sets a new use4
     *
     * @param string $use4
     * @return self
     */
    public function setUse4($use4)
    {
        $this->use4 = $use4;
        return $this;
    }

    /**
     * Gets as use5
     *
     * @return string
     */
    public function getUse5()
    {
        return $this->use5;
    }

    /**
     * Sets a new use5
     *
     * @param string $use5
     * @return self
     */
    public function setUse5($use5)
    {
        $this->use5 = $use5;
        return $this;
    }
}

