<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceCustomersType
 *
 * Odběratelé Akční ceny zásob.
 * XSD Type: actionPriceCustomersType
 */
class ActionPriceCustomersType
{
    /**
     * @var \Pohoda\ActionPrice\CustomerType[] $customer
     */
    private $customer = [
    ];

    /**
     * Adds as customer
     *
     * @return self
     * @param \Pohoda\ActionPrice\CustomerType $customer
     */
    public function addToCustomer(\Pohoda\ActionPrice\CustomerType $customer)
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * isset customer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomer($index)
    {
        return isset($this->customer[$index]);
    }

    /**
     * unset customer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomer($index)
    {
        unset($this->customer[$index]);
    }

    /**
     * Gets as customer
     *
     * @return \Pohoda\ActionPrice\CustomerType[]
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param \Pohoda\ActionPrice\CustomerType[] $customer
     * @return self
     */
    public function setCustomer(array $customer)
    {
        $this->customer = $customer;
        return $this;
    }
}
