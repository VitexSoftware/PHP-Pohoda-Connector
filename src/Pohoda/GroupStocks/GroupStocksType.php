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

namespace Pohoda\GroupStocks;

/**
 * Class representing GroupStocksType.
 *
 * XSD Type: groupStocksType
 */
class GroupStocksType
{
    private ?string $version = null;

    /**
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     */
    private ?\Pohoda\GroupStocks\ActionTypeType $actionType = null;
    private ?\Pohoda\GroupStocks\GroupStocksHeaderType $groupStocksHeader = null;

    /**
     * @var \Pohoda\GroupStocks\VariantsItemType[]
     */
    private ?array $groupStocksDetail = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as actionType.
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
     * Sets a new actionType.
     *
     * Typ práce se záznamem. Výchozí hodnota je přidání nového záznamu.
     *
     * @return self
     */
    public function setActionType(\Pohoda\GroupStocks\ActionTypeType $actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as groupStocksHeader.
     *
     * @return \Pohoda\GroupStocks\GroupStocksHeaderType
     */
    public function getGroupStocksHeader()
    {
        return $this->groupStocksHeader;
    }

    /**
     * Sets a new groupStocksHeader.
     *
     * @return self
     */
    public function setGroupStocksHeader(\Pohoda\GroupStocks\GroupStocksHeaderType $groupStocksHeader)
    {
        $this->groupStocksHeader = $groupStocksHeader;

        return $this;
    }

    /**
     * Adds as variant.
     *
     * @return self
     */
    public function addToGroupStocksDetail(\Pohoda\GroupStocks\VariantsItemType $variant)
    {
        $this->groupStocksDetail[] = $variant;

        return $this;
    }

    /**
     * isset groupStocksDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGroupStocksDetail($index)
    {
        return isset($this->groupStocksDetail[$index]);
    }

    /**
     * unset groupStocksDetail.
     *
     * @param int|string $index
     */
    public function unsetGroupStocksDetail($index): void
    {
        unset($this->groupStocksDetail[$index]);
    }

    /**
     * Gets as groupStocksDetail.
     *
     * @return \Pohoda\GroupStocks\VariantsItemType[]
     */
    public function getGroupStocksDetail()
    {
        return $this->groupStocksDetail;
    }

    /**
     * Sets a new groupStocksDetail.
     *
     * @param \Pohoda\GroupStocks\VariantsItemType[] $groupStocksDetail
     *
     * @return self
     */
    public function setGroupStocksDetail(array $groupStocksDetail)
    {
        $this->groupStocksDetail = $groupStocksDetail;

        return $this;
    }
}
