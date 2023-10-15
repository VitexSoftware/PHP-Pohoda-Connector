<?php

namespace Pohoda\List;

/**
 * Class representing ListVoucherRequestType
 *
 *
 * XSD Type: listVoucherRequestType
 */
class ListVoucherRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $voucherVersion
     */
    private $voucherVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestVoucherType[] $requestVoucher
     */
    private $requestVoucher = [

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
     * Gets as voucherVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getVoucherVersion()
    {
        return $this->voucherVersion;
    }

    /**
     * Sets a new voucherVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $voucherVersion
     * @return self
     */
    public function setVoucherVersion($voucherVersion)
    {
        $this->voucherVersion = $voucherVersion;
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
     * Adds as requestVoucher
     *
     * @return self
     * @param \Pohoda\Filter\RequestVoucherType $requestVoucher
     */
    public function addToRequestVoucher(\Pohoda\Filter\RequestVoucherType $requestVoucher)
    {
        $this->requestVoucher[] = $requestVoucher;
        return $this;
    }

    /**
     * isset requestVoucher
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestVoucher($index)
    {
        return isset($this->requestVoucher[$index]);
    }

    /**
     * unset requestVoucher
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestVoucher($index)
    {
        unset($this->requestVoucher[$index]);
    }

    /**
     * Gets as requestVoucher
     *
     * @return \Pohoda\Filter\RequestVoucherType[]
     */
    public function getRequestVoucher()
    {
        return $this->requestVoucher;
    }

    /**
     * Sets a new requestVoucher
     *
     * @param \Pohoda\Filter\RequestVoucherType[] $requestVoucher
     * @return self
     */
    public function setRequestVoucher(array $requestVoucher)
    {
        $this->requestVoucher = $requestVoucher;
        return $this;
    }
}
