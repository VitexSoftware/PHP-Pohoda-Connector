<?php

namespace Pohoda\GroupStocks;

/**
 * Class representing GroupStocksType
 *
 *
 * XSD Type: groupStocksType
 */
class GroupStocksType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @var \Pohoda\GroupStocks\ActionTypeType $actionType
     */
    private $actionType = null;

    /**
     * @var \Pohoda\GroupStocks\GroupStocksHeaderType $groupStocksHeader
     */
    private $groupStocksHeader = null;

    /**
     * @var \Pohoda\GroupStocks\VariantsItemType[] $groupStocksDetail
     */
    private $groupStocksDetail = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @return \Pohoda\GroupStocks\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @param \Pohoda\GroupStocks\ActionTypeType $actionType
     * @return self
     */
    public function setActionType(\Pohoda\GroupStocks\ActionTypeType $actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as groupStocksHeader
     *
     * @return \Pohoda\GroupStocks\GroupStocksHeaderType
     */
    public function getGroupStocksHeader()
    {
        return $this->groupStocksHeader;
    }

    /**
     * Sets a new groupStocksHeader
     *
     * @param \Pohoda\GroupStocks\GroupStocksHeaderType $groupStocksHeader
     * @return self
     */
    public function setGroupStocksHeader(\Pohoda\GroupStocks\GroupStocksHeaderType $groupStocksHeader)
    {
        $this->groupStocksHeader = $groupStocksHeader;
        return $this;
    }

    /**
     * Adds as variant
     *
     * @return self
     * @param \Pohoda\GroupStocks\VariantsItemType $variant
     */
    public function addToGroupStocksDetail(\Pohoda\GroupStocks\VariantsItemType $variant)
    {
        $this->groupStocksDetail[] = $variant;
        return $this;
    }

    /**
     * isset groupStocksDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupStocksDetail($index)
    {
        return isset($this->groupStocksDetail[$index]);
    }

    /**
     * unset groupStocksDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupStocksDetail($index)
    {
        unset($this->groupStocksDetail[$index]);
    }

    /**
     * Gets as groupStocksDetail
     *
     * @return \Pohoda\GroupStocks\VariantsItemType[]
     */
    public function getGroupStocksDetail()
    {
        return $this->groupStocksDetail;
    }

    /**
     * Sets a new groupStocksDetail
     *
     * @param \Pohoda\GroupStocks\VariantsItemType[] $groupStocksDetail
     * @return self
     */
    public function setGroupStocksDetail(array $groupStocksDetail)
    {
        $this->groupStocksDetail = $groupStocksDetail;
        return $this;
    }
}

