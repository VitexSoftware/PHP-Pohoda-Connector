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

namespace Pohoda\Type;

/**
 * Class representing SettingsSourceDocumentOrderItemType.
 *
 * XSD Type: settingsSourceDocumentOrderItemType
 */
class SettingsSourceDocumentOrderItemType
{
    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Faktura přes položky dokladu".
     */
    private ?string $linkOrderItemToInvoice = null;

    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Výdejka přes položky dokladu".
     */
    private ?string $linkOrderItemToIssueSlip = null;

    /**
     * Gets as linkOrderItemToInvoice.
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Faktura přes položky dokladu".
     *
     * @return string
     */
    public function getLinkOrderItemToInvoice()
    {
        return $this->linkOrderItemToInvoice;
    }

    /**
     * Sets a new linkOrderItemToInvoice.
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Faktura přes položky dokladu".
     *
     * @param string $linkOrderItemToInvoice
     *
     * @return self
     */
    public function setLinkOrderItemToInvoice($linkOrderItemToInvoice)
    {
        $this->linkOrderItemToInvoice = $linkOrderItemToInvoice;

        return $this;
    }

    /**
     * Gets as linkOrderItemToIssueSlip.
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Výdejka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkOrderItemToIssueSlip()
    {
        return $this->linkOrderItemToIssueSlip;
    }

    /**
     * Sets a new linkOrderItemToIssueSlip.
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Výdejka přes položky dokladu".
     *
     * @param string $linkOrderItemToIssueSlip
     *
     * @return self
     */
    public function setLinkOrderItemToIssueSlip($linkOrderItemToIssueSlip)
    {
        $this->linkOrderItemToIssueSlip = $linkOrderItemToIssueSlip;

        return $this;
    }
}
