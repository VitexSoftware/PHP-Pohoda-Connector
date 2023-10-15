<?php

namespace Pohoda\List;

/**
 * Class representing ListActionPriceRequestType
 *
 *
 * XSD Type: listActionPriceRequestType
 */
class ListActionPriceRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $actionPricesVersion
     */
    private $actionPricesVersion = null;

    /**
     * @var \Pohoda\Filter\RequestActionPriceType[] $requestActionPrice
     */
    private $requestActionPrice = [

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
     * Gets as actionPricesVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getActionPricesVersion()
    {
        return $this->actionPricesVersion;
    }

    /**
     * Sets a new actionPricesVersion
     *
     * Požadovaná verze.
     *
     * @param string $actionPricesVersion
     * @return self
     */
    public function setActionPricesVersion($actionPricesVersion)
    {
        $this->actionPricesVersion = $actionPricesVersion;
        return $this;
    }

    /**
     * Adds as requestActionPrice
     *
     * @return self
     * @param \Pohoda\Filter\RequestActionPriceType $requestActionPrice
     */
    public function addToRequestActionPrice(\Pohoda\Filter\RequestActionPriceType $requestActionPrice)
    {
        $this->requestActionPrice[] = $requestActionPrice;
        return $this;
    }

    /**
     * isset requestActionPrice
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestActionPrice($index)
    {
        return isset($this->requestActionPrice[$index]);
    }

    /**
     * unset requestActionPrice
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestActionPrice($index)
    {
        unset($this->requestActionPrice[$index]);
    }

    /**
     * Gets as requestActionPrice
     *
     * @return \Pohoda\Filter\RequestActionPriceType[]
     */
    public function getRequestActionPrice()
    {
        return $this->requestActionPrice;
    }

    /**
     * Sets a new requestActionPrice
     *
     * @param \Pohoda\Filter\RequestActionPriceType[] $requestActionPrice
     * @return self
     */
    public function setRequestActionPrice(array $requestActionPrice)
    {
        $this->requestActionPrice = $requestActionPrice;
        return $this;
    }
}
