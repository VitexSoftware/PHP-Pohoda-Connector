<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListGroupStocksType
 *
 *
 * XSD Type: listGroupStocksType
 */
class ListGroupStocksType extends ListVersionType
{
    /**
     * @var \Pohoda\GroupStocks\GroupStocksType[] $groupStocks
     */
    private $groupStocks = [
        
    ];

    /**
     * Adds as groupStocks
     *
     * @return self
     * @param \Pohoda\GroupStocks\GroupStocksType $groupStocks
     */
    public function addToGroupStocks(\Pohoda\GroupStocks\GroupStocksType $groupStocks)
    {
        $this->groupStocks[] = $groupStocks;
        return $this;
    }

    /**
     * isset groupStocks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupStocks($index)
    {
        return isset($this->groupStocks[$index]);
    }

    /**
     * unset groupStocks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupStocks($index)
    {
        unset($this->groupStocks[$index]);
    }

    /**
     * Gets as groupStocks
     *
     * @return \Pohoda\GroupStocks\GroupStocksType[]
     */
    public function getGroupStocks()
    {
        return $this->groupStocks;
    }

    /**
     * Sets a new groupStocks
     *
     * @param \Pohoda\GroupStocks\GroupStocksType[] $groupStocks
     * @return self
     */
    public function setGroupStocks(array $groupStocks = null)
    {
        $this->groupStocks = $groupStocks;
        return $this;
    }
}

