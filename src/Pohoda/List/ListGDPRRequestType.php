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
 * Class representing ListGDPRRequestType.
 *
 * XSD Type: listGDPRRequestType
 */
class ListGDPRRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $gDPRVersion = null;

    /**
     * @var \Pohoda\List\RequestGDPRType[]
     */
    private array $requestGDPR = [
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
     * Gets as gDPRVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getGDPRVersion()
    {
        return $this->gDPRVersion;
    }

    /**
     * Sets a new gDPRVersion.
     *
     * Požadovaná verze.
     *
     * @param string $gDPRVersion
     *
     * @return self
     */
    public function setGDPRVersion($gDPRVersion)
    {
        $this->gDPRVersion = $gDPRVersion;

        return $this;
    }

    /**
     * Adds as requestGDPR.
     *
     * @return self
     */
    public function addToRequestGDPR(\Pohoda\List\RequestGDPRType $requestGDPR)
    {
        $this->requestGDPR[] = $requestGDPR;

        return $this;
    }

    /**
     * isset requestGDPR.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestGDPR($index)
    {
        return isset($this->requestGDPR[$index]);
    }

    /**
     * unset requestGDPR.
     *
     * @param int|string $index
     */
    public function unsetRequestGDPR($index): void
    {
        unset($this->requestGDPR[$index]);
    }

    /**
     * Gets as requestGDPR.
     *
     * @return \Pohoda\List\RequestGDPRType[]
     */
    public function getRequestGDPR()
    {
        return $this->requestGDPR;
    }

    /**
     * Sets a new requestGDPR.
     *
     * @param \Pohoda\List\RequestGDPRType[] $requestGDPR
     *
     * @return self
     */
    public function setRequestGDPR(array $requestGDPR)
    {
        $this->requestGDPR = $requestGDPR;

        return $this;
    }
}
