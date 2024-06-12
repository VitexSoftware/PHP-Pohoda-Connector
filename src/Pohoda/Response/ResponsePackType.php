<?php

namespace Pohoda\Response;

/**
 * Class representing ResponsePackType
 *
 *
 * XSD Type: responsePackType
 */
class ResponsePackType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $note
     */
    private $note = null;

    /**
     * @var string $programVersion
     */
    private $programVersion = null;

    /**
     * IČ firmy, která XML zpracovala.
     *
     * @var string $ico
     */
    private $ico = null;

    /**
     * Jedinečný identifikátor účetnictví firmy, která XML zpracovala.
     *
     * @var string $key
     */
    private $key = null;

    /**
     * @var \DateTime $dateTimeStamp
     */
    private $dateTimeStamp = null;

    /**
     * @var \Pohoda\Response\ResponsePackItemType[] $responsePackItem
     */
    private $responsePackItem = [
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
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as programVersion
     *
     * @return string
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }

    /**
     * Sets a new programVersion
     *
     * @param string $programVersion
     * @return self
     */
    public function setProgramVersion($programVersion)
    {
        $this->programVersion = $programVersion;
        return $this;
    }

    /**
     * Gets as ico
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
     * Sets a new ico
     *
     * IČ firmy, která XML zpracovala.
     *
     * @param string $ico
     * @return self
     */
    public function setIco($ico)
    {
        $this->ico = $ico;
        return $this;
    }

    /**
     * Gets as key
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
     * Sets a new key
     *
     * Jedinečný identifikátor účetnictví firmy, která XML zpracovala.
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as dateTimeStamp
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp
     *
     * @param \DateTime $dateTimeStamp
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;
        return $this;
    }

    /**
     * Adds as responsePackItem
     *
     * @return self
     * @param \Pohoda\Response\ResponsePackItemType $responsePackItem
     */
    public function addToResponsePackItem(\Pohoda\Response\ResponsePackItemType $responsePackItem)
    {
        $this->responsePackItem[] = $responsePackItem;
        return $this;
    }

    /**
     * isset responsePackItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponsePackItem($index)
    {
        return isset($this->responsePackItem[$index]);
    }

    /**
     * unset responsePackItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponsePackItem($index)
    {
        unset($this->responsePackItem[$index]);
    }

    /**
     * Gets as responsePackItem
     *
     * @return \Pohoda\Response\ResponsePackItemType[]
     */
    public function getResponsePackItem()
    {
        return $this->responsePackItem;
    }

    /**
     * Sets a new responsePackItem
     *
     * @param \Pohoda\Response\ResponsePackItemType[] $responsePackItem
     * @return self
     */
    public function setResponsePackItem(array $responsePackItem = null)
    {
        $this->responsePackItem = $responsePackItem;
        return $this;
    }
}
