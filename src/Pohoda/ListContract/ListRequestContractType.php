<?php

namespace Pohoda\ListContract;

/**
 * Class representing ListRequestContractType
 *
 *
 * XSD Type: listRequestContractType
 */
class ListRequestContractType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze contract dokumentu.
     *
     * @var string $contractVersion
     */
    private $contractVersion = null;

    /**
     * @var \Pohoda\Filter\RequestContractType[] $requestContract
     */
    private $requestContract = [
        
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
     * Gets as contractVersion
     *
     * Požadovaná verze contract dokumentu.
     *
     * @return string
     */
    public function getContractVersion()
    {
        return $this->contractVersion;
    }

    /**
     * Sets a new contractVersion
     *
     * Požadovaná verze contract dokumentu.
     *
     * @param string $contractVersion
     * @return self
     */
    public function setContractVersion($contractVersion)
    {
        $this->contractVersion = $contractVersion;
        return $this;
    }

    /**
     * Adds as requestContract
     *
     * @return self
     * @param \Pohoda\Filter\RequestContractType $requestContract
     */
    public function addToRequestContract(\Pohoda\Filter\RequestContractType $requestContract)
    {
        $this->requestContract[] = $requestContract;
        return $this;
    }

    /**
     * isset requestContract
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestContract($index)
    {
        return isset($this->requestContract[$index]);
    }

    /**
     * unset requestContract
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestContract($index)
    {
        unset($this->requestContract[$index]);
    }

    /**
     * Gets as requestContract
     *
     * @return \Pohoda\Filter\RequestContractType[]
     */
    public function getRequestContract()
    {
        return $this->requestContract;
    }

    /**
     * Sets a new requestContract
     *
     * @param \Pohoda\Filter\RequestContractType[] $requestContract
     * @return self
     */
    public function setRequestContract(array $requestContract)
    {
        $this->requestContract = $requestContract;
        return $this;
    }
}

