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

namespace Pohoda\Supplier;

/**
 * Class representing SupplierItemType.
 *
 * XSD Type: supplierItemType
 */
class SupplierItemType
{
    private ?bool $default = null;
    private ?\Pohoda\Type\ActionTypeItemType $actionType = null;
    private ?int $id = null;
    private ?\Pohoda\Type\RefTypeSupplierAddressType $refAd = null;
    private ?string $orderCode = null;
    private ?string $orderName = null;
    private ?float $purchasingPrice = null;
    private ?\Pohoda\Type\RefType $currency = null;
    private ?float $rate = null;
    private ?string $payVAT = null;
    private ?string $ean = null;
    private ?string $printEAN = null;
    private ?string $unitEAN = null;
    private ?float $unitCoefEAN = null;
    private ?int $deliveryTime = null;
    private ?\Pohoda\Type\RefType $deliveryPeriod = null;
    private ?float $minQuantity = null;
    private ?string $unit = null;
    private ?string $note = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as default.
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default.
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Gets as actionType.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as refAd.
     *
     * @return \Pohoda\Type\RefTypeSupplierAddressType
     */
    public function getRefAd()
    {
        return $this->refAd;
    }

    /**
     * Sets a new refAd.
     *
     * @return self
     */
    public function setRefAd(?\Pohoda\Type\RefTypeSupplierAddressType $refAd = null)
    {
        $this->refAd = $refAd;

        return $this;
    }

    /**
     * Gets as orderCode.
     *
     * @return string
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * Sets a new orderCode.
     *
     * @param string $orderCode
     *
     * @return self
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Gets as orderName.
     *
     * @return string
     */
    public function getOrderName()
    {
        return $this->orderName;
    }

    /**
     * Sets a new orderName.
     *
     * @param string $orderName
     *
     * @return self
     */
    public function setOrderName($orderName)
    {
        $this->orderName = $orderName;

        return $this;
    }

    /**
     * Gets as purchasingPrice.
     *
     * @return float
     */
    public function getPurchasingPrice()
    {
        return $this->purchasingPrice;
    }

    /**
     * Sets a new purchasingPrice.
     *
     * @param float $purchasingPrice
     *
     * @return self
     */
    public function setPurchasingPrice($purchasingPrice)
    {
        $this->purchasingPrice = $purchasingPrice;

        return $this;
    }

    /**
     * Gets as currency.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency.
     *
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as rate.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate.
     *
     * @param float $rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as payVAT.
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT.
     *
     * @param string $payVAT
     *
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;

        return $this;
    }

    /**
     * Gets as ean.
     *
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * Sets a new ean.
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * Gets as printEAN.
     *
     * @return string
     */
    public function getPrintEAN()
    {
        return $this->printEAN;
    }

    /**
     * Sets a new printEAN.
     *
     * @param string $printEAN
     *
     * @return self
     */
    public function setPrintEAN($printEAN)
    {
        $this->printEAN = $printEAN;

        return $this;
    }

    /**
     * Gets as unitEAN.
     *
     * @return string
     */
    public function getUnitEAN()
    {
        return $this->unitEAN;
    }

    /**
     * Sets a new unitEAN.
     *
     * @param string $unitEAN
     *
     * @return self
     */
    public function setUnitEAN($unitEAN)
    {
        $this->unitEAN = $unitEAN;

        return $this;
    }

    /**
     * Gets as unitCoefEAN.
     *
     * @return float
     */
    public function getUnitCoefEAN()
    {
        return $this->unitCoefEAN;
    }

    /**
     * Sets a new unitCoefEAN.
     *
     * @param float $unitCoefEAN
     *
     * @return self
     */
    public function setUnitCoefEAN($unitCoefEAN)
    {
        $this->unitCoefEAN = $unitCoefEAN;

        return $this;
    }

    /**
     * Gets as deliveryTime.
     *
     * @return int
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * Sets a new deliveryTime.
     *
     * @param int $deliveryTime
     *
     * @return self
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Gets as deliveryPeriod.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getDeliveryPeriod()
    {
        return $this->deliveryPeriod;
    }

    /**
     * Sets a new deliveryPeriod.
     *
     * @return self
     */
    public function setDeliveryPeriod(?\Pohoda\Type\RefType $deliveryPeriod = null)
    {
        $this->deliveryPeriod = $deliveryPeriod;

        return $this;
    }

    /**
     * Gets as minQuantity.
     *
     * @return float
     */
    public function getMinQuantity()
    {
        return $this->minQuantity;
    }

    /**
     * Sets a new minQuantity.
     *
     * @param float $minQuantity
     *
     * @return self
     */
    public function setMinQuantity($minQuantity)
    {
        $this->minQuantity = $minQuantity;

        return $this;
    }

    /**
     * Gets as unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Gets as note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Adds as parameter.
     *
     * Volitelný parametr.
     *
     * @return self
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;

        return $this;
    }

    /**
     * isset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters.
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     */
    public function unsetParameters($index): void
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters.
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
