<?php

namespace Pohoda\RulesPairing;

/**
 * Class representing RulesPairingType
 *
 *
 * XSD Type: rulesPairingType
 */
class RulesPairingType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\RulesPairing\RulesPairingHeaderType $rulesPairingHeader
     */
    private $rulesPairingHeader = null;

    /**
     * @var \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingDetail
     */
    private $rulesPairingDetail = null;

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
     * Gets as rulesPairingHeader
     *
     * @return \Pohoda\RulesPairing\RulesPairingHeaderType
     */
    public function getRulesPairingHeader()
    {
        return $this->rulesPairingHeader;
    }

    /**
     * Sets a new rulesPairingHeader
     *
     * @param \Pohoda\RulesPairing\RulesPairingHeaderType $rulesPairingHeader
     * @return self
     */
    public function setRulesPairingHeader(\Pohoda\RulesPairing\RulesPairingHeaderType $rulesPairingHeader)
    {
        $this->rulesPairingHeader = $rulesPairingHeader;
        return $this;
    }

    /**
     * Adds as rulesPairingItem
     *
     * @return self
     * @param \Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem
     */
    public function addToRulesPairingDetail(\Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem)
    {
        $this->rulesPairingDetail[] = $rulesPairingItem;
        return $this;
    }

    /**
     * isset rulesPairingDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRulesPairingDetail($index)
    {
        return isset($this->rulesPairingDetail[$index]);
    }

    /**
     * unset rulesPairingDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRulesPairingDetail($index)
    {
        unset($this->rulesPairingDetail[$index]);
    }

    /**
     * Gets as rulesPairingDetail
     *
     * @return \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    public function getRulesPairingDetail()
    {
        return $this->rulesPairingDetail;
    }

    /**
     * Sets a new rulesPairingDetail
     *
     * @param \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingDetail
     * @return self
     */
    public function setRulesPairingDetail(array $rulesPairingDetail)
    {
        $this->rulesPairingDetail = $rulesPairingDetail;
        return $this;
    }
}
