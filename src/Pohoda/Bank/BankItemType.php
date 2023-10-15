<?php

namespace Pohoda\Bank;

/**
 * Class representing BankItemType
 *
 *
 * XSD Type: bankItemType
 */
class BankItemType
{
    /**
     * Text položky.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Množství. (pouze pro JU nebo DE)
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * Měrná jednotka (pouze pro JU nebo DE).
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * Koeficient (pouze pro JU nebo DE).
     *
     * @var float $coefficient
     */
    private $coefficient = null;

    /**
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA (pouze pro JU nebo DE).
     *
     * @var string $payVAT
     */
    private $payVAT = null;

    /**
     * Sazba DPH (pouze pro JU nebo DE).
     *
     * @var \Pohoda\Type\VatRateType $rateVAT
     */
    private $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení (pouze pro JU nebo DE).
     *
     * @var float $percentVAT
     */
    private $percentVAT = null;

    /**
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ (pouze pro JU nebo DE).
     *
     * @var float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * Částka v Kč.
     *
     * @var \Pohoda\Bank\TypeCurrencyHomeItemType $homeCurrency
     */
    private $homeCurrency = null;

    /**
     * Částka v cizí měně.
     *
     * @var \Pohoda\Bank\TypeCurrencyForeignItemType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Částka v Kč (pouze pro JU a DE).
     *
     * @var \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrencyJU
     */
    private $homeCurrencyJU = null;

    /**
     * Částka v Kč (pouze pro JU a DE).
     *
     * @var \Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrencyJU
     */
    private $foreignCurrencyJU = null;

    /**
     * Druh služby (OSS).
     *
     * @var \Pohoda\Type\MOSStypeType $typeServiceMOSS
     */
    private $typeServiceMOSS = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Párovací symbol.
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Předkontace.
     *
     * @var \Pohoda\Type\RefType $accounting
     */
    private $accounting = null;

    /**
     * Členění DPH.
     *
     * @var \Pohoda\Type\ClassificationVATType $classificationVAT
     */
    private $classificationVAT = null;

    /**
     * Členění KV DPH (pouze SK verze).
     *
     * @var \Pohoda\Type\RefType $classificationKVDPH
     */
    private $classificationKVDPH = null;

    /**
     * Příznak Přenesení daňové povinnosti (pouze pro JU nebo DE).
     *
     * @var bool $pDP
     */
    private $pDP = null;

    /**
     * Kód zboží (pouze pro JU v SK verzi).
     *
     * @var string $codePDP
     */
    private $codePDP = null;

    /**
     * Středisko.
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Činnost.
     *
     * @var \Pohoda\Type\RefType $activity
     */
    private $activity = null;

    /**
     * Zakázka.
     *
     * @var \Pohoda\Type\RefType $contract
     */
    private $contract = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

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
     * Množství. (pouze pro JU nebo DE)
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
     * Množství. (pouze pro JU nebo DE)
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
     * Měrná jednotka (pouze pro JU nebo DE).
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
     * Měrná jednotka (pouze pro JU nebo DE).
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
     * Koeficient (pouze pro JU nebo DE).
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
     * Koeficient (pouze pro JU nebo DE).
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
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA (pouze pro JU nebo DE).
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
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA (pouze pro JU nebo DE).
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
     * Sazba DPH (pouze pro JU nebo DE).
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
     * Sazba DPH (pouze pro JU nebo DE).
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
     * Historická sazba v procentech. Povoluje se v Globálním nastavení (pouze pro JU nebo DE).
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
     * Historická sazba v procentech. Povoluje se v Globálním nastavení (pouze pro JU nebo DE).
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
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ (pouze pro JU nebo DE).
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
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ (pouze pro JU nebo DE).
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
     * Částka v Kč.
     *
     * @return \Pohoda\Bank\TypeCurrencyHomeItemType
     */
    public function getHomeCurrency()
    {
        return $this->homeCurrency;
    }

    /**
     * Sets a new homeCurrency
     *
     * Částka v Kč.
     *
     * @param \Pohoda\Bank\TypeCurrencyHomeItemType $homeCurrency
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Bank\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Částka v cizí měně.
     *
     * @return \Pohoda\Bank\TypeCurrencyForeignItemType
     */
    public function getForeignCurrency()
    {
        return $this->foreignCurrency;
    }

