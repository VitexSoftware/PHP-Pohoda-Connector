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
 * Class representing ListNumericSeriesType.
 *
 * XSD Type: listNumericSeriesType
 */
class ListNumericSeriesType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNumericSeriesType[]
     */
    private array $itemNumericSeries = [
    ];

    /**
     * Adds as itemNumericSeries.
     *
     * @return self
     */
    public function addToItemNumericSeries(\Pohoda\List\ItemNumericSeriesType $itemNumericSeries)
    {
        $this->itemNumericSeries[] = $itemNumericSeries;

        return $this;
    }

    /**
     * isset itemNumericSeries.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemNumericSeries($index)
    {
        return isset($this->itemNumericSeries[$index]);
    }

    /**
     * unset itemNumericSeries.
     *
     * @param int|string $index
     */
    public function unsetItemNumericSeries($index): void
    {
        unset($this->itemNumericSeries[$index]);
    }

    /**
     * Gets as itemNumericSeries.
     *
     * @return \Pohoda\List\ItemNumericSeriesType[]
     */
    public function getItemNumericSeries()
    {
        return $this->itemNumericSeries;
    }

    /**
     * Sets a new itemNumericSeries.
     *
     * @param \Pohoda\List\ItemNumericSeriesType[] $itemNumericSeries
     *
     * @return self
     */
    public function setItemNumericSeries(?array $itemNumericSeries = null)
    {
        $this->itemNumericSeries = $itemNumericSeries;

        return $this;
    }
}
