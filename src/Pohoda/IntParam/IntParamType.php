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

namespace Pohoda\IntParam;

/**
 * Class representing IntParamType.
 *
 * Internetové parametry zásoby.
 * XSD Type: intParamType
 */
class IntParamType
{
    /**
     * ID záznamu (jen pro export).
     */
    private ?int $id = null;

    /**
     * Název parametru pro internetové obchody.
     */
    private ?string $name = null;

    /**
     * Popis parametru pro internetové obchody.
     */
    private ?string $description = null;

    /**
     * Typ parametru internetového obchodu.
     */
    private ?string $parameterType = null;

    /**
     * Typ parametru internetového obchodu.
     */
    private ?\Pohoda\IntParam\ParameterSettingsType $parameterSettings = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

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
     * Název parametru pro internetové obchody.
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
     * Název parametru pro internetové obchody.
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
     * Popis parametru pro internetové obchody.
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
     * Popis parametru pro internetové obchody.
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
     * Gets as parameterType.
     *
     * Typ parametru internetového obchodu.
     *
     * @return string
     */
    public function getParameterType()
    {
        return $this->parameterType;
    }

    /**
     * Sets a new parameterType.
     *
     * Typ parametru internetového obchodu.
     *
     * @param string $parameterType
     *
     * @return self
     */
    public function setParameterType($parameterType)
    {
        $this->parameterType = $parameterType;

        return $this;
    }

    /**
     * Gets as parameterSettings.
     *
     * Typ parametru internetového obchodu.
     *
     * @return \Pohoda\IntParam\ParameterSettingsType
     */
    public function getParameterSettings()
    {
        return $this->parameterSettings;
    }

    /**
     * Sets a new parameterSettings.
     *
     * Typ parametru internetového obchodu.
     *
     * @return self
     */
    public function setParameterSettings(?\Pohoda\IntParam\ParameterSettingsType $parameterSettings = null)
    {
        $this->parameterSettings = $parameterSettings;

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
