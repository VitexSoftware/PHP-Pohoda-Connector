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
 * Class representing ListRecyclingContribRequestType.
 *
 * XSD Type: listRecyclingContribRequestType
 */
class ListRecyclingContribRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $recyclingContribVersion = null;

    /**
     * @var \Pohoda\Filter\RequestRecyclingContribType[]
     */
    private array $requestRecyclingContrib = [
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
     * Gets as recyclingContribVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getRecyclingContribVersion()
    {
        return $this->recyclingContribVersion;
    }

    /**
     * Sets a new recyclingContribVersion.
     *
     * Požadovaná verze.
     *
     * @param string $recyclingContribVersion
     *
     * @return self
     */
    public function setRecyclingContribVersion($recyclingContribVersion)
    {
        $this->recyclingContribVersion = $recyclingContribVersion;

        return $this;
    }

    /**
     * Adds as requestRecyclingContrib.
     *
     * @return self
     */
    public function addToRequestRecyclingContrib(\Pohoda\Filter\RequestRecyclingContribType $requestRecyclingContrib)
    {
        $this->requestRecyclingContrib[] = $requestRecyclingContrib;

        return $this;
    }

    /**
     * isset requestRecyclingContrib.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestRecyclingContrib($index)
    {
        return isset($this->requestRecyclingContrib[$index]);
    }

    /**
     * unset requestRecyclingContrib.
     *
     * @param int|string $index
     */
    public function unsetRequestRecyclingContrib($index): void
    {
        unset($this->requestRecyclingContrib[$index]);
    }

    /**
     * Gets as requestRecyclingContrib.
     *
     * @return \Pohoda\Filter\RequestRecyclingContribType[]
     */
    public function getRequestRecyclingContrib()
    {
        return $this->requestRecyclingContrib;
    }

    /**
     * Sets a new requestRecyclingContrib.
     *
     * @param \Pohoda\Filter\RequestRecyclingContribType[] $requestRecyclingContrib
     *
     * @return self
     */
    public function setRequestRecyclingContrib(array $requestRecyclingContrib)
    {
        $this->requestRecyclingContrib = $requestRecyclingContrib;

        return $this;
    }
}
