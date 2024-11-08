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

namespace Pohoda\Type\StockItemMovementType;

/**
 * Class representing StockItemAType.
 */
class StockItemAType
{
    private ?int $id = null;
    private ?string $eAN = null;
    private ?string $ids = null;
    private ?string $name = null;
    private ?string $nameComplement = null;

    /**
     * Gets as id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as eAN.
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN.
     *
     * @param string $eAN
     *
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;

        return $this;
    }

    /**
     * Gets as ids.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids.
     *
     * @param string $ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as nameComplement.
     *
     * @return string
     */
    public function getNameComplement()
    {
        return $this->nameComplement;
    }

    /**
     * Sets a new nameComplement.
     *
     * @param string $nameComplement
     *
     * @return self
     */
    public function setNameComplement($nameComplement)
    {
        $this->nameComplement = $nameComplement;

        return $this;
    }
}
