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
 * Class representing MyAddressType.
 *
 * XSD Type: myAddress
 */
class MyAddressType
{
    private ?\Pohoda\Type\AddressInternetType $address = null;
    private ?\Pohoda\Type\EstablishmentType $establishment = null;

    /**
     * Gets as address.
     *
     * @return \Pohoda\Type\AddressInternetType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address.
     *
     * @return self
     */
    public function setAddress(\Pohoda\Type\AddressInternetType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as establishment.
     *
     * @return \Pohoda\Type\EstablishmentType
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment.
     *
     * @return self
     */
    public function setEstablishment(?\Pohoda\Type\EstablishmentType $establishment = null)
    {
        $this->establishment = $establishment;

        return $this;
    }
}
