<?php

namespace Pohoda\Stock;

/**
 * Class representing StockSerialNumberType
 *
 *
 * XSD Type: stockSerialNumberType
 */
class StockSerialNumberType
{
    /**
     * @var \Pohoda\Stock\SerialNumberItemType[] $serialNumberItem
     */
    private $serialNumberItem = [
    ];

    /**
     * Adds as serialNumberItem
     *
     * @return self
     * @param \Pohoda\Stock\SerialNumberItemType $serialNumberItem
     */
    public function addToSerialNumberItem(\Pohoda\Stock\SerialNumberItemType $serialNumberItem)
    {
        $this->serialNumberItem[] = $serialNumberItem;
        return $this;
    }

    /**
     * isset serialNumberItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSerialNumberItem($index)
    {
        return isset($this->serialNumberItem[$index]);
    }

    /**
     * unset serialNumberItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSerialNumberItem($index)
    {
        unset($this->serialNumberItem[$index]);
    }

    /**
     * Gets as serialNumberItem
     *
     * @return \Pohoda\Stock\SerialNumberItemType[]
     */
    public function getSerialNumberItem()
    {
        return $this->serialNumberItem;
    }

    /**
     * Sets a new serialNumberItem
     *
     * @param \Pohoda\Stock\SerialNumberItemType[] $serialNumberItem
     * @return self
     */
    public function setSerialNumberItem(array $serialNumberItem)
    {
        $this->serialNumberItem = $serialNumberItem;
        return $this;
    }
}
