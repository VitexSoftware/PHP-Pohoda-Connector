<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListRulesPairingType
 *
 *
 * XSD Type: listRulesPairingType
 */
class ListRulesPairingType extends ListVersionType
{
    /**
     * @var \Pohoda\RulesPairing\RulesPairingType[] $rulesPairing
     */
    private $rulesPairing = [
        
    ];

    /**
     * Adds as rulesPairing
     *
     * @return self
     * @param \Pohoda\RulesPairing\RulesPairingType $rulesPairing
     */
    public function addToRulesPairing(\Pohoda\RulesPairing\RulesPairingType $rulesPairing)
    {
        $this->rulesPairing[] = $rulesPairing;
        return $this;
    }

    /**
     * isset rulesPairing
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRulesPairing($index)
    {
        return isset($this->rulesPairing[$index]);
    }

    /**
     * unset rulesPairing
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRulesPairing($index)
    {
        unset($this->rulesPairing[$index]);
    }

    /**
     * Gets as rulesPairing
     *
     * @return \Pohoda\RulesPairing\RulesPairingType[]
     */
    public function getRulesPairing()
    {
        return $this->rulesPairing;
    }

    /**
     * Sets a new rulesPairing
     *
     * @param \Pohoda\RulesPairing\RulesPairingType[] $rulesPairing
     * @return self
     */
    public function setRulesPairing(array $rulesPairing = null)
    {
        $this->rulesPairing = $rulesPairing;
        return $this;
    }
}

