<?php

namespace Pohoda\Stock;

/**
 * Class representing RelatedLinksType
 *
 *
 * XSD Type: relatedLinksType
 */
class RelatedLinksType
{
    /**
     * @var \Pohoda\Stock\RelatedLinkType[] $relatedLink
     */
    private $relatedLink = [

    ];

    /**
     * Adds as relatedLink
     *
     * @return self
     * @param \Pohoda\Stock\RelatedLinkType $relatedLink
     */
    public function addToRelatedLink(\Pohoda\Stock\RelatedLinkType $relatedLink)
    {
        $this->relatedLink[] = $relatedLink;
        return $this;
    }

    /**
     * isset relatedLink
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedLink($index)
    {
        return isset($this->relatedLink[$index]);
    }

    /**
     * unset relatedLink
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedLink($index)
    {
        unset($this->relatedLink[$index]);
    }

    /**
     * Gets as relatedLink
     *
     * @return \Pohoda\Stock\RelatedLinkType[]
     */
    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    /**
     * Sets a new relatedLink
     *
     * @param \Pohoda\Stock\RelatedLinkType[] $relatedLink
     * @return self
     */
    public function setRelatedLink(array $relatedLink)
    {
        $this->relatedLink = $relatedLink;
        return $this;
    }
}
