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

namespace Pohoda\Type;

/**
 * Class representing LinksType.
 *
 * XSD Type: linksType
 */
class LinksType
{
    /**
     * Přenos dokladu.
     *
     * @var \Pohoda\Type\LinkElemetType[]
     */
    private array $link = [
    ];

    /**
     * Vazba na doklad.
     *
     * @var \Pohoda\Type\ManualLinkElementType[]
     */
    private array $manualLink = [
    ];

    /**
     * Adds as link.
     *
     * Přenos dokladu.
     *
     * @return self
     */
    public function addToLink(\Pohoda\Type\LinkElemetType $link)
    {
        $this->link[] = $link;

        return $this;
    }

    /**
     * isset link.
     *
     * Přenos dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link.
     *
     * Přenos dokladu.
     *
     * @param int|string $index
     */
    public function unsetLink($index): void
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link.
     *
     * Přenos dokladu.
     *
     * @return \Pohoda\Type\LinkElemetType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link.
     *
     * Přenos dokladu.
     *
     * @param \Pohoda\Type\LinkElemetType[] $link
     *
     * @return self
     */
    public function setLink(?array $link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Adds as manualLink.
     *
     * Vazba na doklad.
     *
     * @return self
     */
    public function addToManualLink(\Pohoda\Type\ManualLinkElementType $manualLink)
    {
        $this->manualLink[] = $manualLink;

        return $this;
    }

    /**
     * isset manualLink.
     *
     * Vazba na doklad.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetManualLink($index)
    {
        return isset($this->manualLink[$index]);
    }

    /**
     * unset manualLink.
     *
     * Vazba na doklad.
     *
     * @param int|string $index
     */
    public function unsetManualLink($index): void
    {
        unset($this->manualLink[$index]);
    }

    /**
     * Gets as manualLink.
     *
     * Vazba na doklad.
     *
     * @return \Pohoda\Type\ManualLinkElementType[]
     */
    public function getManualLink()
    {
        return $this->manualLink;
    }

    /**
     * Sets a new manualLink.
     *
     * Vazba na doklad.
     *
     * @param \Pohoda\Type\ManualLinkElementType[] $manualLink
     *
     * @return self
     */
    public function setManualLink(?array $manualLink = null)
    {
        $this->manualLink = $manualLink;

        return $this;
    }
}
