<?php

namespace Pohoda\Type;

/**
 * Class representing AccountType
 *
 * Účet kam zaplatit.
 * XSD Type: accountType
 */
class AccountType
{
    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $ids
     */
    private $ids = null;

    /**
     * @var string $accountNo
     */
    private $accountNo = null;

    /**
     * @var string $bankCode
     */
    private $bankCode = null;

    /**
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Gets as id
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
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
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
     * Gets as accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets a new accountNo
     *
     * @param string $accountNo
     * @return self
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }

    /**
     * Gets as bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets a new bankCode
     *
     * @param string $bankCode
     * @return self
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }

    /**
     * Gets as extId
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }
}

