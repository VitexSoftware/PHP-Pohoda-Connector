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
 * Class representing ListOfferRequestType.
 *
 * XSD Type: listOfferRequestType
 */
class ListOfferRequestType
{
    private ?string $version = null;
    private ?string $offerType = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $offerVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestOfferType[]
     */
    private array $requestOffer = [
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
     * Gets as offerType.
     *
     * @return string
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * Sets a new offerType.
     *
     * @param string $offerType
     *
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->offerType = $offerType;

        return $this;
    }

    /**
     * Gets as offerVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getOfferVersion()
    {
        return $this->offerVersion;
    }

    /**
     * Sets a new offerVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $offerVersion
     *
     * @return self
     */
    public function setOfferVersion($offerVersion)
    {
        $this->offerVersion = $offerVersion;

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
     * Adds as requestOffer.
     *
     * @return self
     */
    public function addToRequestOffer(\Pohoda\Filter\RequestOfferType $requestOffer)
    {
        $this->requestOffer[] = $requestOffer;

        return $this;
    }

    /**
     * isset requestOffer.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestOffer($index)
    {
        return isset($this->requestOffer[$index]);
    }

    /**
     * unset requestOffer.
     *
     * @param int|string $index
     */
    public function unsetRequestOffer($index): void
    {
        unset($this->requestOffer[$index]);
    }

    /**
     * Gets as requestOffer.
     *
     * @return \Pohoda\Filter\RequestOfferType[]
     */
    public function getRequestOffer()
    {
        return $this->requestOffer;
    }

    /**
     * Sets a new requestOffer.
     *
     * @param \Pohoda\Filter\RequestOfferType[] $requestOffer
     *
     * @return self
     */
    public function setRequestOffer(array $requestOffer)
    {
        $this->requestOffer = $requestOffer;

        return $this;
    }
}
