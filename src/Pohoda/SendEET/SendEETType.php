<?php

namespace Pohoda\SendEET;

/**
 * Class representing SendEETType
 *
 *
 * XSD Type: sendEETType
 */
class SendEETType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\SendEET\RecordSendEETType $record
     */
    private $record = null;

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
     * @return \Pohoda\SendEET\RecordSendEETType
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
     * @param \Pohoda\SendEET\RecordSendEETType $record
     * @return self
     */
    public function setRecord(\Pohoda\SendEET\RecordSendEETType $record)
    {
        $this->record = $record;
        return $this;
    }
}

