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
 * Class representing AccountingType.
 *
 * Odkaz na entitu. Vyšší prioritu má element "id", dále "ids."
 * XSD Type: accountingType
 */
class AccountingType
{
    /**
     * ID záznamu předkontace.
     */
    private ?int $id = null;

    /**
     * Zkratka předkontace.
     */
    private ?string $ids = null;

    /**
     * Pevné typy předkontací.
     */
    private ?string $accountingType = null;

    /**
     * Gets as id.
     *
     * ID záznamu předkontace.
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
     * ID záznamu předkontace.
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
     * Zkratka předkontace.
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
     * Zkratka předkontace.
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
     * Gets as accountingType.
     *
     * Pevné typy předkontací.
     *
     * @return string
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * Sets a new accountingType.
     *
     * Pevné typy předkontací.
     *
     * @param string $accountingType
     *
     * @return self
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;

        return $this;
    }
}
