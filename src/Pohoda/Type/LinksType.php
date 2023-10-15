<?php

namespace Pohoda\Type;

/**
 * Class representing LinksType
 *
 *
 * XSD Type: linksType
 */
class LinksType
{
    /**
     * Přenos dokladu.
     *
     * @var \Pohoda\Type\LinkElemetType[] $link
     */
    private $link = [
        
    ];

    /**
     * Vazba na doklad.
     *
     * @var \Pohoda\Type\ManualLinkElementType[] $manualLink
     */
    private $manualLink = [
        
    ];

    /**
     * Adds as link
     *
     * Přenos dokladu.
     *
     * @return self
     * @param \Pohoda\Type\LinkElemetType $link
     */
    public function addToLink(\Pohoda\Type\LinkElemetType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Přenos dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * Přenos dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
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
     * Sets a new link
     *
     * Přenos dokladu.
     *
     * @param \Pohoda\Type\LinkElemetType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Adds as manualLink
     *
     * Vazba na doklad.
     *
     * @return self
     * @param \Pohoda\Type\ManualLinkElementType $manualLink
     */
    public function addToManualLink(\Pohoda\Type\ManualLinkElementType $manualLink)
    {
        $this->manualLink[] = $manualLink;
        return $this;
    }

    /**
     * isset manualLink
     *
     * Vazba na doklad.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManualLink($index)
    {
        return isset($this->manualLink[$index]);
    }

    /**
     * unset manualLink
     *
     * Vazba na doklad.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManualLink($index)
    {
        unset($this->manualLink[$index]);
    }

    /**
     * Gets as manualLink
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
     * Sets a new manualLink
     *
     * Vazba na doklad.
     *
     * @param \Pohoda\Type\ManualLinkElementType[] $manualLink
     * @return self
     */
    public function setManualLink(array $manualLink = null)
    {
        $this->manualLink = $manualLink;
        return $this;
    }
}

