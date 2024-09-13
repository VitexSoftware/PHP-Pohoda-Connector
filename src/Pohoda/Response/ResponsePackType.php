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

namespace Pohoda\Response;

/**
 * Class representing ResponsePackType.
 *
 * XSD Type: responsePackType
 */
class ResponsePackType
{
    private string $version = null;
    private string $id = null;
    private string $state = null;
    private string $note = null;
    private string $programVersion = null;

    /**
     * IČ firmy, která XML zpracovala.
     */
    private string $ico = null;

    /**
     * Jedinečný identifikátor účetnictví firmy, která XML zpracovala.
     */
    private string $key = null;
    private \DateTime $dateTimeStamp = null;

    /**
     * @var \Pohoda\Response\ResponsePackItemType[]
     */
    private array $responsePackItem = [
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
     * Gets as id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as note.
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
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as programVersion.
     *
     * @return string
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }

    /**
     * Sets a new programVersion.
     *
     * @param string $programVersion
     *
     * @return self
     */
    public function setProgramVersion($programVersion)
    {
        $this->programVersion = $programVersion;

        return $this;
    }

    /**
     * Gets as ico.
     *
     * IČ firmy, která XML zpracovala.
     *
     * @return string
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Sets a new ico.
     *
     * IČ firmy, která XML zpracovala.
     *
     * @param string $ico
     *
     * @return self
     */
    public function setIco($ico)
    {
        $this->ico = $ico;

        return $this;
    }

    /**
     * Gets as key.
     *
     * Jedinečný identifikátor účetnictví firmy, která XML zpracovala.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key.
     *
     * Jedinečný identifikátor účetnictví firmy, která XML zpracovala.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Gets as dateTimeStamp.
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp.
     *
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;

        return $this;
    }

    /**
     * Adds as responsePackItem.
     *
     * @return self
     */
    public function addToResponsePackItem(\Pohoda\Response\ResponsePackItemType $responsePackItem)
    {
        $this->responsePackItem[] = $responsePackItem;

        return $this;
    }

    /**
     * isset responsePackItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetResponsePackItem($index)
    {
        return isset($this->responsePackItem[$index]);
    }

    /**
     * unset responsePackItem.
     *
     * @param int|string $index
     */
    public function unsetResponsePackItem($index): void
    {
        unset($this->responsePackItem[$index]);
    }

    /**
     * Gets as responsePackItem.
     *
     * @return \Pohoda\Response\ResponsePackItemType[]
     */
    public function getResponsePackItem()
    {
        return $this->responsePackItem;
    }

    /**
     * Sets a new responsePackItem.
     *
     * @param \Pohoda\Response\ResponsePackItemType[] $responsePackItem
     *
     * @return self
     */
    public function setResponsePackItem(?array $responsePackItem = null)
    {
        $this->responsePackItem = $responsePackItem;

        return $this;
    }
}
