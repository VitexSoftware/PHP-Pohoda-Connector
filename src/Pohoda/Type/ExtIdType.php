<?php

namespace Pohoda\Type;

/**
 * Class representing ExtIdType
 *
 *
 * XSD Type: extIdType
 */
class ExtIdType
{
    /**
     * ID záznamu v externím systému, jedinečný textový identifikátor.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Jedinečný název externího systému (např. GUID).
     *
     * @var string $exSystemName
     */
    private $exSystemName = null;

    /**
     * Textový popis externího systému.
     *
     * @var string $exSystemText
     */
    private $exSystemText = null;

    /**
     * Gets as ids
     *
     * ID záznamu v externím systému, jedinečný textový identifikátor.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * ID záznamu v externím systému, jedinečný textový identifikátor.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as exSystemName
     *
     * Jedinečný název externího systému (např. GUID).
     *
     * @return string
     */
    public function getExSystemName()
    {
        return $this->exSystemName;
    }

    /**
     * Sets a new exSystemName
     *
     * Jedinečný název externího systému (např. GUID).
     *
     * @param string $exSystemName
     * @return self
     */
    public function setExSystemName($exSystemName)
    {
        $this->exSystemName = $exSystemName;
        return $this;
    }

    /**
     * Gets as exSystemText
     *
     * Textový popis externího systému.
     *
     * @return string
     */
    public function getExSystemText()
    {
        return $this->exSystemText;
    }

    /**
     * Sets a new exSystemText
     *
     * Textový popis externího systému.
     *
     * @param string $exSystemText
     * @return self
     */
    public function setExSystemText($exSystemText)
    {
        $this->exSystemText = $exSystemText;
        return $this;
    }
}
