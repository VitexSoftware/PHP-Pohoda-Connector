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

namespace Pohoda\RulesPairing;

/**
 * Class representing RulesPairingType.
 *
 * XSD Type: rulesPairingType
 */
class RulesPairingType
{
    private string $version = null;
    private \Pohoda\RulesPairing\RulesPairingHeaderType $rulesPairingHeader = null;

    /**
     * @var \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    private array $rulesPairingDetail = null;

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
     * Gets as rulesPairingHeader.
     *
     * @return \Pohoda\RulesPairing\RulesPairingHeaderType
     */
    public function getRulesPairingHeader()
    {
        return $this->rulesPairingHeader;
    }

    /**
     * Sets a new rulesPairingHeader.
     *
     * @return self
     */
    public function setRulesPairingHeader(\Pohoda\RulesPairing\RulesPairingHeaderType $rulesPairingHeader)
    {
        $this->rulesPairingHeader = $rulesPairingHeader;

        return $this;
    }

    /**
     * Adds as rulesPairingItem.
     *
     * @return self
     */
    public function addToRulesPairingDetail(\Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem)
    {
        $this->rulesPairingDetail[] = $rulesPairingItem;

        return $this;
    }

    /**
     * isset rulesPairingDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRulesPairingDetail($index)
    {
        return isset($this->rulesPairingDetail[$index]);
    }

    /**
     * unset rulesPairingDetail.
     *
     * @param int|string $index
     */
    public function unsetRulesPairingDetail($index): void
    {
        unset($this->rulesPairingDetail[$index]);
    }

    /**
     * Gets as rulesPairingDetail.
     *
     * @return \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    public function getRulesPairingDetail()
    {
        return $this->rulesPairingDetail;
    }

    /**
     * Sets a new rulesPairingDetail.
     *
     * @param \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingDetail
     *
     * @return self
     */
    public function setRulesPairingDetail(array $rulesPairingDetail)
    {
        $this->rulesPairingDetail = $rulesPairingDetail;

        return $this;
    }
}
