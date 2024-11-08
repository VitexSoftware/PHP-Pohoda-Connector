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

namespace Pohoda\Service;

/**
 * Class representing ServiceAddressType.
 *
 * XSD Type: serviceAddressType
 */
class ServiceAddressType
{
    private ?int $refAD = null;
    private ?string $company = null;

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
     * Gets as company.
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }
}
