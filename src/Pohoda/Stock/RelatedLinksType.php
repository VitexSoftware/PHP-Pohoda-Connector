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

namespace Pohoda\Stock;

/**
 * Class representing RelatedLinksType.
 *
 * XSD Type: relatedLinksType
 */
class RelatedLinksType
{
    /**
     * @var \Pohoda\Stock\RelatedLinkType[]
     */
    private array $relatedLink = [
    ];

    /**
     * Adds as relatedLink.
     *
     * @return self
     */
    public function addToRelatedLink(\Pohoda\Stock\RelatedLinkType $relatedLink)
    {
        $this->relatedLink[] = $relatedLink;

        return $this;
    }

    /**
     * isset relatedLink.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRelatedLink($index)
    {
        return isset($this->relatedLink[$index]);
    }

    /**
     * unset relatedLink.
     *
     * @param int|string $index
     */
    public function unsetRelatedLink($index): void
    {
        unset($this->relatedLink[$index]);
    }

    /**
     * Gets as relatedLink.
     *
     * @return \Pohoda\Stock\RelatedLinkType[]
     */
    public function getRelatedLink()
    {
        return $this->relatedLink;
    }

    /**
     * Sets a new relatedLink.
     *
     * @param \Pohoda\Stock\RelatedLinkType[] $relatedLink
     *
     * @return self
     */
    public function setRelatedLink(array $relatedLink)
    {
        $this->relatedLink = $relatedLink;

        return $this;
    }
}
