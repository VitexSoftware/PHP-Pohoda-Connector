<?php

namespace Pohoda\Lock;

/**
 * Class representing LockType
 *
 *
 * XSD Type: lockType
 */
class LockType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\Filter\RecordLockType $record
     */
    private $record = null;

    /**
     * Parametry zámku.
     *
     * @var \Pohoda\Lock\LockSettingsType $lockSettings
     */
    private $lockSettings = null;

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
     * @return \Pohoda\Filter\RecordLockType
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
     * @param \Pohoda\Filter\RecordLockType $record
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordLockType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Gets as lockSettings
     *
     * Parametry zámku.
     *
     * @return \Pohoda\Lock\LockSettingsType
     */
    public function getLockSettings()
    {
        return $this->lockSettings;
    }

    /**
     * Sets a new lockSettings
     *
     * Parametry zámku.
     *
     * @param \Pohoda\Lock\LockSettingsType $lockSettings
     * @return self
     */
    public function setLockSettings(\Pohoda\Lock\LockSettingsType $lockSettings)
    {
        $this->lockSettings = $lockSettings;
        return $this;
    }
}
