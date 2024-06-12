<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListActionPriceType
 *
 *
 * XSD Type: listActionPriceType
 */
class ListActionPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\ActionPrice\ActionPriceType[] $actionPrice
     */
    private $actionPrice = [
    ];

    /**
     * Adds as actionPrice
     *
     * @return self
     * @param \Pohoda\ActionPrice\ActionPriceType $actionPrice
     */
    public function addToActionPrice(\Pohoda\ActionPrice\ActionPriceType $actionPrice)
    {
        $this->actionPrice[] = $actionPrice;
        return $this;
    }

    /**
     * isset actionPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActionPrice($index)
    {
        return isset($this->actionPrice[$index]);
    }

    /**
     * unset actionPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActionPrice($index)
    {
        unset($this->actionPrice[$index]);
    }

    /**
     * Gets as actionPrice
     *
     * @return \Pohoda\ActionPrice\ActionPriceType[]
     */
    public function getActionPrice()
    {
        return $this->actionPrice;
    }

    /**
     * Sets a new actionPrice
     *
     * @param \Pohoda\ActionPrice\ActionPriceType[] $actionPrice
     * @return self
     */
    public function setActionPrice(array $actionPrice = null)
    {
        $this->actionPrice = $actionPrice;
        return $this;
    }
}
