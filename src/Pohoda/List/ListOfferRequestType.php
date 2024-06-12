<?php

namespace Pohoda\List;

/**
 * Class representing ListOfferRequestType
 *
 *
 * XSD Type: listOfferRequestType
 */
class ListOfferRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $offerType
     */
    private $offerType = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $offerVersion
     */
    private $offerVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestOfferType[] $requestOffer
     */
    private $requestOffer = [
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as offerType
     *
     * @return string
     */
    public function getOfferType()
    {
        return $this->offerType;
    }

    /**
     * Sets a new offerType
     *
     * @param string $offerType
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->offerType = $offerType;
        return $this;
    }

    /**
     * Gets as offerVersion
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
     * Sets a new offerVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $offerVersion
     * @return self
     */
    public function setOfferVersion($offerVersion)
    {
        $this->offerVersion = $offerVersion;
        return $this;
    }

    /**
     * Gets as extSystem
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
     * Sets a new extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;
        return $this;
    }

    /**
     * Adds as requestOffer
     *
     * @return self
     * @param \Pohoda\Filter\RequestOfferType $requestOffer
     */
    public function addToRequestOffer(\Pohoda\Filter\RequestOfferType $requestOffer)
    {
        $this->requestOffer[] = $requestOffer;
        return $this;
    }

    /**
     * isset requestOffer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestOffer($index)
    {
        return isset($this->requestOffer[$index]);
    }

    /**
     * unset requestOffer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestOffer($index)
    {
        unset($this->requestOffer[$index]);
    }

    /**
     * Gets as requestOffer
     *
     * @return \Pohoda\Filter\RequestOfferType[]
     */
    public function getRequestOffer()
    {
        return $this->requestOffer;
    }

    /**
     * Sets a new requestOffer
     *
     * @param \Pohoda\Filter\RequestOfferType[] $requestOffer
     * @return self
     */
    public function setRequestOffer(array $requestOffer)
    {
        $this->requestOffer = $requestOffer;
        return $this;
    }
}
