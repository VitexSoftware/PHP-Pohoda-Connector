<?php

namespace Pohoda\IntParam;

/**
 * Class representing ParameterListType
 *
 *
 * XSD Type: parameterListType
 */
class ParameterListType
{
    /**
     * @var \Pohoda\IntParam\ParameterListItemType[] $parameterListItem
     */
    private $parameterListItem = [
    ];

    /**
     * Adds as parameterListItem
     *
     * @return self
     * @param \Pohoda\IntParam\ParameterListItemType $parameterListItem
     */
    public function addToParameterListItem(\Pohoda\IntParam\ParameterListItemType $parameterListItem)
    {
        $this->parameterListItem[] = $parameterListItem;
        return $this;
    }

    /**
     * isset parameterListItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameterListItem($index)
    {
        return isset($this->parameterListItem[$index]);
    }

    /**
     * unset parameterListItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameterListItem($index)
    {
        unset($this->parameterListItem[$index]);
    }

    /**
     * Gets as parameterListItem
     *
     * @return \Pohoda\IntParam\ParameterListItemType[]
     */
    public function getParameterListItem()
    {
        return $this->parameterListItem;
    }

    /**
     * Sets a new parameterListItem
     *
     * @param \Pohoda\IntParam\ParameterListItemType[] $parameterListItem
     * @return self
     */
    public function setParameterListItem(array $parameterListItem = null)
    {
        $this->parameterListItem = $parameterListItem;
        return $this;
    }
}
