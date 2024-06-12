<?php

namespace Pohoda\Voucher;

/**
 * Class representing VoucherDetailType
 *
 *
 * XSD Type: voucherDetailType
 */
class VoucherDetailType
{
    /**
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @var \Pohoda\Voucher\VoucherItemType[] $voucherItem
     */
    private $voucherItem = [
    ];

    /**
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @var \Pohoda\Voucher\VoucherliquidationItemType[] $voucherLiquidationItem
     */
    private $voucherLiquidationItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType $roundingItem
     */
    private $roundingItem = null;

    /**
     * Adds as voucherItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return self
     * @param \Pohoda\Voucher\VoucherItemType $voucherItem
     */
    public function addToVoucherItem(\Pohoda\Voucher\VoucherItemType $voucherItem)
    {
        $this->voucherItem[] = $voucherItem;
        return $this;
    }

    /**
     * isset voucherItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVoucherItem($index)
    {
        return isset($this->voucherItem[$index]);
    }

    /**
     * unset voucherItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVoucherItem($index)
    {
        unset($this->voucherItem[$index]);
    }

    /**
     * Gets as voucherItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return \Pohoda\Voucher\VoucherItemType[]
     */
    public function getVoucherItem()
    {
        return $this->voucherItem;
    }

    /**
     * Sets a new voucherItem
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param \Pohoda\Voucher\VoucherItemType[] $voucherItem
     * @return self
     */
    public function setVoucherItem(array $voucherItem = null)
    {
        $this->voucherItem = $voucherItem;
        return $this;
    }

    /**
     * Adds as voucherLiquidationItem
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @return self
     * @param \Pohoda\Voucher\VoucherliquidationItemType $voucherLiquidationItem
     */
    public function addToVoucherLiquidationItem(\Pohoda\Voucher\VoucherliquidationItemType $voucherLiquidationItem)
    {
        $this->voucherLiquidationItem[] = $voucherLiquidationItem;
        return $this;
    }

    /**
     * isset voucherLiquidationItem
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVoucherLiquidationItem($index)
    {
        return isset($this->voucherLiquidationItem[$index]);
    }

    /**
     * unset voucherLiquidationItem
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVoucherLiquidationItem($index)
    {
        unset($this->voucherLiquidationItem[$index]);
    }

    /**
     * Gets as voucherLiquidationItem
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @return \Pohoda\Voucher\VoucherliquidationItemType[]
     */
    public function getVoucherLiquidationItem()
    {
        return $this->voucherLiquidationItem;
    }

    /**
     * Sets a new voucherLiquidationItem
     *
     * Definice položek pro likvidaci dokladu (Pohledávky/Závazku). Pouze pro import.
     *
     * @param \Pohoda\Voucher\VoucherliquidationItemType[] $voucherLiquidationItem
     * @return self
     */
    public function setVoucherLiquidationItem(array $voucherLiquidationItem = null)
    {
        $this->voucherLiquidationItem = $voucherLiquidationItem;
        return $this;
    }

    /**
     * Gets as roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param \Pohoda\Type\RoundingItemType $roundingItem
     * @return self
     */
    public function setRoundingItem(?\Pohoda\Type\RoundingItemType $roundingItem = null)
    {
        $this->roundingItem = $roundingItem;
        return $this;
    }
}
