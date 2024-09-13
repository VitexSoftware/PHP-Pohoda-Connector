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
 * Class representing ListRulesPairingRequestType.
 *
 * XSD Type: listRulesPairingRequestType
 */
class ListRulesPairingRequestType
{
    private string $version = null;

    /**
     * Požadovaná verze.
     */
    private string $rulesPairingVersion = null;

    /**
     * @var \Pohoda\Filter\RequestRulesPairingType[]
     */
    private array $requestRulesPairing = [
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
     * Gets as rulesPairingVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getRulesPairingVersion()
    {
        return $this->rulesPairingVersion;
    }

    /**
     * Sets a new rulesPairingVersion.
     *
     * Požadovaná verze.
     *
     * @param string $rulesPairingVersion
     *
     * @return self
     */
    public function setRulesPairingVersion($rulesPairingVersion)
    {
        $this->rulesPairingVersion = $rulesPairingVersion;

        return $this;
    }

    /**
     * Adds as requestRulesPairing.
     *
     * @return self
     */
    public function addToRequestRulesPairing(\Pohoda\Filter\RequestRulesPairingType $requestRulesPairing)
    {
        $this->requestRulesPairing[] = $requestRulesPairing;

        return $this;
    }

    /**
     * isset requestRulesPairing.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestRulesPairing($index)
    {
        return isset($this->requestRulesPairing[$index]);
    }

    /**
     * unset requestRulesPairing.
     *
     * @param int|string $index
     */
    public function unsetRequestRulesPairing($index): void
    {
        unset($this->requestRulesPairing[$index]);
    }

    /**
     * Gets as requestRulesPairing.
     *
     * @return \Pohoda\Filter\RequestRulesPairingType[]
     */
    public function getRequestRulesPairing()
    {
        return $this->requestRulesPairing;
    }

    /**
     * Sets a new requestRulesPairing.
     *
     * @param \Pohoda\Filter\RequestRulesPairingType[] $requestRulesPairing
     *
     * @return self
     */
    public function setRequestRulesPairing(array $requestRulesPairing)
    {
        $this->requestRulesPairing = $requestRulesPairing;

        return $this;
    }
}
