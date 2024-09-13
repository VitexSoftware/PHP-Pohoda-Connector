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
 * Class representing ListCentreType.
 *
 * XSD Type: listCentreType
 */
class ListCentreType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ItemNameType[]
     */
    private array $itemCentre = [
    ];

    /**
     * Adds as itemCentre.
     *
     * @return self
     */
    public function addToItemCentre(\Pohoda\List\ItemNameType $itemCentre)
    {
        $this->itemCentre[] = $itemCentre;

        return $this;
    }

    /**
     * isset itemCentre.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemCentre($index)
    {
        return isset($this->itemCentre[$index]);
    }

    /**
     * unset itemCentre.
     *
     * @param int|string $index
     */
    public function unsetItemCentre($index): void
    {
        unset($this->itemCentre[$index]);
    }

    /**
     * Gets as itemCentre.
     *
     * @return \Pohoda\List\ItemNameType[]
     */
    public function getItemCentre()
    {
        return $this->itemCentre;
    }

    /**
     * Sets a new itemCentre.
     *
     * @param \Pohoda\List\ItemNameType[] $itemCentre
     *
     * @return self
     */
    public function setItemCentre(?array $itemCentre = null)
    {
        $this->itemCentre = $itemCentre;

        return $this;
    }
}
