<?php

namespace Pohoda\Type;

/**
 * Class representing SettingsSourceDocumentType
 *
 *
 * XSD Type: settingsSourceDocumentType
 */
class SettingsSourceDocumentType
{
    /**
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     *
     * @var string $linkOrderToAdvanceInvoice
     */
    private $linkOrderToAdvanceInvoice = null;

    /**
     * Gets as linkOrderToAdvanceInvoice
     *
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     *
     * @return string
     */
    public function getLinkOrderToAdvanceInvoice()
    {
        return $this->linkOrderToAdvanceInvoice;
    }

    /**
     * Sets a new linkOrderToAdvanceInvoice
     *
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     *
     * @param string $linkOrderToAdvanceInvoice
     * @return self
     */
    public function setLinkOrderToAdvanceInvoice($linkOrderToAdvanceInvoice)
    {
        $this->linkOrderToAdvanceInvoice = $linkOrderToAdvanceInvoice;
        return $this;
    }
}
