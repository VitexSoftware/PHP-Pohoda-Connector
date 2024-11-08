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
 * Class representing RefAddressType.
 *
 * Odkaz kontaktní osoby na hlavní adresu.
 * XSD Type: refAddressType
 */
class RefAddressType
{
    private ?int $refAD = null;
    private ?\Pohoda\Type\ExtIdType $extId = null;
    private ?\Pohoda\Type\AddressType $address = null;

    /**
     * Gets as refAD.
     *
     * @return int
     */
    public function getRefAD()
    {
        return $this->refAD;
    }

    /**
     * Sets a new refAD.
     *
     * @param int $refAD
     *
     * @return self
     */
    public function setRefAD($refAD)
    {
        $this->refAD = $refAD;

        return $this;
    }

    /**
     * Gets as extId.
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
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as address.
     *
     * @return \Pohoda\Type\AddressType
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
    public function setAddress(?\Pohoda\Type\AddressType $address = null)
    {
        $this->address = $address;

        return $this;
    }
}
