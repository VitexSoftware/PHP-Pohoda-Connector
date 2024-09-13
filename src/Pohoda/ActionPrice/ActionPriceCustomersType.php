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

namespace Pohoda\ActionPrice;

/**
 * Class representing ActionPriceCustomersType.
 *
 * Odběratelé Akční ceny zásob.
 * XSD Type: actionPriceCustomersType
 */
class ActionPriceCustomersType
{
    /**
     * @var \Pohoda\ActionPrice\CustomerType[]
     */
    private array $customer = [
    ];

    /**
     * Adds as customer.
     *
     * @return self
     */
    public function addToCustomer(\Pohoda\ActionPrice\CustomerType $customer)
    {
        $this->customer[] = $customer;

        return $this;
    }

    /**
     * isset customer.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCustomer($index)
    {
        return isset($this->customer[$index]);
    }

    /**
     * unset customer.
     *
     * @param int|string $index
     */
    public function unsetCustomer($index): void
    {
        unset($this->customer[$index]);
    }

    /**
     * Gets as customer.
     *
     * @return \Pohoda\ActionPrice\CustomerType[]
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer.
     *
     * @param \Pohoda\ActionPrice\CustomerType[] $customer
     *
     * @return self
     */
    public function setCustomer(array $customer)
    {
        $this->customer = $customer;

        return $this;
    }
}
