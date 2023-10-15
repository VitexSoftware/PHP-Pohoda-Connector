<?php

namespace Pohoda\Service;

/**
 * Class representing SubjectType
 *
 *
 * XSD Type: subjectType
 */
class SubjectType
{
    /**
     * ID položky dokladu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Text položky.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Množství.
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Měrná jednotka.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Koeficient.
     *
     * @var float $coefficient
     */
    private $coefficient = null;

    /**
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     *
     * @var string $payVAT
     */
    private $payVAT = null;

    /**
     * Sazba DPH.
     *
     * @var \Pohoda\Type\VatRateType $rateVAT
     */
    private $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @var float $percentVAT
     */
    private $percentVAT = null;

    /**
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Kč.
     *
     * @var \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Cizí měna.
     *
     * @var \Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Kód.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Délka záruky.
     *
     * @var int $guarantee
     */
    private $guarantee = null;

    /**
     * Typ záruky.
     *
     * @var string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * Popis závady.
     *
     * @var string $defectDescription
     */
    private $defectDescription = null;

    /**
     * Popis stavu při převzetí.
     *
     * @var string $statusDeliveryDescription
     */
    private $statusDeliveryDescription = null;

    /**
     * Navrhovaný způsob řešení.
     *
     * @var string $solutionDescription
     */
    private $solutionDescription = null;

    /**
     * Příslušenství přiložené k předmětu servisu.
     *
     * @var string $accessory
     */
    private $accessory = null;

    /**
     * Informace zda se mají vracet vadné díly.
     *
     * @var \Pohoda\Type\RefType $returnParts
     */
    private $returnParts = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Datum expirace.
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as id
     *
     * ID položky dokladu (jen pro export).
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
     * ID položky dokladu (jen pro export).
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
     * Gets as text
     *
     * Text položky.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text položky.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
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
     * Gets as coefficient
     *
     * Koeficient.
     *
     * @return float
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }

    /**
     * Sets a new coefficient
     *
     * Koeficient.
     *
     * @param float $coefficient
     * @return self
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Gets as payVAT
     *
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT
     *
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     *
     * @param string $payVAT
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;
        return $this;
    }

    /**
     * Gets as rateVAT
     *
     * Sazba DPH.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getRateVAT()
    {
        return $this->rateVAT;
    }

    /**
     * Sets a new rateVAT
     *
     * Sazba DPH.
     *
     * @param \Pohoda\Type\VatRateType $rateVAT
     * @return self
     */
    public function setRateVAT(?\Pohoda\Type\VatRateType $rateVAT = null)
    {
        $this->rateVAT = $rateVAT;
        return $this;
    }

    /**
     * Gets as percentVAT
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @return float
     */
    public function getPercentVAT()
    {
        return $this->percentVAT;
    }

    /**
     * Sets a new percentVAT
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @param float $percentVAT
     * @return self
     */
    public function setPercentVAT($percentVAT)
    {
        $this->percentVAT = $percentVAT;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * Gets as homeCurrency
     *
     * Kč.
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Kč.
     *
     * @param \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Cizí měna.
     *
     * @return \Pohoda\Type\TypeCurrencyForeignItemType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Cizí měna.
     *
     * @param \Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as code
     *
     * Kód.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Kód.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as guarantee
     *
     * Délka záruky.
     *
     * @return int
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Délka záruky.
     *
     * @param int $guarantee
     * @return self
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Gets as guaranteeType
     *
     * Typ záruky.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * Typ záruky.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;
        return $this;
    }

    /**
     * Gets as defectDescription
     *
     * Popis závady.
     *
     * @return string
     */
    public function getDefectDescription()
    {
        return $this->defectDescription;
    }

    /**
     * Sets a new defectDescription
     *
     * Popis závady.
     *
     * @param string $defectDescription
     * @return self
     */
    public function setDefectDescription($defectDescription)
    {
        $this->defectDescription = $defectDescription;
        return $this;
    }

    /**
     * Gets as statusDeliveryDescription
     *
     * Popis stavu při převzetí.
     *
     * @return string
     */
    public function getStatusDeliveryDescription()
    {
        return $this->statusDeliveryDescription;
    }

    /**
     * Sets a new statusDeliveryDescription
     *
     * Popis stavu při převzetí.
     *
     * @param string $statusDeliveryDescription
     * @return self
     */
    public function setStatusDeliveryDescription($statusDeliveryDescription)
    {
        $this->statusDeliveryDescription = $statusDeliveryDescription;
        return $this;
    }

    /**
     * Gets as solutionDescription
     *
     * Navrhovaný způsob řešení.
     *
     * @return string
     */
    public function getSolutionDescription()
    {
        return $this->solutionDescription;
    }

    /**
     * Sets a new solutionDescription
     *
     * Navrhovaný způsob řešení.
     *
     * @param string $solutionDescription
     * @return self
     */
    public function setSolutionDescription($solutionDescription)
    {
        $this->solutionDescription = $solutionDescription;
        return $this;
    }

    /**
     * Gets as accessory
     *
     * Příslušenství přiložené k předmětu servisu.
     *
     * @return string
     */
    public function getAccessory()
    {
        return $this->accessory;
    }

    /**
     * Sets a new accessory
     *
     * Příslušenství přiložené k předmětu servisu.
     *
     * @param string $accessory
     * @return self
     */
    public function setAccessory($accessory)
    {
        $this->accessory = $accessory;
        return $this;
    }

    /**
     * Gets as returnParts
     *
     * Informace zda se mají vracet vadné díly.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getReturnParts()
    {
        return $this->returnParts;
    }

    /**
     * Sets a new returnParts
     *
     * Informace zda se mají vracet vadné díly.
     *
     * @param \Pohoda\Type\RefType $returnParts
     * @return self
     */
    public function setReturnParts(?\Pohoda\Type\RefType $returnParts = null)
    {
        $this->returnParts = $returnParts;
        return $this;
    }

    /**
     * Gets as stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return \Pohoda\Type\StockItemType
     */
    public function getStockItem()
    {
        return $this->stockItem;
    }

    /**
     * Sets a new stockItem
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @param \Pohoda\Type\StockItemType $stockItem
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * Datum expirace.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * Datum expirace.
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Volitelný parametr.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
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
     * Sets a new parameters
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
