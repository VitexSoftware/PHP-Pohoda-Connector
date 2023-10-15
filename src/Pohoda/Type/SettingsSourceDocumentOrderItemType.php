<?php

namespace Pohoda\Type;

/**
 * Class representing SettingsSourceDocumentOrderItemType
 *
 *
 * XSD Type: settingsSourceDocumentOrderItemType
 */
class SettingsSourceDocumentOrderItemType
{
    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Faktura přes položky dokladu".
     *
     * @var string $linkOrderItemToInvoice
     */
    private $linkOrderItemToInvoice = null;

    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Výdejka přes položky dokladu".
     *
     * @var string $linkOrderItemToIssueSlip
     */
    private $linkOrderItemToIssueSlip = null;

    /**
     * Gets as linkOrderItemToInvoice
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
     * Sets a new linkOrderItemToInvoice
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Faktura přes položky dokladu".
     *
     * @param string $linkOrderItemToInvoice
     * @return self
     */
    public function setLinkOrderItemToInvoice($linkOrderItemToInvoice)
    {
        $this->linkOrderItemToInvoice = $linkOrderItemToInvoice;
        return $this;
    }

    /**
     * Gets as linkOrderItemToIssueSlip
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
     * Sets a new linkOrderItemToIssueSlip
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Objednávka -> Výdejka přes položky dokladu".
     *
     * @param string $linkOrderItemToIssueSlip
     * @return self
     */
    public function setLinkOrderItemToIssueSlip($linkOrderItemToIssueSlip)
    {
        $this->linkOrderItemToIssueSlip = $linkOrderItemToIssueSlip;
        return $this;
    }
}

