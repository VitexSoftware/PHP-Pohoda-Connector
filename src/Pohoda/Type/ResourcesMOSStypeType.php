<?php

namespace Pohoda\Type;

/**
 * Class representing ResourcesMOSStypeType
 *
 *
 * XSD Type: resourcesMOSStype
 */
class ResourcesMOSStypeType
{
    /**
     * @var string[] $ids
     */
    private $ids = [
    ];

    /**
     * Adds as ids
     *
     * @return self
     * @param string $ids
     */
    public function addToIds($ids)
    {
        $this->ids[] = $ids;
        return $this;
    }

    /**
     * isset ids
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIds($index)
    {
        return isset($this->ids[$index]);
    }

    /**
     * unset ids
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIds($index)
    {
        unset($this->ids[$index]);
    }

    /**
     * Gets as ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string[] $ids
     * @return self
     */
    public function setIds(array $ids)
    {
        $this->ids = $ids;
        return $this;
    }
}
