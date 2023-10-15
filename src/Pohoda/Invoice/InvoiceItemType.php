<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceItemType
 *
 *
 * XSD Type: invoiceItemType
 */
class InvoiceItemType
{
    /**
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *  Povolené jsou vazby: - přijatá objednávka do vydaných faktur.
     *
     * @var \Pohoda\Type\LinkItemType $link
     */
    private $link = null;

    /**
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu. Např. Faktura - Objednávka. Faktury - Vydaná zálohová faktura. Faktura - Výdejka (pouze pro export).
     *
     * @var \Pohoda\Type\LinkedDocumentType $linkedDocument
     */
    private $linkedDocument = null;

    /**
     * ID položky dokladu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $extId
     */
    private $extId = null;

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
     * Koeficient (pouze pro export).
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
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @var \Pohoda\Type\StockItemType $stockItem
     */
    private $stockItem = null;

    /**
     * Identifikátor zásoby u textových položek s vazbou na sklad (pouze pro export).
     *
     * @var \Pohoda\Type\LinkToStockType $linkToStock
     */
    private $linkToStock = null;

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
     * Příznak Přenesení daňové povinnosti (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky).
     *
     * @var bool $pDP
     */
    private $pDP = null;

    /**
     * Kód zboží (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky v SK verzi).
     *
     * @var string $codePDP
     */
    private $codePDP = null;

    /**
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @var \Pohoda\Type\RecyclingContribType $recyclingContrib
     */
    private $recyclingContrib = null;

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
     * Datum expirace.
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * Výkaz pro intrastat. U skladových položek nelze vložit ke složené zásobě a k zásobě typu komplet nebo souprava.
     *
     * @var \Pohoda\Invoice\IntrastatItemType $intrastatItem
     */
    private $intrastatItem = null;

    /**
     * Typ položky EET (pouze CZ verze).
     *
     * @var string $eETItem
     */
    private $eETItem = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as link
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *  Povolené jsou vazby: - přijatá objednávka do vydaných faktur.
     *
     * @return \Pohoda\Type\LinkItemType
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *  Povolené jsou vazby: - přijatá objednávka do vydaných faktur.
     *
     * @param \Pohoda\Type\LinkItemType $link
     * @return self
     */
    public function setLink(?\Pohoda\Type\LinkItemType $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as linkedDocument
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu. Např. Faktura - Objednávka. Faktury - Vydaná zálohová faktura. Faktura - Výdejka (pouze pro export).
     *
     * @return \Pohoda\Type\LinkedDocumentType
     */
    public function getLinkedDocument()
    {
        return $this->linkedDocument;
    }

    /**
     * Sets a new linkedDocument
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu. Např. Faktura - Objednávka. Faktury - Vydaná zálohová faktura. Faktura - Výdejka (pouze pro export).
     *
     * @param \Pohoda\Type\LinkedDocumentType $linkedDocument
     * @return self
     */
    public function setLinkedDocument(?\Pohoda\Type\LinkedDocumentType $linkedDocument = null)
    {
        $this->linkedDocument = $linkedDocument;
        return $this;
    }

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
     * Gets as extId
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param string $extId
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
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
     * Koeficient (pouze pro export).
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
     * Koeficient (pouze pro export).
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
     * Gets as linkToStock
     *
     * Identifikátor zásoby u textových položek s vazbou na sklad (pouze pro export).
     *
     * @return \Pohoda\Type\LinkToStockType
     */
    public function getLinkToStock()
    {
        return $this->linkToStock;
    }

    /**
     * Sets a new linkToStock
     *
     * Identifikátor zásoby u textových položek s vazbou na sklad (pouze pro export).
     *
     * @param \Pohoda\Type\LinkToStockType $linkToStock
     * @return self
     */
    public function setLinkToStock(?\Pohoda\Type\LinkToStockType $linkToStock = null)
    {
        $this->linkToStock = $linkToStock;
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
     * Příznak Přenesení daňové povinnosti (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky).
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
     * Příznak Přenesení daňové povinnosti (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky).
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
     * Kód zboží (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky v SK verzi).
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
     * Kód zboží (pouze pro Vydané faktury, Vydané zálohové faktury a Ostatní pohledávky v SK verzi).
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
     * Gets as recyclingContrib
     *
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @return \Pohoda\Type\RecyclingContribType
     */
    public function getRecyclingContrib()
    {
        return $this->recyclingContrib;
    }

    /**
     * Sets a new recyclingContrib
     *
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @param \Pohoda\Type\RecyclingContribType $recyclingContrib
     * @return self
     */
    public function setRecyclingContrib(?\Pohoda\Type\RecyclingContribType $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;
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
     * Gets as intrastatItem
     *
     * Výkaz pro intrastat. U skladových položek nelze vložit ke složené zásobě a k zásobě typu komplet nebo souprava.
     *
     * @return \Pohoda\Invoice\IntrastatItemType
     */
    public function getIntrastatItem()
    {
        return $this->intrastatItem;
    }

    /**
     * Sets a new intrastatItem
     *
     * Výkaz pro intrastat. U skladových položek nelze vložit ke složené zásobě a k zásobě typu komplet nebo souprava.
     *
     * @param \Pohoda\Invoice\IntrastatItemType $intrastatItem
     * @return self
     */
    public function setIntrastatItem(?\Pohoda\Invoice\IntrastatItemType $intrastatItem = null)
    {
        $this->intrastatItem = $intrastatItem;
        return $this;
    }

    /**
     * Gets as eETItem
     *
     * Typ položky EET (pouze CZ verze).
     *
     * @return string
     */
    public function getEETItem()
    {
        return $this->eETItem;
    }

    /**
     * Sets a new eETItem
     *
     * Typ položky EET (pouze CZ verze).
     *
     * @param string $eETItem
     * @return self
     */
    public function setEETItem($eETItem)
    {
        $this->eETItem = $eETItem;
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
