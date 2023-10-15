<?php

namespace Pohoda\Movement;

/**
 * Class representing MovementHeaderType
 *
 * Pohyby.
 * XSD Type: movementHeaderType
 */
class MovementHeaderType
{
    /**
     * ID záznamu.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Označení.
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Agenda.
     *
     * @var string $agenda
     */
    private $agenda = null;

    /**
     * Typ zásoby.
     *
     * @var string $stockType
     */
    private $stockType = null;

    /**
     * Cenová skupina. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var \Pohoda\Type\RefType $typePrice
     */
    private $typePrice = null;

    /**
     * Odkaz na skladovou položku.
     *
     * @var \Pohoda\Type\StockItemMovementType $stockItem
     */
    private $stockItem = null;

    /**
     * Měrná jednotka.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Datum pohybu.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Typ pohybu.
     *
     * @var string $movementType
     */
    private $movementType = null;

    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Částka.
     *
     * @var float $unitPrice
     */
    private $unitPrice = null;

    /**
     * Celkem.
     *
     * @var float $price
     */
    private $price = null;

    /**
     * Vážená nákupní cena.
     *
     * @var float $weightedPurchasePrice
     */
    private $weightedPurchasePrice = null;

    /**
     * Ocenění.
     *
     * @var float $valuation
     */
    private $valuation = null;

    /**
     * Zisk/m. j.
     *
     * @var float $profitUnit
     */
    private $profitUnit = null;

    /**
     * Zisk.
     *
     * @var float $profit
     */
    private $profit = null;

    /**
     * Stav zásoby.
     *
     * @var float $count
     */
    private $count = null;

    /**
     * Číslo dokladu.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Adresa a dodací adresa.
     *
     * @var \Pohoda\Type\AddressType $address
     */
    private $address = null;

    /**
     * Středisko
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Činnost
     *
     * @var \Pohoda\Type\RefType $activity
     */
    private $activity = null;

    /**
     * Zakázka
     *
     * @var \Pohoda\Type\RefType $contract
     */
    private $contract = null;

    /**
     * Evidenční číslo.
     *
     * @var string $regNumber
     */
    private $regNumber = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[] $labels
     */
    private $labels = null;

    /**
     * Gets as id
     *
     * ID záznamu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID záznamu.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as markRecord
     *
     * Označení.
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord
     *
     * Označení.
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }

    /**
     * Gets as agenda
     *
     * Agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda
     *
     * Agenda.
     *
     * @param string $agenda
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;
        return $this;
    }

    /**
     * Gets as stockType
     *
     * Typ zásoby.
     *
     * @return string
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * Sets a new stockType
     *
     * Typ zásoby.
     *
     * @param string $stockType
     * @return self
     */
    public function setStockType($stockType)
    {
        $this->stockType = $stockType;
        return $this;
    }

    /**
     * Gets as typePrice
     *
     * Cenová skupina. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getTypePrice()
    {
        return $this->typePrice;
    }

    /**
     * Sets a new typePrice
     *
     * Cenová skupina. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param \Pohoda\Type\RefType $typePrice
     * @return self
     */
    public function setTypePrice(?\Pohoda\Type\RefType $typePrice = null)
    {
        $this->typePrice = $typePrice;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @return \Pohoda\Type\StockItemMovementType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Odkaz na skladovou položku.
     *
     * @param \Pohoda\Type\StockItemMovementType $stockItem
     * @return self
     */
    public function setStockItem(\Pohoda\Type\StockItemMovementType $stockItem)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Měrná jednotka.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Měrná jednotka.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as date
     *
     * Datum pohybu.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Datum pohybu.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as movementType
     *
     * Typ pohybu.
     *
     * @return string
     */
    public function getMovementType()
    {
        return $this->movementType;
    }

    /**
     * Sets a new movementType
     *
     * Typ pohybu.
     *
     * @param string $movementType
     * @return self
     */
    public function setMovementType($movementType)
    {
        $this->movementType = $movementType;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Množství.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Množství.
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * Částka.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * Částka.
     *
     * @param float $unitPrice
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as price
     *
     * Celkem.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Celkem.
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as weightedPurchasePrice
     *
     * Vážená nákupní cena.
     *
     * @return float
     */
    public function getWeightedPurchasePrice()
    {
        return $this->weightedPurchasePrice;
    }

    /**
     * Sets a new weightedPurchasePrice
     *
     * Vážená nákupní cena.
     *
     * @param float $weightedPurchasePrice
     * @return self
     */
    public function setWeightedPurchasePrice($weightedPurchasePrice)
    {
        $this->weightedPurchasePrice = $weightedPurchasePrice;
        return $this;
    }

    /**
     * Gets as valuation
     *
     * Ocenění.
     *
     * @return float
     */
    public function getValuation()
    {
        return $this->valuation;
    }

    /**
     * Sets a new valuation
     *
     * Ocenění.
     *
     * @param float $valuation
     * @return self
     */
    public function setValuation($valuation)
    {
        $this->valuation = $valuation;
        return $this;
    }

    /**
     * Gets as profitUnit
     *
     * Zisk/m. j.
     *
     * @return float
     */
    public function getProfitUnit()
    {
        return $this->profitUnit;
    }

    /**
     * Sets a new profitUnit
     *
     * Zisk/m. j.
     *
     * @param float $profitUnit
     * @return self
     */
    public function setProfitUnit($profitUnit)
    {
        $this->profitUnit = $profitUnit;
        return $this;
    }

    /**
     * Gets as profit
     *
     * Zisk.
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->profit;
    }

    /**
     * Sets a new profit
     *
     * Zisk.
     *
     * @param float $profit
     * @return self
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;
        return $this;
    }

    /**
     * Gets as count
     *
     * Stav zásoby.
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Stav zásoby.
     *
     * @param float $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as number
     *
     * Číslo dokladu.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Číslo dokladu.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as address
     *
     * Adresa a dodací adresa.
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Adresa a dodací adresa.
     *
     * @param \Pohoda\Type\AddressType $address
     * @return self
     */
    public function setAddress(?\Pohoda\Type\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * Středisko
     *
     * @param \Pohoda\Type\RefType $centre
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Gets as activity
     *
     * Činnost
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Činnost
     *
     * @param \Pohoda\Type\RefType $activity
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * Zakázka
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * Zakázka
     *
     * @param \Pohoda\Type\RefType $contract
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as regNumber
     *
     * Evidenční číslo.
     *
     * @return string
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Sets a new regNumber
     *
     * Evidenční číslo.
     *
     * @param string $regNumber
     * @return self
     */
    public function setRegNumber($regNumber)
    {
        $this->regNumber = $regNumber;
        return $this;
    }

    /**
     * Adds as label
     *
     * Štítky záznamu.
     *
     * @return self
     * @param \Pohoda\Type\LabelType $label
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * isset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabels($index)
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     * @return self
     */
    public function setLabels(array $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
