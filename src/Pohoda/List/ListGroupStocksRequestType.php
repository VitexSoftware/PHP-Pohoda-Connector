<?php

namespace Pohoda\List;

/**
 * Class representing ListGroupStocksRequestType
 *
 *
 * XSD Type: listGroupStocksRequestType
 */
class ListGroupStocksRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze skladů.
     *
     * @var string $groupStocksVersion
     */
    private $groupStocksVersion = null;

    /**
     * @var \Pohoda\Filter\RequestGroupStocksType $requestGroupStocks
     */
    private $requestGroupStocks = null;

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
     * Gets as groupStocksVersion
     *
     * Požadovaná verze skladů.
     *
     * @return string
     */
    public function getGroupStocksVersion()
    {
        return $this->groupStocksVersion;
    }

    /**
     * Sets a new groupStocksVersion
     *
     * Požadovaná verze skladů.
     *
     * @param string $groupStocksVersion
     * @return self
     */
    public function setGroupStocksVersion($groupStocksVersion)
    {
        $this->groupStocksVersion = $groupStocksVersion;
        return $this;
    }

    /**
     * Gets as requestGroupStocks
     *
     * @return \Pohoda\Filter\RequestGroupStocksType
     */
    public function getRequestGroupStocks()
    {
        return $this->requestGroupStocks;
    }

    /**
     * Sets a new requestGroupStocks
     *
     * @param \Pohoda\Filter\RequestGroupStocksType $requestGroupStocks
     * @return self
     */
    public function setRequestGroupStocks(?\Pohoda\Filter\RequestGroupStocksType $requestGroupStocks = null)
    {
        $this->requestGroupStocks = $requestGroupStocks;
        return $this;
    }
}
