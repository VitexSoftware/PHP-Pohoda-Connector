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

namespace Pohoda\List;

/**
 * Class representing ItemSellingPriceType.
 *
 * XSD Type: itemSellingPriceType
 */
class ItemSellingPriceType
{
    /**
     * ID prodejní ceny, na tuto hodnotu se lze odkazovat v seznamu prodejních cen.
     */
    private int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Název prodejní ceny.
     */
    private string $code = null;

    /**
     * Popis prodejní ceny.
     */
    private string $name = null;

    /**
     * Platnost slevy resp. vedlejší ceny může být trvalá nebo časově omezená; v tom případě uveďte data platnosti do polí od a do.
     *  Platnost ceny lze také pozastavit, takže se nenabízí při výdeji.
     */
    private string $discountValidity = null;

    /**
     * Počáteční datum platnosti časově omezené prodejní ceny.
     */
    private \DateTime $dateFrom = null;

    /**
     * Koncové datum platnosti časově omezené prodejní ceny.
     */
    private \DateTime $dateTill = null;

    /**
     * Typ ceny.
     */
    private string $priceType = null;

    /**
     * Marže %. Uveďte přirážku k nákupní ceně v procentech v případě, že používáte tento způsob výpočtu.
     */
    private float $margin = null;

    /**
     * Rabat %. Uveďte slevu v procentech v případě, že používáte tento způsob výpočtu.
     */
    private float $rebate = null;

    /**
     * Sleva v procentech sloužící pro výpočet slevy ze základní prodejní ceny skladové zásoby.
     */
    private float $discountPercentage = null;

    /**
     * Typ výpočtu. Způsob výpočtu ceny (s daní / bez daně) s ohledem na DPH.
     */
    private string $calculation = null;

    /**
     * Zaokrouhlení. Počet desetinných míst zaokrouhlení (v Kč) při výpočtu ceny.
     */
    private string $rounding = null;

    /**
     * Měna.
     */
    private \Pohoda\Type\RefType $currency = null;

    /**
     * Kurs.
     */
    private float $rate = null;

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID prodejní ceny, na tuto hodnotu se lze odkazovat v seznamu prodejních cen.
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
     * Gets as extId.
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
     * Sets a new extId.
     *
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as code.
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
     * Sets a new code.
     *
     * Název prodejní ceny.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name.
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
     * Sets a new name.
     *
     * Popis prodejní ceny.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as discountValidity.
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
     * Sets a new discountValidity.
     *
     * Platnost slevy resp. vedlejší ceny může být trvalá nebo časově omezená; v tom případě uveďte data platnosti do polí od a do.
     *  Platnost ceny lze také pozastavit, takže se nenabízí při výdeji.
     *
     * @param string $discountValidity
     *
     * @return self
     */
    public function setDiscountValidity($discountValidity)
    {
        $this->discountValidity = $discountValidity;

        return $this;
    }

    /**
     * Gets as dateFrom.
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
     * Sets a new dateFrom.
     *
     * Počáteční datum platnosti časově omezené prodejní ceny.
     *
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTill.
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
     * Sets a new dateTill.
     *
     * Koncové datum platnosti časově omezené prodejní ceny.
     *
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;

        return $this;
    }

    /**
     * Gets as priceType.
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
     * Sets a new priceType.
     *
     * Typ ceny.
     *
     * @param string $priceType
     *
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;

        return $this;
    }

    /**
     * Gets as margin.
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
     * Sets a new margin.
     *
     * Marže %. Uveďte přirážku k nákupní ceně v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @param float $margin
     *
     * @return self
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * Gets as rebate.
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
     * Sets a new rebate.
     *
     * Rabat %. Uveďte slevu v procentech v případě, že používáte tento způsob výpočtu.
     *
     * @param float $rebate
     *
     * @return self
     */
    public function setRebate($rebate)
    {
        $this->rebate = $rebate;

        return $this;
    }

    /**
     * Gets as discountPercentage.
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
     * Sets a new discountPercentage.
     *
     * Sleva v procentech sloužící pro výpočet slevy ze základní prodejní ceny skladové zásoby.
     *
     * @param float $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as calculation.
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
     * Sets a new calculation.
     *
     * Typ výpočtu. Způsob výpočtu ceny (s daní / bez daně) s ohledem na DPH.
     *
     * @param string $calculation
     *
     * @return self
     */
    public function setCalculation($calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * Gets as rounding.
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
     * Sets a new rounding.
     *
     * Zaokrouhlení. Počet desetinných míst zaokrouhlení (v Kč) při výpočtu ceny.
     *
     * @param string $rounding
     *
     * @return self
     */
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;

        return $this;
    }

    /**
     * Gets as currency.
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
     * Sets a new currency.
     *
     * Měna.
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
     * Kurs.
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
     * Kurs.
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
}
