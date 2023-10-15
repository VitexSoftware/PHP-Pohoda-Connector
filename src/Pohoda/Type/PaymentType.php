<?php

namespace Pohoda\Type;

/**
 * Class representing PaymentType
 *
 * Odkaz na entitu. Vyšší prioritu má element "id", dále "ids".
 * XSD Type: paymentType
 */
class PaymentType
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
     * @var string $paymentType
     */
    private $paymentType = null;

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
     * Gets as paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }
}
