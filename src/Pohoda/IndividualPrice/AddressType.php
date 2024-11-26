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

namespace Pohoda\IndividualPrice;

/**
 * Class representing AddressType.
 *
 * XSD Type: address
 */
class AddressType
{
    /**
     * Odkaz na ID záznamu.
     */
    private ?int $id = null;

    /**
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Gets as id.
     *
     * Odkaz na ID záznamu.
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
     * Odkaz na ID záznamu.
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
     * Gets as extId.
     *
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Externí ID záznamu. Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }
}