    /**
     * Sets a new foreignCurrency
     *
     * Částka v cizí měně.
     *
     * @param \Pohoda\Bank\TypeCurrencyForeignItemType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Bank\TypeCurrencyForeignItemType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }

    /**
     * Gets as homeCurrencyJU
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @return \Pohoda\Type\TypeCurrencyHomeItemType
     */
    public function getHomeCurrencyJU()
    {
        return $this->homeCurrencyJU;
    }

    /**
     * Sets a new homeCurrencyJU
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @param \Pohoda\Type\TypeCurrencyHomeItemType $homeCurrencyJU
     * @return self
     */
    public function setHomeCurrencyJU(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrencyJU = null)
    {
        $this->homeCurrencyJU = $homeCurrencyJU;
        return $this;
    }

    /**
     * Gets as foreignCurrencyJU
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @return \Pohoda\Type\TypeCurrencyForeignItemType
     */
    public function getForeignCurrencyJU()
    {
        return $this->foreignCurrencyJU;
    }

    /**
     * Sets a new foreignCurrencyJU
     *
     * Částka v Kč (pouze pro JU a DE).
     *
     * @param \Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrencyJU
     * @return self
     */
    public function setForeignCurrencyJU(?\Pohoda\Type\TypeCurrencyForeignItemType $foreignCurrencyJU = null)
    {
        $this->foreignCurrencyJU = $foreignCurrencyJU;
        return $this;
    }

    /**
     * Gets as typeServiceMOSS
     *
     * Druh služby (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getTypeServiceMOSS()
    {
        return $this->typeServiceMOSS;
    }

    /**
     * Sets a new typeServiceMOSS
     *
     * Druh služby (OSS).
     *
     * @param \Pohoda\Type\MOSStypeType $typeServiceMOSS
     * @return self
     */
    public function setTypeServiceMOSS(?\Pohoda\Type\MOSStypeType $typeServiceMOSS = null)
    {
        $this->typeServiceMOSS = $typeServiceMOSS;
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
     * Gets as symPar
     *
     * Párovací symbol.
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar
     *
     * Párovací symbol.
     *
     * @param string $symPar
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace.
     *
     * @param \Pohoda\Type\RefType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as classificationVAT
     *
     * Členění DPH.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT
     *
     * Členění DPH.
     *
     * @param \Pohoda\Type\ClassificationVATType $classificationVAT
     * @return self
     */
    public function setClassificationVAT(?\Pohoda\Type\ClassificationVATType $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;
        return $this;
    }

    /**
     * Gets as classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPH()
    {
        return $this->classificationKVDPH;
    }

    /**
     * Sets a new classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @param \Pohoda\Type\RefType $classificationKVDPH
     * @return self
     */
    public function setClassificationKVDPH(?\Pohoda\Type\RefType $classificationKVDPH = null)
    {
        $this->classificationKVDPH = $classificationKVDPH;
        return $this;
    }

    /**
     * Gets as pDP
     *
     * Příznak Přenesení daňové povinnosti (pouze pro JU nebo DE).
     *
     * @return bool
     */
    public function getPDP()
    {
        return $this->pDP;
    }

    /**
     * Sets a new pDP
     *
     * Příznak Přenesení daňové povinnosti (pouze pro JU nebo DE).
     *
     * @param bool $pDP
     * @return self
     */
    public function setPDP($pDP)
    {
        $this->pDP = $pDP;
        return $this;
    }

    /**
     * Gets as codePDP
     *
     * Kód zboží (pouze pro JU v SK verzi).
     *
     * @return string
     */
    public function getCodePDP()
    {
        return $this->codePDP;
    }

    /**
     * Sets a new codePDP
     *
     * Kód zboží (pouze pro JU v SK verzi).
     *
     * @param string $codePDP
     * @return self
     */
    public function setCodePDP($codePDP)
    {
        $this->codePDP = $codePDP;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko.
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
     * Středisko.
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
     * Činnost.
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
     * Činnost.
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
     * Zakázka.
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
     * Zakázka.
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

