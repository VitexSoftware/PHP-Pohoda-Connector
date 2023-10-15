<?php

namespace Pohoda\List;

/**
 * Class representing ItemSellingPriceType
 *
 *
 * XSD Type: itemSellingPriceType
 */
class ItemSellingPriceType
{
    /**
     * ID prodejní ceny, na tuto hodnotu se lze odkazovat v seznamu prodejních cen.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @var \Pohoda\Type\ExtIdType $extId
     */
    private $extId = null;

    /**
     * Název prodejní ceny.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Popis prodejní ceny.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Platnost slevy resp. vedlejší ceny může být trvalá nebo časově omezená; v tom případě uveďte data platnosti do polí od a do.
     *  Platnost ceny lze také pozastavit, takže se nenabízí při výdeji.
     *
     * @var string $discountValidity
     */
    private $discountValidity = null;

    /**
     * Počáteční datum platnosti časově omezené prodejní ceny.
     *
     * @var \DateTime $dateFrom
     */
    private $dateFrom = null;

    /**
     * Koncové datum platnosti časově omezené prodejní ceny.
     *
     * @var \DateTime $dateTill
     */
    private $dateTill = null;

    /**
     * Typ ceny.
     *
     * @var string $priceType
     */
    private $priceType = null;

    /**
     * Marže %. Uveďte přirážku k nákupní ceně v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @var float $margin
     */
    private $margin = null;

    /**
     * Rabat %. Uveďte slevu v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @var float $rebate
     */
    private $rebate = null;

    /**
     * Sleva v procentech sloužící pro výpočet slevy ze základní prodejní ceny skladové zásoby.
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Typ výpočtu. Způsob výpočtu ceny (s daní / bez daně) s ohledem na DPH.
     *
     * @var string $calculation
     */
    private $calculation = null;

    /**
     * Zaokrouhlení. Počet desetinných míst zaokrouhlení (v Kč) při výpočtu ceny.
     *
     * @var string $rounding
     */
    private $rounding = null;

    /**
     * Měna.
     *
     * @var \Pohoda\Type\RefType $currency
     */
    private $currency = null;

    /**
     * Kurs.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * Gets as id
     *
     * ID prodejní ceny, na tuto hodnotu se lze odkazovat v seznamu prodejních cen.
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
     * ID prodejní ceny, na tuto hodnotu se lze odkazovat v seznamu prodejních cen.
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
     * Gets as extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @param \Pohoda\Type\ExtIdType $extId
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;
        return $this;
    }

    /**
     * Gets as code
     *
     * Název prodejní ceny.
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
     * Název prodejní ceny.
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
     * Gets as name
     *
     * Popis prodejní ceny.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Popis prodejní ceny.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as discountValidity
     *
     * Platnost slevy resp. vedlejší ceny může být trvalá nebo časově omezená; v tom případě uveďte data platnosti do polí od a do.
     *  Platnost ceny lze také pozastavit, takže se nenabízí při výdeji.
     *
     * @return string
     */
    public function getDiscountValidity()
    {
        return $this->discountValidity;
    }

    /**
     * Sets a new discountValidity
     *
     * Platnost slevy resp. vedlejší ceny může být trvalá nebo časově omezená; v tom případě uveďte data platnosti do polí od a do.
     *  Platnost ceny lze také pozastavit, takže se nenabízí při výdeji.
     *
     * @param string $discountValidity
     * @return self
     */
    public function setDiscountValidity($discountValidity)
    {
        $this->discountValidity = $discountValidity;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * Počáteční datum platnosti časově omezené prodejní ceny.
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * Počáteční datum platnosti časově omezené prodejní ceny.
     *
     * @param \DateTime $dateFrom
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTill
     *
     * Koncové datum platnosti časově omezené prodejní ceny.
     *
     * @return \DateTime
     */
    public function getDateTill()
    {
        return $this->dateTill;
    }

    /**
     * Sets a new dateTill
     *
     * Koncové datum platnosti časově omezené prodejní ceny.
     *
     * @param \DateTime $dateTill
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * Typ ceny.
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * Typ ceny.
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as margin
     *
     * Marže %. Uveďte přirážku k nákupní ceně v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @return float
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * Sets a new margin
     *
     * Marže %. Uveďte přirážku k nákupní ceně v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @param float $margin
     * @return self
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Gets as rebate
     *
     * Rabat %. Uveďte slevu v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @return float
     */
    public function getRebate()
    {
        return $this->rebate;
    }

    /**
     * Sets a new rebate
     *
     * Rabat %. Uveďte slevu v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @param float $rebate
     * @return self
     */
    public function setRebate($rebate)
    {
        $this->rebate = $rebate;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * Sleva v procentech sloužící pro výpočet slevy ze základní prodejní ceny skladové zásoby.
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
     * Sleva v procentech sloužící pro výpočet slevy ze základní prodejní ceny skladové zásoby.
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
     * Gets as calculation
     *
     * Typ výpočtu. Způsob výpočtu ceny (s daní / bez daně) s ohledem na DPH.
     *
     * @return string
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * Typ výpočtu. Způsob výpočtu ceny (s daní / bez daně) s ohledem na DPH.
     *
     * @param string $calculation
     * @return self
     */
    public function setCalculation($calculation)
    {
        $this->calculation = $calculation;
        return $this;
    }

    /**
     * Gets as rounding
     *
     * Zaokrouhlení. Počet desetinných míst zaokrouhlení (v Kč) při výpočtu ceny.
     *
     * @return string
     */
    public function getRounding()
    {
        return $this->rounding;
    }

    /**
     * Sets a new rounding
     *
     * Zaokrouhlení. Počet desetinných míst zaokrouhlení (v Kč) při výpočtu ceny.
     *
     * @param string $rounding
     * @return self
     */
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;
        return $this;
    }

    /**
     * Gets as currency
     *
     * Měna.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * Měna.
     *
     * @param \Pohoda\Type\RefType $currency
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as rate
     *
     * Kurs.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Kurs.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }
}
