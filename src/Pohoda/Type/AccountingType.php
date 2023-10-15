<?php

namespace Pohoda\Type;

/**
 * Class representing AccountingType
 *
 * Odkaz na entitu. Vyšší prioritu má element "id", dále "ids."
 * XSD Type: accountingType
 */
class AccountingType
{
    /**
     * ID záznamu předkontace.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Zkratka předkontace.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Pevné typy předkontací.
     *
     * @var string $accountingType
     */
    private $accountingType = null;

    /**
     * Gets as id
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
     * Sets a new id
     *
     * ID záznamu předkontace.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ids
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
     * Sets a new ids
     *
     * Zkratka předkontace.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as accountingType
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
     * Sets a new accountingType
     *
     * Pevné typy předkontací.
     *
     * @param string $accountingType
     * @return self
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
        return $this;
    }
}
