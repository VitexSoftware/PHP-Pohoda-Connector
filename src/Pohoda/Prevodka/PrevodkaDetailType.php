<?php

namespace Pohoda\Prevodka;

/**
 * Class representing PrevodkaDetailType
 *
 *
 * XSD Type: prevodkaDetailType
 */
class PrevodkaDetailType
{
    /**
     * @var \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaItem
     */
    private $prevodkaItem = [
    ];

    /**
     * Adds as prevodkaItem
     *
     * @return self
     * @param \Pohoda\Prevodka\PrevodkaItemType $prevodkaItem
     */
    public function addToPrevodkaItem(\Pohoda\Prevodka\PrevodkaItemType $prevodkaItem)
    {
        $this->prevodkaItem[] = $prevodkaItem;
        return $this;
    }

    /**
     * isset prevodkaItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrevodkaItem($index)
    {
        return isset($this->prevodkaItem[$index]);
    }

    /**
     * unset prevodkaItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrevodkaItem($index)
    {
        unset($this->prevodkaItem[$index]);
    }

    /**
     * Gets as prevodkaItem
     *
     * @return \Pohoda\Prevodka\PrevodkaItemType[]
     */
    public function getPrevodkaItem()
    {
        return $this->prevodkaItem;
    }

    /**
     * Sets a new prevodkaItem
     *
     * @param \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaItem
     * @return self
     */
    public function setPrevodkaItem(array $prevodkaItem)
    {
        $this->prevodkaItem = $prevodkaItem;
        return $this;
    }
}
