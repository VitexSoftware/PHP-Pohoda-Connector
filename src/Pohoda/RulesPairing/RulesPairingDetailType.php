<?php

namespace Pohoda\RulesPairing;

/**
 * Class representing RulesPairingDetailType
 *
 *
 * XSD Type: rulesPairingDetailType
 */
class RulesPairingDetailType
{
    /**
     * @var \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingItem
     */
    private $rulesPairingItem = [

    ];

    /**
     * Adds as rulesPairingItem
     *
     * @return self
     * @param \Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem
     */
    public function addToRulesPairingItem(\Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem)
    {
        $this->rulesPairingItem[] = $rulesPairingItem;
        return $this;
    }

    /**
     * isset rulesPairingItem
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRulesPairingItem($index)
    {
        return isset($this->rulesPairingItem[$index]);
    }

    /**
     * unset rulesPairingItem
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRulesPairingItem($index)
    {
        unset($this->rulesPairingItem[$index]);
    }

    /**
     * Gets as rulesPairingItem
     *
     * @return \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    public function getRulesPairingItem()
    {
        return $this->rulesPairingItem;
    }

    /**
     * Sets a new rulesPairingItem
     *
     * @param \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingItem
     * @return self
     */
    public function setRulesPairingItem(array $rulesPairingItem)
    {
        $this->rulesPairingItem = $rulesPairingItem;
        return $this;
    }
}
