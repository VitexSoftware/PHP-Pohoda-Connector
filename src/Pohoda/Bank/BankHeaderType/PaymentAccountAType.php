<?php

namespace Pohoda\Bank\BankHeaderType;

/**
 * Class representing PaymentAccountAType
 */
class PaymentAccountAType
{
    /**
     * @var string $accountNo
     */
    private $accountNo = null;

    /**
     * @var string $bankCode
     */
    private $bankCode = null;

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
}

