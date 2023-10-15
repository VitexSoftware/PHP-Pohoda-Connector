<?php

namespace Pohoda\Order;

/**
 * Class representing OrderType
 *
 *
 * XSD Type: orderType
 */
class OrderType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @var \Pohoda\Type\LinksType $links
     */
    private $links = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\Order\ActionTypeType $actionType
     */
    private $actionType = null;

    /**
     * @var \Pohoda\Order\OrderHeaderType $orderHeader
     */
    private $orderHeader = null;

    /**
     * @var \Pohoda\Order\OrderDetailType $orderDetail
     */
    private $orderDetail = null;

    /**
     * @var \Pohoda\Order\OrderSummaryType $orderSummary
     */
    private $orderSummary = null;

    /**
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @var \Pohoda\Type\LinksType $linkedDocuments
     */
    private $linkedDocuments = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[] $print
     */
    private $print = null;

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
     * Gets as links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Sets a new links
     *
     * Pomocí tohoto bloku lze vytvořit nový doklad z jiného dokladu. Vloží se celý doklad.
     *  Vložený doklad lze upravit pomocí jednotlivých elementů u dokladu.
     *  Povolené jsou vazby z agendy:
     *  - Vydané nabídky (do agendy Přijaté objednávky)
     *
     * @param \Pohoda\Type\LinksType $links
     * @return self
     */
    public function setLinks(\Pohoda\Type\LinksType $links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets as actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\Order\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\Order\ActionTypeType $actionType
     * @return self
     */
    public function setActionType(\Pohoda\Order\ActionTypeType $actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as orderHeader
     *
     * @return \Pohoda\Order\OrderHeaderType
     */
    public function getOrderHeader()
    {
        return $this->orderHeader;
    }

    /**
     * Sets a new orderHeader
     *
     * @param \Pohoda\Order\OrderHeaderType $orderHeader
     * @return self
     */
    public function setOrderHeader(\Pohoda\Order\OrderHeaderType $orderHeader)
    {
        $this->orderHeader = $orderHeader;
        return $this;
    }

    /**
     * Gets as orderDetail
     *
     * @return \Pohoda\Order\OrderDetailType
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * Sets a new orderDetail
     *
     * @param \Pohoda\Order\OrderDetailType $orderDetail
     * @return self
     */
    public function setOrderDetail(\Pohoda\Order\OrderDetailType $orderDetail)
    {
        $this->orderDetail = $orderDetail;
        return $this;
    }

    /**
     * Gets as orderSummary
     *
     * @return \Pohoda\Order\OrderSummaryType
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    /**
     * Sets a new orderSummary
     *
     * @param \Pohoda\Order\OrderSummaryType $orderSummary
     * @return self
     */
    public function setOrderSummary(\Pohoda\Order\OrderSummaryType $orderSummary)
    {
        $this->orderSummary = $orderSummary;
        return $this;
    }

    /**
     * Gets as linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @return \Pohoda\Type\LinksType
     */
    public function getLinkedDocuments()
    {
        return $this->linkedDocuments;
    }

    /**
     * Sets a new linkedDocuments
     *
     * Vazby na doklad. Informace o vazbách dokladu na jiné doklady (pouze pro export).
     *
     * @param \Pohoda\Type\LinksType $linkedDocuments
     * @return self
     */
    public function setLinkedDocuments(\Pohoda\Type\LinksType $linkedDocuments)
    {
        $this->linkedDocuments = $linkedDocuments;
        return $this;
    }

    /**
     * Adds as printerSettings
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     * @param \Pohoda\Print\PrinterSettingsType $printerSettings
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;
        return $this;
    }

    /**
     * isset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrint($index)
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     * @return self
     */
    public function setPrint(array $print)
    {
        $this->print = $print;
        return $this;
    }
}
