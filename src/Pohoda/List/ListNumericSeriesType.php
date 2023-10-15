<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListNumericSeriesType
 *
 *
 * XSD Type: listNumericSeriesType
 */
class ListNumericSeriesType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNumericSeriesType[] $itemNumericSeries
     */
    private $itemNumericSeries = [
        
    ];

    /**
     * Adds as itemNumericSeries
     *
     * @return self
     * @param \Pohoda\List\ItemNumericSeriesType $itemNumericSeries
     */
    public function addToItemNumericSeries(\Pohoda\List\ItemNumericSeriesType $itemNumericSeries)
    {
        $this->itemNumericSeries[] = $itemNumericSeries;
        return $this;
    }

    /**
     * isset itemNumericSeries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemNumericSeries($index)
    {
        return isset($this->itemNumericSeries[$index]);
    }

    /**
     * unset itemNumericSeries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemNumericSeries($index)
    {
        unset($this->itemNumericSeries[$index]);
    }

    /**
     * Gets as itemNumericSeries
     *
     * @return \Pohoda\List\ItemNumericSeriesType[]
     */
    public function getItemNumericSeries()
    {
        return $this->itemNumericSeries;
    }

    /**
     * Sets a new itemNumericSeries
     *
     * @param \Pohoda\List\ItemNumericSeriesType[] $itemNumericSeries
     * @return self
     */
    public function setItemNumericSeries(array $itemNumericSeries = null)
    {
        $this->itemNumericSeries = $itemNumericSeries;
        return $this;
    }
}

