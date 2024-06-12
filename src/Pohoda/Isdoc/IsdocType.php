<?php

namespace Pohoda\Isdoc;

/**
 * Class representing IsdocType
 *
 *
 * XSD Type: isdocType
 */
class IsdocType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\Filter\RecordIsdocType $record
     */
    private $record = null;

    /**
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @var \Pohoda\Isdoc\IsdocSettingsType[] $isdocSettings
     */
    private $isdocSettings = [
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
     * Gets as record
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
     * Sets a new record
     *
     * Výběr záznamu.
     *
     * @param \Pohoda\Filter\RecordIsdocType $record
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordIsdocType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Adds as isdocSettings
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @return self
     * @param \Pohoda\Isdoc\IsdocSettingsType $isdocSettings
     */
    public function addToIsdocSettings(\Pohoda\Isdoc\IsdocSettingsType $isdocSettings)
    {
        $this->isdocSettings[] = $isdocSettings;
        return $this;
    }

    /**
     * isset isdocSettings
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIsdocSettings($index)
    {
        return isset($this->isdocSettings[$index]);
    }

    /**
     * unset isdocSettings
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIsdocSettings($index)
    {
        unset($this->isdocSettings[$index]);
    }

    /**
     * Gets as isdocSettings
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
     * Sets a new isdocSettings
     *
     * Parametry pro vytvoření ISDOC dokumentu.
     *
     * @param \Pohoda\Isdoc\IsdocSettingsType[] $isdocSettings
     * @return self
     */
    public function setIsdocSettings(array $isdocSettings)
    {
        $this->isdocSettings = $isdocSettings;
        return $this;
    }
}
