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

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationType.
 *
 * XSD Type: automaticLiquidationType
 */
class AutomaticLiquidationType
{
    private string $version = null;

    /**
     * Výběr záznamu.
     */
    private \Pohoda\Filter\RecordAutomaticLiquidationType $record = null;

    /**
     * Pravidlo párování dokladů.
     */
    private \Pohoda\Type\RefType $ruleOfPairing = null;

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
     * Gets as record.
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
     * Sets a new record.
     *
     * Výběr záznamu.
     *
     * @return self
     */
    public function setRecord(\Pohoda\Filter\RecordAutomaticLiquidationType $record)
    {
        $this->record = $record;

        return $this;
    }

    /**
     * Gets as ruleOfPairing.
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
     * Sets a new ruleOfPairing.
     *
     * Pravidlo párování dokladů.
     *
     * @return self
     */
    public function setRuleOfPairing(\Pohoda\Type\RefType $ruleOfPairing)
    {
        $this->ruleOfPairing = $ruleOfPairing;

        return $this;
    }
}
