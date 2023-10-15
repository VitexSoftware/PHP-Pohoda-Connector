<?php

namespace Pohoda\ProductRequirement;

/**
 * Class representing ProductRequirementType
 *
 *
 * XSD Type: productRequirementType
 */
class ProductRequirementType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementHeaderType $productRequirementHeader
     */
    private $productRequirementHeader = null;

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementItemType[] $productRequirementDetail
     */
    private $productRequirementDetail = null;

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
     * Gets as productRequirementHeader
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementHeaderType
     */
    public function getProductRequirementHeader()
    {
        return $this->productRequirementHeader;
    }

    /**
     * Sets a new productRequirementHeader
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementHeaderType $productRequirementHeader
     * @return self
     */
    public function setProductRequirementHeader(?\Pohoda\ProductRequirement\ProductRequirementHeaderType $productRequirementHeader = null)
    {
        $this->productRequirementHeader = $productRequirementHeader;
        return $this;
    }

    /**
     * Adds as productRequirementItem
     *
     * @return self
     * @param \Pohoda\ProductRequirement\ProductRequirementItemType $productRequirementItem
     */
    public function addToProductRequirementDetail(\Pohoda\ProductRequirement\ProductRequirementItemType $productRequirementItem)
    {
        $this->productRequirementDetail[] = $productRequirementItem;
        return $this;
    }

    /**
     * isset productRequirementDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductRequirementDetail($index)
    {
        return isset($this->productRequirementDetail[$index]);
    }

    /**
     * unset productRequirementDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductRequirementDetail($index)
    {
        unset($this->productRequirementDetail[$index]);
    }

    /**
     * Gets as productRequirementDetail
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementItemType[]
     */
    public function getProductRequirementDetail()
    {
        return $this->productRequirementDetail;
    }

    /**
     * Sets a new productRequirementDetail
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementItemType[] $productRequirementDetail
     * @return self
     */
    public function setProductRequirementDetail(array $productRequirementDetail = null)
    {
        $this->productRequirementDetail = $productRequirementDetail;
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
    public function setPrint(array $print = null)
    {
        $this->print = $print;
        return $this;
    }
}
