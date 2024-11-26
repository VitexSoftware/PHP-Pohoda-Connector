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

namespace Pohoda\Voucher;

/**
 * Class representing VoucherliquidationItemType.
 *
 * XSD Type: voucherliquidationItemType
 */
class VoucherliquidationItemType
{
    /**
     * Nastavení likvidace dokladu (pohledávky/závazku).
     */
    private ?\Pohoda\Voucher\SettingsLiquidationType $settingsLiquidation = null;

    /**
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @var \Pohoda\Voucher\LiquidationItemType[]
     */
    private array $liquidationItem = [
    ];

    /**
     * Gets as settingsLiquidation.
     *
     * Nastavení likvidace dokladu (pohledávky/závazku).
     *
     * @return \Pohoda\Voucher\SettingsLiquidationType
     */
    public function getSettingsLiquidation()
    {
        return $this->settingsLiquidation;
    }

    /**
     * Sets a new settingsLiquidation.
     *
     * Nastavení likvidace dokladu (pohledávky/závazku).
     *
     * @return self
     */
    public function setSettingsLiquidation(\Pohoda\Voucher\SettingsLiquidationType $settingsLiquidation)
    {
        $this->settingsLiquidation = $settingsLiquidation;

        return $this;
    }

    /**
     * Adds as liquidationItem.
     *
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @return self
     */
    public function addToLiquidationItem(\Pohoda\Voucher\LiquidationItemType $liquidationItem)
    {
        $this->liquidationItem[] = $liquidationItem;

        return $this;
    }

    /**
     * isset liquidationItem.
     *
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLiquidationItem($index)
    {
        return isset($this->liquidationItem[$index]);
    }

    /**
     * unset liquidationItem.
     *
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @param int|string $index
     */
    public function unsetLiquidationItem($index): void
    {
        unset($this->liquidationItem[$index]);
    }

    /**
     * Gets as liquidationItem.
     *
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @return \Pohoda\Voucher\LiquidationItemType[]
     */
    public function getLiquidationItem()
    {
        return $this->liquidationItem;
    }

    /**
     * Sets a new liquidationItem.
     *
     * Definice položek, které provádějí likvidaci dokladu typu(Pohledávka/Závazek).
     *
     * @param \Pohoda\Voucher\LiquidationItemType[] $liquidationItem
     *
     * @return self
     */
    public function setLiquidationItem(array $liquidationItem)
    {
        $this->liquidationItem = $liquidationItem;

        return $this;
    }
}
