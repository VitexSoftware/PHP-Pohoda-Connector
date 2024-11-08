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

namespace Pohoda\Lock;

/**
 * Class representing LockType.
 *
 * XSD Type: lockType
 */
class LockType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\Filter\RecordLockType $record = null;

    /**
     * Parametry zámku.
     */
    private ?\Pohoda\Lock\LockSettingsType $lockSettings = null;

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
     * @return \Pohoda\Filter\RecordLockType
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
    public function setRecord(\Pohoda\Filter\RecordLockType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Gets as lockSettings.
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
     * Sets a new lockSettings.
     *
     * Parametry zámku.
     *
     * @return self
     */
    public function setLockSettings(\Pohoda\Lock\LockSettingsType $lockSettings)
    {
        $this->lockSettings = $lockSettings;

        return $this;
    }
}
