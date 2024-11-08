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

namespace Pohoda\SendEET;

/**
 * Class representing SendEETType.
 *
 * XSD Type: sendEETType
 */
class SendEETType
{
    private ?string $version = null;

    /**
     * Výběr záznamu.
     */
    private ?\Pohoda\SendEET\RecordSendEETType $record = null;

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
     * @return \Pohoda\SendEET\RecordSendEETType
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
    public function setRecord(\Pohoda\SendEET\RecordSendEETType $record)
    {
        $this->record = $record;

        return $this;
    }
}
