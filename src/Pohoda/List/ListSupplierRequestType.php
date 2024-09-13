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

namespace Pohoda\List;

/**
 * Class representing ListSupplierRequestType.
 *
 * XSD Type: listSupplierRequestType
 */
class ListSupplierRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze dodavatele.
     */
    private string $supplierVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestStockType[]
     */
    private array $requestSupplier = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as supplierVersion.
     *
     * Požadovaná verze dodavatele.
     *
     * @return string
     */
    public function getSupplierVersion()
    {
        return $this->supplierVersion;
    }

    /**
     * Sets a new supplierVersion.
     *
     * Požadovaná verze dodavatele.
     *
     * @param string $supplierVersion
     *
     * @return self
     */
    public function setSupplierVersion($supplierVersion)
    {
        $this->supplierVersion = $supplierVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Adds as requestSupplier.
     *
     * @return self
     */
    public function addToRequestSupplier(\Pohoda\Filter\RequestStockType $requestSupplier)
    {
        $this->requestSupplier[] = $requestSupplier;

        return $this;
    }

    /**
     * isset requestSupplier.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestSupplier($index)
    {
        return isset($this->requestSupplier[$index]);
    }

    /**
     * unset requestSupplier.
     *
     * @param int|string $index
     */
    public function unsetRequestSupplier($index): void
    {
        unset($this->requestSupplier[$index]);
    }

    /**
     * Gets as requestSupplier.
     *
     * @return \Pohoda\Filter\RequestStockType[]
     */
    public function getRequestSupplier()
    {
        return $this->requestSupplier;
    }

    /**
     * Sets a new requestSupplier.
     *
     * @param \Pohoda\Filter\RequestStockType[] $requestSupplier
     *
     * @return self
     */
    public function setRequestSupplier(array $requestSupplier)
    {
        $this->requestSupplier = $requestSupplier;

        return $this;
    }
}
