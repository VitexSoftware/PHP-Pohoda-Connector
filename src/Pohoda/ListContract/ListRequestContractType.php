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

namespace Pohoda\ListContract;

/**
 * Class representing ListRequestContractType.
 *
 * XSD Type: listRequestContractType
 */
class ListRequestContractType
{
    private string $version = null;

    /**
     * Požadovaná verze contract dokumentu.
     */
    private string $contractVersion = null;

    /**
     * @var \Pohoda\Filter\RequestContractType[]
     */
    private array $requestContract = [
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
     * Gets as contractVersion.
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
     * Sets a new contractVersion.
     *
     * Požadovaná verze contract dokumentu.
     *
     * @param string $contractVersion
     *
     * @return self
     */
    public function setContractVersion($contractVersion)
    {
        $this->contractVersion = $contractVersion;

        return $this;
    }

    /**
     * Adds as requestContract.
     *
     * @return self
     */
    public function addToRequestContract(\Pohoda\Filter\RequestContractType $requestContract)
    {
        $this->requestContract[] = $requestContract;

        return $this;
    }

    /**
     * isset requestContract.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestContract($index)
    {
        return isset($this->requestContract[$index]);
    }

    /**
     * unset requestContract.
     *
     * @param int|string $index
     */
    public function unsetRequestContract($index): void
    {
        unset($this->requestContract[$index]);
    }

    /**
     * Gets as requestContract.
     *
     * @return \Pohoda\Filter\RequestContractType[]
     */
    public function getRequestContract()
    {
        return $this->requestContract;
    }

    /**
     * Sets a new requestContract.
     *
     * @param \Pohoda\Filter\RequestContractType[] $requestContract
     *
     * @return self
     */
    public function setRequestContract(array $requestContract)
    {
        $this->requestContract = $requestContract;

        return $this;
    }
}
