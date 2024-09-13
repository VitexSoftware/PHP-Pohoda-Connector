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
 * Class representing ListIndividualPriceRequestType.
 *
 * XSD Type: listIndividualPriceRequestType
 */
class ListIndividualPriceRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $individualPriceVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestIndividualPriceType[]
     */
    private array $requestIndividualPrice = [
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
     * Gets as individualPriceVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getIndividualPriceVersion()
    {
        return $this->individualPriceVersion;
    }

    /**
     * Sets a new individualPriceVersion.
     *
     * Požadovaná verze.
     *
     * @param string $individualPriceVersion
     *
     * @return self
     */
    public function setIndividualPriceVersion($individualPriceVersion)
    {
        $this->individualPriceVersion = $individualPriceVersion;

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
     * Adds as requestIndividualPrice.
     *
     * @return self
     */
    public function addToRequestIndividualPrice(\Pohoda\Filter\RequestIndividualPriceType $requestIndividualPrice)
    {
        $this->requestIndividualPrice[] = $requestIndividualPrice;

        return $this;
    }

    /**
     * isset requestIndividualPrice.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestIndividualPrice($index)
    {
        return isset($this->requestIndividualPrice[$index]);
    }

    /**
     * unset requestIndividualPrice.
     *
     * @param int|string $index
     */
    public function unsetRequestIndividualPrice($index): void
    {
        unset($this->requestIndividualPrice[$index]);
    }

    /**
     * Gets as requestIndividualPrice.
     *
     * @return \Pohoda\Filter\RequestIndividualPriceType[]
     */
    public function getRequestIndividualPrice()
    {
        return $this->requestIndividualPrice;
    }

    /**
     * Sets a new requestIndividualPrice.
     *
     * @param \Pohoda\Filter\RequestIndividualPriceType[] $requestIndividualPrice
     *
     * @return self
     */
    public function setRequestIndividualPrice(array $requestIndividualPrice)
    {
        $this->requestIndividualPrice = $requestIndividualPrice;

        return $this;
    }
}
