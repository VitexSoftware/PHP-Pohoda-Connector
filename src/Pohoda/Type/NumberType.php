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

namespace Pohoda\Type;

/**
 * Class representing NumberType.
 *
 * XSD Type: numberType
 */
class NumberType
{
    /**
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
     */
    private ?int $id = null;

    /**
     * Prefix číselné řady.
     */
    private ?string $ids = null;

    /**
     * Číslo dokladu, bez vazby na číselnou řadu.
     */
    private ?\Pohoda\Type\NumberType\NumberRequestedAType $numberRequested = null;

    /**
     * Gets as id.
     *
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
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
     * Odkaz na číselnou řadu. Vyšší prioritu má element "id".
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
     * Gets as ids.
     *
     * Prefix číselné řady.
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
     * Prefix číselné řady.
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
     * Gets as numberRequested.
     *
     * Číslo dokladu, bez vazby na číselnou řadu.
     *
     * @return \Pohoda\Type\NumberType\NumberRequestedAType
     */
    public function getNumberRequested()
    {
        return $this->numberRequested;
    }

    /**
     * Sets a new numberRequested.
     *
     * Číslo dokladu, bez vazby na číselnou řadu.
     *
     * @return self
     */
    public function setNumberRequested(?\Pohoda\Type\NumberType\NumberRequestedAType $numberRequested = null)
    {
        $this->numberRequested = $numberRequested;

        return $this;
    }
}
