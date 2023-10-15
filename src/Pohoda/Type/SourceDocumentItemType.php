<?php

namespace Pohoda\Type;

/**
 * Class representing SourceDocumentItemType
 *
 *
 * XSD Type: sourceDocumentItemType
 */
class SourceDocumentItemType
{
    /**
     * ID položky dokladu.
     *
     * @var int $sourceItemId
     */
    private $sourceItemId = null;

    /**
     * Externí identifikátor položky dokladu.
     *
     * @var \Pohoda\Type\ExtIdType $sourceItemExtId
     */
    private $sourceItemExtId = null;

    /**
     * Gets as sourceItemId
     *
     * ID položky dokladu.
     *
     * @return int
     */
    public function getSourceItemId()
    {
        return $this->sourceItemId;
    }

    /**
     * Sets a new sourceItemId
     *
     * ID položky dokladu.
     *
     * @param int $sourceItemId
     * @return self
     */
    public function setSourceItemId($sourceItemId)
    {
        $this->sourceItemId = $sourceItemId;
        return $this;
    }

    /**
     * Gets as sourceItemExtId
     *
     * Externí identifikátor položky dokladu.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getSourceItemExtId()
    {
        return $this->sourceItemExtId;
    }

    /**
     * Sets a new sourceItemExtId
     *
     * Externí identifikátor položky dokladu.
     *
     * @param \Pohoda\Type\ExtIdType $sourceItemExtId
     * @return self
     */
    public function setSourceItemExtId(?\Pohoda\Type\ExtIdType $sourceItemExtId = null)
    {
        $this->sourceItemExtId = $sourceItemExtId;
        return $this;
    }
}

