<?php

namespace Pohoda\Type;

/**
 * Class representing MOSStypeType
 *
 *
 * XSD Type: MOSStype
 */
class MOSStypeType
{
    /**
     * @var string $ids
     */
    private $ids = null;

    /**
     * Gets as ids
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }
}
