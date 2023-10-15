<?php

namespace Pohoda\Documentresponse\ItemType;

/**
 * Class representing ProducedItemAType
 */
class ProducedItemAType
{
    /**
     * @var string[] $id
     */
    private $id = [
        
    ];

    /**
     * Adds as id
     *
     * @return self
     * @param string $id
     */
    public function addToId($id)
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * isset id
     *
     * @param int|string $index
     * @return bool
     */
    public function issetId($index)
    {
        return isset($this->id[$index]);
    }

    /**
     * unset id
     *
     * @param int|string $index
     * @return void
     */
    public function unsetId($index)
    {
        unset($this->id[$index]);
    }

    /**
     * Gets as id
     *
     * @return string[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string[] $id
     * @return self
     */
    public function setId(array $id = null)
    {
        $this->id = $id;
        return $this;
    }
}

