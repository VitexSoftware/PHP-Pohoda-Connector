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

namespace Pohoda\IntParam;

/**
 * Class representing ParameterListType.
 *
 * XSD Type: parameterListType
 */
class ParameterListType
{
    /**
     * @var \Pohoda\IntParam\ParameterListItemType[]
     */
    private array $parameterListItem = [
    ];

    /**
     * Adds as parameterListItem.
     *
     * @return self
     */
    public function addToParameterListItem(\Pohoda\IntParam\ParameterListItemType $parameterListItem)
    {
        $this->parameterListItem[] = $parameterListItem;

        return $this;
    }

    /**
     * isset parameterListItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameterListItem($index)
    {
        return isset($this->parameterListItem[$index]);
    }

    /**
     * unset parameterListItem.
     *
     * @param int|string $index
     */
    public function unsetParameterListItem($index): void
    {
        unset($this->parameterListItem[$index]);
    }

    /**
     * Gets as parameterListItem.
     *
     * @return \Pohoda\IntParam\ParameterListItemType[]
     */
    public function getParameterListItem()
    {
        return $this->parameterListItem;
    }

    /**
     * Sets a new parameterListItem.
     *
     * @param \Pohoda\IntParam\ParameterListItemType[] $parameterListItem
     *
     * @return self
     */
    public function setParameterListItem(?array $parameterListItem = null)
    {
        $this->parameterListItem = $parameterListItem;

        return $this;
    }
}
