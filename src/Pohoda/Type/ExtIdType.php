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

namespace Pohoda\Type;

/**
 * Class representing ExtIdType.
 *
 * XSD Type: extIdType
 */
class ExtIdType
{
    /**
     * ID záznamu v externím systému, jedinečný textový identifikátor.
     */
    private string $ids = null;

    /**
     * Jedinečný název externího systému (např. GUID).
     */
    private string $exSystemName = null;

    /**
     * Textový popis externího systému.
     */
    private string $exSystemText = null;

    /**
     * Gets as ids.
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
     * Sets a new ids.
     *
     * ID záznamu v externím systému, jedinečný textový identifikátor.
     *
     * @param string $ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Gets as exSystemName.
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
     * Sets a new exSystemName.
     *
     * Jedinečný název externího systému (např. GUID).
     *
     * @param string $exSystemName
     *
     * @return self
     */
    public function setExSystemName($exSystemName)
    {
        $this->exSystemName = $exSystemName;

        return $this;
    }

    /**
     * Gets as exSystemText.
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
     * Sets a new exSystemText.
     *
     * Textový popis externího systému.
     *
     * @param string $exSystemText
     *
     * @return self
     */
    public function setExSystemText($exSystemText)
    {
        $this->exSystemText = $exSystemText;

        return $this;
    }
}
