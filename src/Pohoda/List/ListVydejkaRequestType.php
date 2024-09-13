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
 * Class representing ListVydejkaRequestType.
 *
 * XSD Type: listVydejkaRequestType
 */
class ListVydejkaRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze výdejky.
     */
    private string $vydejkaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestVydejkaType[]
     */
    private array $requestVydejka = [
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
     * Gets as vydejkaVersion.
     *
     * Požadovaná verze výdejky.
     *
     * @return string
     */
    public function getVydejkaVersion()
    {
        return $this->vydejkaVersion;
    }

    /**
     * Sets a new vydejkaVersion.
     *
     * Požadovaná verze výdejky.
     *
     * @param string $vydejkaVersion
     *
     * @return self
     */
    public function setVydejkaVersion($vydejkaVersion)
    {
        $this->vydejkaVersion = $vydejkaVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
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
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Adds as requestVydejka.
     *
     * @return self
     */
    public function addToRequestVydejka(\Pohoda\Filter\RequestVydejkaType $requestVydejka)
    {
        $this->requestVydejka[] = $requestVydejka;

        return $this;
    }

    /**
     * isset requestVydejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestVydejka($index)
    {
        return isset($this->requestVydejka[$index]);
    }

    /**
     * unset requestVydejka.
     *
     * @param int|string $index
     */
    public function unsetRequestVydejka($index): void
    {
        unset($this->requestVydejka[$index]);
    }

    /**
     * Gets as requestVydejka.
     *
     * @return \Pohoda\Filter\RequestVydejkaType[]
     */
    public function getRequestVydejka()
    {
        return $this->requestVydejka;
    }

    /**
     * Sets a new requestVydejka.
     *
     * @param \Pohoda\Filter\RequestVydejkaType[] $requestVydejka
     *
     * @return self
     */
    public function setRequestVydejka(array $requestVydejka)
    {
        $this->requestVydejka = $requestVydejka;

        return $this;
    }
}
