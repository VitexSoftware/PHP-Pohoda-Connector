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
 * Class representing ListGroupStocksRequestType.
 *
 * XSD Type: listGroupStocksRequestType
 */
class ListGroupStocksRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze skladů.
     */
    private ?string $groupStocksVersion = null;
    private ?\Pohoda\Filter\RequestGroupStocksType $requestGroupStocks = null;

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
     * Gets as groupStocksVersion.
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
     * Sets a new groupStocksVersion.
     *
     * Požadovaná verze skladů.
     *
     * @param string $groupStocksVersion
     *
     * @return self
     */
    public function setGroupStocksVersion($groupStocksVersion)
    {
        $this->groupStocksVersion = $groupStocksVersion;

        return $this;
    }

    /**
     * Gets as requestGroupStocks.
     *
     * @return \Pohoda\Filter\RequestGroupStocksType
     */
    public function getRequestGroupStocks()
    {
        return $this->requestGroupStocks;
    }

    /**
     * Sets a new requestGroupStocks.
     *
     * @return self
     */
    public function setRequestGroupStocks(?\Pohoda\Filter\RequestGroupStocksType $requestGroupStocks = null)
    {
        $this->requestGroupStocks = $requestGroupStocks;

        return $this;
    }
}
