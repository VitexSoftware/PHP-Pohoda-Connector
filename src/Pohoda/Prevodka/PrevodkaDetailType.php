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

namespace Pohoda\Prevodka;

/**
 * Class representing PrevodkaDetailType.
 *
 * XSD Type: prevodkaDetailType
 */
class PrevodkaDetailType
{
    /**
     * @var \Pohoda\Prevodka\PrevodkaItemType[]
     */
    private array $prevodkaItem = [
    ];

    /**
     * Adds as prevodkaItem.
     *
     * @return self
     */
    public function addToPrevodkaItem(\Pohoda\Prevodka\PrevodkaItemType $prevodkaItem)
    {
        $this->prevodkaItem[] = $prevodkaItem;

        return $this;
    }

    /**
     * isset prevodkaItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrevodkaItem($index)
    {
        return isset($this->prevodkaItem[$index]);
    }

    /**
     * unset prevodkaItem.
     *
     * @param int|string $index
     */
    public function unsetPrevodkaItem($index): void
    {
        unset($this->prevodkaItem[$index]);
    }

    /**
     * Gets as prevodkaItem.
     *
     * @return \Pohoda\Prevodka\PrevodkaItemType[]
     */
    public function getPrevodkaItem()
    {
        return $this->prevodkaItem;
    }

    /**
     * Sets a new prevodkaItem.
     *
     * @param \Pohoda\Prevodka\PrevodkaItemType[] $prevodkaItem
     *
     * @return self
     */
    public function setPrevodkaItem(array $prevodkaItem)
    {
        $this->prevodkaItem = $prevodkaItem;

        return $this;
    }
}
