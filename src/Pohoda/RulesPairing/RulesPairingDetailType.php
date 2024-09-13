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
 * Class representing RulesPairingDetailType.
 *
 * XSD Type: rulesPairingDetailType
 */
class RulesPairingDetailType
{
    /**
     * @var \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    private array $rulesPairingItem = [
    ];

    /**
     * Adds as rulesPairingItem.
     *
     * @return self
     */
    public function addToRulesPairingItem(\Pohoda\RulesPairing\RulesPairingItemType $rulesPairingItem)
    {
        $this->rulesPairingItem[] = $rulesPairingItem;

        return $this;
    }

    /**
     * isset rulesPairingItem.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRulesPairingItem($index)
    {
        return isset($this->rulesPairingItem[$index]);
    }

    /**
     * unset rulesPairingItem.
     *
     * @param int|string $index
     */
    public function unsetRulesPairingItem($index): void
    {
        unset($this->rulesPairingItem[$index]);
    }

    /**
     * Gets as rulesPairingItem.
     *
     * @return \Pohoda\RulesPairing\RulesPairingItemType[]
     */
    public function getRulesPairingItem()
    {
        return $this->rulesPairingItem;
    }

    /**
     * Sets a new rulesPairingItem.
     *
     * @param \Pohoda\RulesPairing\RulesPairingItemType[] $rulesPairingItem
     *
     * @return self
     */
    public function setRulesPairingItem(array $rulesPairingItem)
    {
        $this->rulesPairingItem = $rulesPairingItem;

        return $this;
    }
}
