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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListActionPriceType.
 *
 * XSD Type: listActionPriceType
 */
class ListActionPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\ActionPrice\ActionPriceType[]
     */
    private array $actionPrice = [
    ];

    /**
     * Adds as actionPrice.
     *
     * @return self
     */
    public function addToActionPrice(\Pohoda\ActionPrice\ActionPriceType $actionPrice)
    {
        $this->actionPrice[] = $actionPrice;

        return $this;
    }

    /**
     * isset actionPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetActionPrice($index)
    {
        return isset($this->actionPrice[$index]);
    }

    /**
     * unset actionPrice.
     *
     * @param int|string $index
     */
    public function unsetActionPrice($index): void
    {
        unset($this->actionPrice[$index]);
    }

    /**
     * Gets as actionPrice.
     *
     * @return \Pohoda\ActionPrice\ActionPriceType[]
     */
    public function getActionPrice()
    {
        return $this->actionPrice;
    }

    /**
     * Sets a new actionPrice.
     *
     * @param \Pohoda\ActionPrice\ActionPriceType[] $actionPrice
     *
     * @return self
     */
    public function setActionPrice(?array $actionPrice = null)
    {
        $this->actionPrice = $actionPrice;

        return $this;
    }
}
