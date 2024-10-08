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
 * Class representing ListIndividualPriceType.
 *
 * XSD Type: listIndividualPriceType
 */
class ListIndividualPriceType extends ListVersionType
{
    /**
     * @var \Pohoda\IndividualPrice\IndividualPriceType[]
     */
    private array $individualPrice = [
    ];

    /**
     * Adds as individualPrice.
     *
     * @return self
     */
    public function addToIndividualPrice(\Pohoda\IndividualPrice\IndividualPriceType $individualPrice)
    {
        $this->individualPrice[] = $individualPrice;

        return $this;
    }

    /**
     * isset individualPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIndividualPrice($index)
    {
        return isset($this->individualPrice[$index]);
    }

    /**
     * unset individualPrice.
     *
     * @param int|string $index
     */
    public function unsetIndividualPrice($index): void
    {
        unset($this->individualPrice[$index]);
    }

    /**
     * Gets as individualPrice.
     *
     * @return \Pohoda\IndividualPrice\IndividualPriceType[]
     */
    public function getIndividualPrice()
    {
        return $this->individualPrice;
    }

    /**
     * Sets a new individualPrice.
     *
     * @param \Pohoda\IndividualPrice\IndividualPriceType[] $individualPrice
     *
     * @return self
     */
    public function setIndividualPrice(?array $individualPrice = null)
    {
        $this->individualPrice = $individualPrice;

        return $this;
    }
}
