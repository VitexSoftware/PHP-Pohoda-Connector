<?php

namespace Pohoda\Type;

/**
 * Class representing SettingsSourceDocumentItemType
 *
 *
 * XSD Type: settingsSourceDocumentItemType
 */
class SettingsSourceDocumentItemType
{
    /**
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Vydaná faktura přes položky dokladu".
     *
     * @var string $linkIssueSlipItemToInvoice
     */
    private $linkIssueSlipItemToInvoice = null;

    /**
     * Nastavení příznaku "Vyřízeno" na vydané nabídce při vazbě: "Vydaná nabídka -> Přijatá objednávka přes položky dokladu".
     *
     * @var string $linkIssueOfferItemToReceivedOrder
     */
    private $linkIssueOfferItemToReceivedOrder = null;

    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Převodka přes položky dokladu". V Globálním nastavení musí být povoleno "Přijatou objednávku přenosem do převodky vyřídit".
     *
     * @var string $linkReceivedOrderItemToTransfer
     */
    private $linkReceivedOrderItemToTransfer = null;

    /**
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Prodejka přes položky dokladu".
     *
     * @var string $linkReceivedOrderItemToSaleVoucher
     */
    private $linkReceivedOrderItemToSaleVoucher = null;

    /**
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Prodejka přes položky dokladu".
     *
     * @var string $linkIssueSlipItemToSaleVoucher
     */
    private $linkIssueSlipItemToSaleVoucher = null;

    /**
     * Nastavení příznaku "Vyřízeno" na vydané faktuře při vazbě: "Vydané faktura -> výdejka přes položky dokladu".
     *
     * @var string $linkIssuedInvoiceToIssueSlip
     */
    private $linkIssuedInvoiceToIssueSlip = null;

    /**
     * Nastavení příznaku "Vyřízeno" na vydané objednávce při vazbě: "Vydaná objednávka -> příjemka přes položky dokladu".
     *
     * @var string $linkIssuedOrderToReceiptVoucher
     */
    private $linkIssuedOrderToReceiptVoucher = null;

    /**
     * Gets as linkIssueSlipItemToInvoice
     *
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Vydaná faktura přes položky dokladu".
     *
     * @return string
     */
    public function getLinkIssueSlipItemToInvoice()
    {
        return $this->linkIssueSlipItemToInvoice;
    }

    /**
     * Sets a new linkIssueSlipItemToInvoice
     *
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Vydaná faktura přes položky dokladu".
     *
     * @param string $linkIssueSlipItemToInvoice
     * @return self
     */
    public function setLinkIssueSlipItemToInvoice($linkIssueSlipItemToInvoice)
    {
        $this->linkIssueSlipItemToInvoice = $linkIssueSlipItemToInvoice;
        return $this;
    }

    /**
     * Gets as linkIssueOfferItemToReceivedOrder
     *
     * Nastavení příznaku "Vyřízeno" na vydané nabídce při vazbě: "Vydaná nabídka -> Přijatá objednávka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkIssueOfferItemToReceivedOrder()
    {
        return $this->linkIssueOfferItemToReceivedOrder;
    }

    /**
     * Sets a new linkIssueOfferItemToReceivedOrder
     *
     * Nastavení příznaku "Vyřízeno" na vydané nabídce při vazbě: "Vydaná nabídka -> Přijatá objednávka přes položky dokladu".
     *
     * @param string $linkIssueOfferItemToReceivedOrder
     * @return self
     */
    public function setLinkIssueOfferItemToReceivedOrder($linkIssueOfferItemToReceivedOrder)
    {
        $this->linkIssueOfferItemToReceivedOrder = $linkIssueOfferItemToReceivedOrder;
        return $this;
    }

    /**
     * Gets as linkReceivedOrderItemToTransfer
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Převodka přes položky dokladu". V Globálním nastavení musí být povoleno "Přijatou objednávku přenosem do převodky vyřídit".
     *
     * @return string
     */
    public function getLinkReceivedOrderItemToTransfer()
    {
        return $this->linkReceivedOrderItemToTransfer;
    }

