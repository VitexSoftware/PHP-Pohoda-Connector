<?php

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationType
 *
 *
 * XSD Type: automaticLiquidationType
 */
class AutomaticLiquidationType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Výběr záznamu.
     *
     * @var \Pohoda\Filter\RecordAutomaticLiquidationType $record
     */
    private $record = null;

    /**
     * Pravidlo párování dokladů.
     *
     * @var \Pohoda\Type\RefType $ruleOfPairing
     */
    private $ruleOfPairing = null;

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
     * Gets as record
     *
     * Výběr záznamu.
     *
     * @return \Pohoda\Filter\RecordAutomaticLiquidationType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Sets a new record
     *
     * Výběr záznamu.
     *
     * @param \Pohoda\Filter\RecordAutomaticLiquidationType $record
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordAutomaticLiquidationType $record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Gets as ruleOfPairing
     *
     * Pravidlo párování dokladů.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getRuleOfPairing()
    {
        return $this->ruleOfPairing;
    }

    /**
     * Sets a new ruleOfPairing
     *
     * Pravidlo párování dokladů.
     *
     * @param \Pohoda\Type\RefType $ruleOfPairing
     * @return self
     */
    public function setRuleOfPairing(\Pohoda\Type\RefType $ruleOfPairing)
    {
        $this->ruleOfPairing = $ruleOfPairing;
        return $this;
    }
}
