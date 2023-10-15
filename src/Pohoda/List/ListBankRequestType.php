<?php

namespace Pohoda\List;

/**
 * Class representing ListBankRequestType
 *
 *
 * XSD Type: listBankRequestType
 */
class ListBankRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze banky.
     *
     * @var string $bankVersion
     */
    private $bankVersion = null;

    /**
     * @var \Pohoda\Filter\RequestBankType $requestBank
     */
    private $requestBank = null;

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
     * Gets as bankVersion
     *
     * Požadovaná verze banky.
     *
     * @return string
     */
    public function getBankVersion()
    {
        return $this->bankVersion;
    }

    /**
     * Sets a new bankVersion
     *
     * Požadovaná verze banky.
     *
     * @param string $bankVersion
     * @return self
     */
    public function setBankVersion($bankVersion)
    {
        $this->bankVersion = $bankVersion;
        return $this;
    }

    /**
     * Gets as requestBank
     *
     * @return \Pohoda\Filter\RequestBankType
     */
    public function getRequestBank()
    {
        return $this->requestBank;
    }

    /**
     * Sets a new requestBank
     *
     * @param \Pohoda\Filter\RequestBankType $requestBank
     * @return self
     */
    public function setRequestBank(?\Pohoda\Filter\RequestBankType $requestBank = null)
    {
        $this->requestBank = $requestBank;
        return $this;
    }
}