    /**
     * Sets a new linkReceivedOrderItemToTransfer
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Převodka přes položky dokladu". V Globálním nastavení musí být povoleno "Přijatou objednávku přenosem do převodky vyřídit".
     *
     * @param string $linkReceivedOrderItemToTransfer
     * @return self
     */
    public function setLinkReceivedOrderItemToTransfer($linkReceivedOrderItemToTransfer)
    {
        $this->linkReceivedOrderItemToTransfer = $linkReceivedOrderItemToTransfer;
        return $this;
    }

    /**
     * Gets as linkReceivedOrderItemToSaleVoucher
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Prodejka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkReceivedOrderItemToSaleVoucher()
    {
        return $this->linkReceivedOrderItemToSaleVoucher;
    }

    /**
     * Sets a new linkReceivedOrderItemToSaleVoucher
     *
     * Nastavení příznaku "Vyřízeno" na přijaté objednávce při vazbě: "Přijatá objednávka -> Prodejka přes položky dokladu".
     *
     * @param string $linkReceivedOrderItemToSaleVoucher
     * @return self
     */
    public function setLinkReceivedOrderItemToSaleVoucher($linkReceivedOrderItemToSaleVoucher)
    {
        $this->linkReceivedOrderItemToSaleVoucher = $linkReceivedOrderItemToSaleVoucher;
        return $this;
    }

    /**
     * Gets as linkIssueSlipItemToSaleVoucher
     *
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Prodejka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkIssueSlipItemToSaleVoucher()
    {
        return $this->linkIssueSlipItemToSaleVoucher;
    }

    /**
     * Sets a new linkIssueSlipItemToSaleVoucher
     *
     * Nastavení příznaku "Vyřízeno" na výdejce při vazbě: "Výdejka -> Prodejka přes položky dokladu".
     *
     * @param string $linkIssueSlipItemToSaleVoucher
     * @return self
     */
    public function setLinkIssueSlipItemToSaleVoucher($linkIssueSlipItemToSaleVoucher)
    {
        $this->linkIssueSlipItemToSaleVoucher = $linkIssueSlipItemToSaleVoucher;
        return $this;
    }

    /**
     * Gets as linkIssuedInvoiceToIssueSlip
     *
     * Nastavení příznaku "Vyřízeno" na vydané faktuře při vazbě: "Vydané faktura -> výdejka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkIssuedInvoiceToIssueSlip()
    {
        return $this->linkIssuedInvoiceToIssueSlip;
    }

    /**
     * Sets a new linkIssuedInvoiceToIssueSlip
     *
     * Nastavení příznaku "Vyřízeno" na vydané faktuře při vazbě: "Vydané faktura -> výdejka přes položky dokladu".
     *
     * @param string $linkIssuedInvoiceToIssueSlip
     * @return self
     */
    public function setLinkIssuedInvoiceToIssueSlip($linkIssuedInvoiceToIssueSlip)
    {
        $this->linkIssuedInvoiceToIssueSlip = $linkIssuedInvoiceToIssueSlip;
        return $this;
    }

    /**
     * Gets as linkIssuedOrderToReceiptVoucher
     *
     * Nastavení příznaku "Vyřízeno" na vydané objednávce při vazbě: "Vydaná objednávka -> příjemka přes položky dokladu".
     *
     * @return string
     */
    public function getLinkIssuedOrderToReceiptVoucher()
    {
        return $this->linkIssuedOrderToReceiptVoucher;
    }

    /**
     * Sets a new linkIssuedOrderToReceiptVoucher
     *
     * Nastavení příznaku "Vyřízeno" na vydané objednávce při vazbě: "Vydaná objednávka -> příjemka přes položky dokladu".
     *
     * @param string $linkIssuedOrderToReceiptVoucher
     * @return self
     */
    public function setLinkIssuedOrderToReceiptVoucher($linkIssuedOrderToReceiptVoucher)
    {
        $this->linkIssuedOrderToReceiptVoucher = $linkIssuedOrderToReceiptVoucher;
        return $this;
    }
}

