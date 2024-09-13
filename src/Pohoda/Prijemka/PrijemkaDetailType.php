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

namespace Pohoda\Prijemka;

/**
 * Class representing PrijemkaDetailType.
 *
 * XSD Type: prijemkaDetailType
 */
class PrijemkaDetailType
{
    /**
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @var \Pohoda\Prijemka\PrijemkaItemType[]
     */
    private array $prijemkaItem = [
    ];

    /**
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @var \Pohoda\Type\RoundingItemType[]
     */
    private array $roundingItem = [
    ];

    /**
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @var \Pohoda\Prijemka\PrijemkaAccessoryChargesItemType[]
     */
    private array $prijemkaAccessoryChargesItem = [
    ];

    /**
     * Adds as prijemkaItem.
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return self
     */
    public function addToPrijemkaItem(\Pohoda\Prijemka\PrijemkaItemType $prijemkaItem)
    {
        $this->prijemkaItem[] = $prijemkaItem;

        return $this;
    }

    /**
     * isset prijemkaItem.
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrijemkaItem($index)
    {
        return isset($this->prijemkaItem[$index]);
    }

    /**
     * unset prijemkaItem.
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param int|string $index
     */
    public function unsetPrijemkaItem($index): void
    {
        unset($this->prijemkaItem[$index]);
    }

    /**
     * Gets as prijemkaItem.
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @return \Pohoda\Prijemka\PrijemkaItemType[]
     */
    public function getPrijemkaItem()
    {
        return $this->prijemkaItem;
    }

    /**
     * Sets a new prijemkaItem.
     *
     * Definice "Textové" nebo "Skladové" položky dokladu.
     *
     * @param \Pohoda\Prijemka\PrijemkaItemType[] $prijemkaItem
     *
     * @return self
     */
    public function setPrijemkaItem(array $prijemkaItem)
    {
        $this->prijemkaItem = $prijemkaItem;

        return $this;
    }

    /**
     * Adds as roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return self
     */
    public function addToRoundingItem(\Pohoda\Type\RoundingItemType $roundingItem)
    {
        $this->roundingItem[] = $roundingItem;

        return $this;
    }

    /**
     * isset roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRoundingItem($index)
    {
        return isset($this->roundingItem[$index]);
    }

    /**
     * unset roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param int|string $index
     */
    public function unsetRoundingItem($index): void
    {
        unset($this->roundingItem[$index]);
    }

    /**
     * Gets as roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @return \Pohoda\Type\RoundingItemType[]
     */
    public function getRoundingItem()
    {
        return $this->roundingItem;
    }

    /**
     * Sets a new roundingItem.
     *
     * Položka dokladu - výpočet DPH ze zaokrouhlení (pouze pro export).
     *
     * @param \Pohoda\Type\RoundingItemType[] $roundingItem
     *
     * @return self
     */
    public function setRoundingItem(array $roundingItem)
    {
        $this->roundingItem = $roundingItem;

        return $this;
    }

    /**
     * Adds as prijemkaAccessoryChargesItem.
     *
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @return self
     */
    public function addToPrijemkaAccessoryChargesItem(\Pohoda\Prijemka\PrijemkaAccessoryChargesItemType $prijemkaAccessoryChargesItem)
    {
        $this->prijemkaAccessoryChargesItem[] = $prijemkaAccessoryChargesItem;

        return $this;
    }

    /**
     * isset prijemkaAccessoryChargesItem.
     *
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrijemkaAccessoryChargesItem($index)
    {
        return isset($this->prijemkaAccessoryChargesItem[$index]);
    }

    /**
     * unset prijemkaAccessoryChargesItem.
     *
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @param int|string $index
     */
    public function unsetPrijemkaAccessoryChargesItem($index): void
    {
        unset($this->prijemkaAccessoryChargesItem[$index]);
    }

    /**
     * Gets as prijemkaAccessoryChargesItem.
     *
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @return \Pohoda\Prijemka\PrijemkaAccessoryChargesItemType[]
     */
    public function getPrijemkaAccessoryChargesItem()
    {
        return $this->prijemkaAccessoryChargesItem;
    }

    /**
     * Sets a new prijemkaAccessoryChargesItem.
     *
     * Definice položky dokladu typu "Vedlejší náklady".
     *
     * @param \Pohoda\Prijemka\PrijemkaAccessoryChargesItemType[] $prijemkaAccessoryChargesItem
     *
     * @return self
     */
    public function setPrijemkaAccessoryChargesItem(array $prijemkaAccessoryChargesItem)
    {
        $this->prijemkaAccessoryChargesItem = $prijemkaAccessoryChargesItem;

        return $this;
    }
}
