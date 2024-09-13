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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListRulesPairingType.
 *
 * XSD Type: listRulesPairingType
 */
class ListRulesPairingType extends ListVersionType
{
    /**
     * @var \Pohoda\RulesPairing\RulesPairingType[]
     */
    private array $rulesPairing = [
    ];

    /**
     * Adds as rulesPairing.
     *
     * @return self
     */
    public function addToRulesPairing(\Pohoda\RulesPairing\RulesPairingType $rulesPairing)
    {
        $this->rulesPairing[] = $rulesPairing;

        return $this;
    }

    /**
     * isset rulesPairing.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRulesPairing($index)
    {
        return isset($this->rulesPairing[$index]);
    }

    /**
     * unset rulesPairing.
     *
     * @param int|string $index
     */
    public function unsetRulesPairing($index): void
    {
        unset($this->rulesPairing[$index]);
    }

    /**
     * Gets as rulesPairing.
     *
     * @return \Pohoda\RulesPairing\RulesPairingType[]
     */
    public function getRulesPairing()
    {
        return $this->rulesPairing;
    }

    /**
     * Sets a new rulesPairing.
     *
     * @param \Pohoda\RulesPairing\RulesPairingType[] $rulesPairing
     *
     * @return self
     */
    public function setRulesPairing(?array $rulesPairing = null)
    {
        $this->rulesPairing = $rulesPairing;

        return $this;
    }
}
