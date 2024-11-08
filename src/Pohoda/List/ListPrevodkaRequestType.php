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
 * Class representing ListPrevodkaRequestType.
 *
 * XSD Type: listPrevodkaRequestType
 */
class ListPrevodkaRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $prevodkaVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestPrevodkaType[]
     */
    private array $requestPrevodka = [
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
     * Gets as prevodkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getPrevodkaVersion()
    {
        return $this->prevodkaVersion;
    }

    /**
     * Sets a new prevodkaVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $prevodkaVersion
     *
     * @return self
     */
    public function setPrevodkaVersion($prevodkaVersion)
    {
        $this->prevodkaVersion = $prevodkaVersion;

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
     * Adds as requestPrevodka.
     *
     * @return self
     */
    public function addToRequestPrevodka(\Pohoda\Filter\RequestPrevodkaType $requestPrevodka)
    {
        $this->requestPrevodka[] = $requestPrevodka;

        return $this;
    }

    /**
     * isset requestPrevodka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestPrevodka($index)
    {
        return isset($this->requestPrevodka[$index]);
    }

    /**
     * unset requestPrevodka.
     *
     * @param int|string $index
     */
    public function unsetRequestPrevodka($index): void
    {
        unset($this->requestPrevodka[$index]);
    }

    /**
     * Gets as requestPrevodka.
     *
     * @return \Pohoda\Filter\RequestPrevodkaType[]
     */
    public function getRequestPrevodka()
    {
        return $this->requestPrevodka;
    }

    /**
     * Sets a new requestPrevodka.
     *
     * @param \Pohoda\Filter\RequestPrevodkaType[] $requestPrevodka
     *
     * @return self
     */
    public function setRequestPrevodka(array $requestPrevodka)
    {
        $this->requestPrevodka = $requestPrevodka;

        return $this;
    }
}
