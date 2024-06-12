<?php

namespace Pohoda\List;

/**
 * Class representing ListRecyclingContribRequestType
 *
 *
 * XSD Type: listRecyclingContribRequestType
 */
class ListRecyclingContribRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $recyclingContribVersion
     */
    private $recyclingContribVersion = null;

    /**
     * @var \Pohoda\Filter\RequestRecyclingContribType[] $requestRecyclingContrib
     */
    private $requestRecyclingContrib = [
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
     * Gets as recyclingContribVersion
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
     * Sets a new recyclingContribVersion
     *
     * Požadovaná verze.
     *
     * @param string $recyclingContribVersion
     * @return self
     */
    public function setRecyclingContribVersion($recyclingContribVersion)
    {
        $this->recyclingContribVersion = $recyclingContribVersion;
        return $this;
    }

    /**
     * Adds as requestRecyclingContrib
     *
     * @return self
     * @param \Pohoda\Filter\RequestRecyclingContribType $requestRecyclingContrib
     */
    public function addToRequestRecyclingContrib(\Pohoda\Filter\RequestRecyclingContribType $requestRecyclingContrib)
    {
        $this->requestRecyclingContrib[] = $requestRecyclingContrib;
        return $this;
    }

    /**
     * isset requestRecyclingContrib
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestRecyclingContrib($index)
    {
        return isset($this->requestRecyclingContrib[$index]);
    }

    /**
     * unset requestRecyclingContrib
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestRecyclingContrib($index)
    {
        unset($this->requestRecyclingContrib[$index]);
    }

    /**
     * Gets as requestRecyclingContrib
     *
     * @return \Pohoda\Filter\RequestRecyclingContribType[]
     */
    public function getRequestRecyclingContrib()
    {
        return $this->requestRecyclingContrib;
    }

    /**
     * Sets a new requestRecyclingContrib
     *
     * @param \Pohoda\Filter\RequestRecyclingContribType[] $requestRecyclingContrib
     * @return self
     */
    public function setRequestRecyclingContrib(array $requestRecyclingContrib)
    {
        $this->requestRecyclingContrib = $requestRecyclingContrib;
        return $this;
    }
}
