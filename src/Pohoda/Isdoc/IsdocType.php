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

namespace Pohoda\Isdoc;

/**
 * Class representing IsdocType.
 *
 * XSD Type: isdocType
 */
class IsdocType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\Filter\RecordIsdocType $record = null;

    /**
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @var \Pohoda\Isdoc\IsdocSettingsType[]
     */
    private array $isdocSettings = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as record.
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\Filter\RecordIsdocType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordIsdocType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Adds as isdocSettings.
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @return self
     */
    public function addToIsdocSettings(\Pohoda\Isdoc\IsdocSettingsType $isdocSettings)
    {
        $this->isdocSettings[] = $isdocSettings;

        return $this;
    }

    /**
     * isset isdocSettings.
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIsdocSettings($index)
    {
        return isset($this->isdocSettings[$index]);
    }

    /**
     * unset isdocSettings.
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param int|string $index
     */
    public function unsetIsdocSettings($index): void
    {
        unset($this->isdocSettings[$index]);
    }

    /**
     * Gets as isdocSettings.
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @return \Pohoda\Isdoc\IsdocSettingsType[]
     */
    public function getIsdocSettings()
    {
        return $this->isdocSettings;
    }

    /**
     * Sets a new isdocSettings.
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param \Pohoda\Isdoc\IsdocSettingsType[] $isdocSettings
     *
     * @return self
     */
    public function setIsdocSettings(array $isdocSettings)
    {
        $this->isdocSettings = $isdocSettings;

        return $this;
    }
}
