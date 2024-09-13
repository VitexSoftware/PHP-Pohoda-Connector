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

namespace Pohoda\Stock;

/**
 * Class representing StockHeaderType.
 *
 * XSD Type: stockHeaderType
 */
class StockHeaderType
{
    /**
     * ID skladové zásoby (jen pro export).
     */
    private int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Typ zásoby. Tento element je vyžadován při vytvoření dokladu. Nelze měnit při aktualizaci dokladu.
     */
    private string $stockType = null;

    /**
     * Řetězcový identifikátor skladové položky.
     */
    private string $code = null;

    /**
     * Čárový kód.
     */
    private string $eAN = null;

    /**
     * PLU. Kód zásoby pro registrační pokladnu.
     */
    private int $pLU = null;

    /**
     * Odbyt. Určuje, zda se má tato zásoba nabízet při vyskladnění z agend Faktury, Prodejky a Výdejky.
     */
    private string $isSales = null;

    /**
     * Výrobní čísla. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat výrobní čísla.
     */
    private string $isSerialNumber = null;

    /**
     * Internet. Určuje, zda je tato zásoba součástí sortimentu nabízeného na internetu.
     */
    private string $isInternet = null;

    /**
     * Šarže. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat šarže.
     */
    private string $isBatch = null;

    /**
     * Sazba DPH pro nákup.
     */
    private \Pohoda\Type\VatRateType $purchasingRateVAT = null;

    /**
     * Sazba DPH pro prodej.
     */
    private \Pohoda\Type\VatRateType $sellingRateVAT = null;

    /**
     * Název skladové položky. Tento element je vyžadován při vytvoření dokladu.
     */
    private string $name = null;

    /**
     * Doplňující text či poznámka k názvu skladové zásoby.
     */
    private string $nameComplement = null;

    /**
     * Měrná jednotka.
     */
    private string $unit = null;

    /**
     * Měrná jednotka 2.
     */
    private string $unit2 = null;

    /**
     * Měrná jednotka 3.
     */
    private string $unit3 = null;

    /**
     * Měrná jednotka 2 koeficient.
     */
    private float $coefficient2 = null;

    /**
     * Měrná jednotka 3 koeficient.
     */
    private float $coefficient3 = null;

    /**
     * Členění. Tento element je vyžadován při vytvoření dokladu.
     */
    private \Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Cenová skupina. Tento element je vyžadován při vytvoření dokladu.
     */
    private \Pohoda\Type\RefType $typePrice = null;

    /**
     * Vážená nákupní cena (jen pro export).
     */
    private float $weightedPurchasePrice = null;

    /**
     * Nákupní cena. Pokud není uvedena, bere se jako NULOVÁ.
     */
    private \Pohoda\Stock\StockHeaderType\PurchasingPriceAType $purchasingPrice = null;

    /**
     * Prodejní cena. Pokud není uvedena, bere se jako NULOVÁ.
     */
    private \Pohoda\Stock\StockHeaderType\SellingPriceAType $sellingPrice = null;

    /**
     * Typ fixace (jen export).
     */
    private string $fixation = null;

    /**
     * Limit Min pro automatickou objednávku.
     */
    private float $limitMin = null;

    /**
     * Limit Max pro automatickou objednávku.
     */
    private float $limitMax = null;

    /**
     * Hmotnost.
     */
    private float $mass = null;

    /**
     * Objem.
     */
    private float $volume = null;

    /**
     * Stav zásoby (jen pro export).
     */
    private float $count = null;

    /**
     * Objednávky (jen pro export).
     */
    private float $countReceivedOrders = null;

    /**
     * Rezervace (jen pro export).
     */
    private float $reservation = null;

    /**
     * Dodavatel.
     */
    private \Pohoda\Type\CompanyType $supplier = null;

    /**
     * Název skladové zásoby pro použití ve funkci Automatické objednávky.
     */
    private string $orderName = null;

    /**
     * Požadované množství k objednání pro použití ve funkci Automatické objednávky.
     */
    private float $orderQuantity = null;

    /**
     * Objednáno (jen pro export).
     */
    private float $countIssuedOrders = null;

    /**
     * Stav zásoby v reklamaci (jen pro export).
     */
    private float $reclamation = null;

    /**
     * Servis (jen pro export).
     */
    private float $service = null;

    /**
     * Zkrácený název skladové položky - např. při tisku na registrační pokladně.
     */
    private string $shortName = null;

    /**
     * Příznak pro registrační pokladnu.
     */
    private \Pohoda\Type\RefType $typeRP = null;

    /**
     * Typ záruky.
     */
    private string $guaranteeType = null;

    /**
     * Délka záruky.
     */
    private int $guarantee = null;

    /**
     * Výrobce skladové položky.
     */
    private string $producer = null;

    /**
     * Jednotka měrné ceny.
     */
    private string $unitOfMeasure = null;

    /**
     * Koeficient pro přepočet jednotky měrné ceny.
     */
    private float $coefficientOfMeasure = null;

    /**
     * Typ položky EET (pouze CZ verze).
     */
    private string $eETItem = null;

    /**
     * DIČ pověřujícího poplatníka (pouze CZ verze).
     */
    private string $dicPP = null;

    /**
     * Položky eKasa (pouze SK verze).
     */
    private \Pohoda\Stock\EKasaItemType $eKasaItem = null;

    /**
     * Výnos. Účet pro účtování výnosů z prodeje zásoby.
     */
    private string $yield = null;

    /**
     * Náklad. Účet pro účtování nákladu z prodeje zásoby.
     */
    private string $cost = null;

    /**
     * Příjem - členění DPH.
     */
    private \Pohoda\Type\ClassificationVATType $classificationVATReceipt = null;

    /**
     * Příjem - členění KV DPH (pouze SK verze).
     */
    private \Pohoda\Type\RefType $classificationKVDPHReceipt = null;

    /**
     * Výdej - členění DPH.
     */
    private \Pohoda\Type\ClassificationVATType $classificationVATIssue = null;

    /**
     * Výdej - členění KV DPH (pouze SK verze).
     */
    private \Pohoda\Type\RefType $classificationKVDPHIssue = null;

    /**
     * Účtování metodou A - Druh zásoby.
     */
    private string $classOfStock = null;

    /**
     * Účtování metodou A - analytický účet zásoby.
     */
    private string $acc = null;

    /**
     * Druh služby (OSS).
     */
    private \Pohoda\Type\MOSStypeType $typeServiceMOSS = null;

    /**
     * Kontrola limitu pro režim přenesení daňové povinnosti (pouze CZ verze).
     */
    private string $controlLimitTaxLiability = null;

    /**
     * Příznak přenesení daňové povinnosti (pouze SK verze).
     */
    private string $pDP = null;

    /**
     * Výdej - členění DPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     */
    private \Pohoda\Type\ClassificationVATType $pDPclassificationVATIssue = null;

    /**
     * Výdej - členění KVDPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     */
    private \Pohoda\Type\RefType $pDPclassificationKVDPHIssue = null;

    /**
     * Kód zboží související s režimem přenesení daňové povinnosti (pouze SK verze).
     */
    private string $codePDP = null;

    /**
     * Recyklační příspěvek zásoby.
     */
    private \Pohoda\Stock\RecyclingContribType $recyclingContrib = null;

    /**
     * Výkaz pro intrastat.
     */
    private \Pohoda\Stock\InstrastatType $intrastat = null;

    /**
     * Označení zásoby - Novinka.
     */
    private string $news = null;

    /**
     * Označení zásoby - Doprodej.
     */
    private string $clearanceSale = null;

    /**
     * Označení zásoby - Akce.
     */
    private string $sale = null;

    /**
     * Označení zásoby - Doporučujeme.
     */
    private string $recommended = null;

    /**
     * Označení zásoby - Sleva.
     */
    private string $discount = null;

    /**
     * Označení zásoby - Připravujeme.
     */
    private string $prepare = null;

    /**
     * Skladová dostupnost zásoby(skladem, do 3 dnů, na objednávku).
     */
    private string $availability = null;

    /**
     * Doprava zásoby(PPL,pošta,osobní odběr,...)Cena za dopravu .
     */
    private string $handlingInformation = null;

    /**
     * Cizí název skladové položky.
     */
    private string $foreignName1 = null;

    /**
     * Doplňující text či poznámka k názvu skladové zásoby.
     */
    private string $foreignNameComplement1 = null;

    /**
     * Cizí název skladové položky.
     */
    private string $foreignName2 = null;

    /**
     * Doplňující text či poznámka k názvu skladové zásoby.
     */
    private string $foreignNameComplement2 = null;

    /**
     * Stručný popis.
     */
    private string $description = null;

    /**
     * Podrobný popis.
     */
    private string $description2 = null;

    /**
     * Obrázky skladové položky.
     *
     * @var \Pohoda\Stock\PictureType[]
     */
    private array $pictures = null;

    /**
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @var int[]
     */
    private array $categories = null;

    /**
     * Související soubory.
     *
     * @var \Pohoda\Stock\RelatedFileType[]
     */
    private array $relatedFiles = null;

    /**
     * Související odkazy.
     *
     * @var \Pohoda\Stock\RelatedLinkType[]
     */
    private array $relatedLinks = null;

    /**
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @var \Pohoda\Type\OrderStockItemType[]
     */
    private array $relatedStocks = null;

    /**
     * Alternativní zásoby. Pouze pro export.
     *
     * @var \Pohoda\Type\OrderStockItemType[]
     */
    private array $alternativeStocks = null;

    /**
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @var \Pohoda\Stock\IntParameterType[]
     */
    private array $intParameters = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private string $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[]
     */
    private array $labels = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private array $parameters = null;

    /**
     * Gets as id.
     *
     * ID skladové zásoby (jen pro export).
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
     * ID skladové zásoby (jen pro export).
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
     * Gets as stockType.
     *
     * Typ zásoby. Tento element je vyžadován při vytvoření dokladu. Nelze měnit při aktualizaci dokladu.
     *
     * @return string
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * Sets a new stockType.
     *
     * Typ zásoby. Tento element je vyžadován při vytvoření dokladu. Nelze měnit při aktualizaci dokladu.
     *
     * @param string $stockType
     *
     * @return self
     */
    public function setStockType($stockType)
    {
        $this->stockType = $stockType;

        return $this;
    }

    /**
     * Gets as code.
     *
     * Řetězcový identifikátor skladové položky.
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
     * Řetězcový identifikátor skladové položky.
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
     * Gets as eAN.
     *
     * Čárový kód.
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->eAN;
    }

    /**
     * Sets a new eAN.
     *
     * Čárový kód.
     *
     * @param string $eAN
     *
     * @return self
     */
    public function setEAN($eAN)
    {
        $this->eAN = $eAN;

        return $this;
    }

    /**
     * Gets as pLU.
     *
     * PLU. Kód zásoby pro registrační pokladnu.
     *
     * @return int
     */
    public function getPLU()
    {
        return $this->pLU;
    }

    /**
     * Sets a new pLU.
     *
     * PLU. Kód zásoby pro registrační pokladnu.
     *
     * @param int $pLU
     *
     * @return self
     */
    public function setPLU($pLU)
    {
        $this->pLU = $pLU;

        return $this;
    }

    /**
     * Gets as isSales.
     *
     * Odbyt. Určuje, zda se má tato zásoba nabízet při vyskladnění z agend Faktury, Prodejky a Výdejky.
     *
     * @return string
     */
    public function getIsSales()
    {
        return $this->isSales;
    }

    /**
     * Sets a new isSales.
     *
     * Odbyt. Určuje, zda se má tato zásoba nabízet při vyskladnění z agend Faktury, Prodejky a Výdejky.
     *
     * @param string $isSales
     *
     * @return self
     */
    public function setIsSales($isSales)
    {
        $this->isSales = $isSales;

        return $this;
    }

    /**
     * Gets as isSerialNumber.
     *
     * Výrobní čísla. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat výrobní čísla.
     *
     * @return string
     */
    public function getIsSerialNumber()
    {
        return $this->isSerialNumber;
    }

    /**
     * Sets a new isSerialNumber.
     *
     * Výrobní čísla. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat výrobní čísla.
     *
     * @param string $isSerialNumber
     *
     * @return self
     */
    public function setIsSerialNumber($isSerialNumber)
    {
        $this->isSerialNumber = $isSerialNumber;

        return $this;
    }

    /**
     * Gets as isInternet.
     *
     * Internet. Určuje, zda je tato zásoba součástí sortimentu nabízeného na internetu.
     *
     * @return string
     */
    public function getIsInternet()
    {
        return $this->isInternet;
    }

    /**
     * Sets a new isInternet.
     *
     * Internet. Určuje, zda je tato zásoba součástí sortimentu nabízeného na internetu.
     *
     * @param string $isInternet
     *
     * @return self
     */
    public function setIsInternet($isInternet)
    {
        $this->isInternet = $isInternet;

        return $this;
    }

    /**
     * Gets as isBatch.
     *
     * Šarže. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat šarže.
     *
     * @return string
     */
    public function getIsBatch()
    {
        return $this->isBatch;
    }

    /**
     * Sets a new isBatch.
     *
     * Šarže. Určuje, zda je toto číslovaná zásoba, u které se mají evidovat šarže.
     *
     * @param string $isBatch
     *
     * @return self
     */
    public function setIsBatch($isBatch)
    {
        $this->isBatch = $isBatch;

        return $this;
    }

    /**
     * Gets as purchasingRateVAT.
     *
     * Sazba DPH pro nákup.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getPurchasingRateVAT()
    {
        return $this->purchasingRateVAT;
    }

    /**
     * Sets a new purchasingRateVAT.
     *
     * Sazba DPH pro nákup.
     *
     * @return self
     */
    public function setPurchasingRateVAT(?\Pohoda\Type\VatRateType $purchasingRateVAT = null)
    {
        $this->purchasingRateVAT = $purchasingRateVAT;

        return $this;
    }

    /**
     * Gets as sellingRateVAT.
     *
     * Sazba DPH pro prodej.
     *
     * @return \Pohoda\Type\VatRateType
     */
    public function getSellingRateVAT()
    {
        return $this->sellingRateVAT;
    }

    /**
     * Sets a new sellingRateVAT.
     *
     * Sazba DPH pro prodej.
     *
     * @return self
     */
    public function setSellingRateVAT(?\Pohoda\Type\VatRateType $sellingRateVAT = null)
    {
        $this->sellingRateVAT = $sellingRateVAT;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název skladové položky. Tento element je vyžadován při vytvoření dokladu.
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
     * Název skladové položky. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as nameComplement.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @return string
     */
    public function getNameComplement()
    {
        return $this->nameComplement;
    }

    /**
     * Sets a new nameComplement.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @param string $nameComplement
     *
     * @return self
     */
    public function setNameComplement($nameComplement)
    {
        $this->nameComplement = $nameComplement;

        return $this;
    }

    /**
     * Gets as unit.
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
     * Sets a new unit.
     *
     * Měrná jednotka.
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
     * Gets as unit2.
     *
     * Měrná jednotka 2.
     *
     * @return string
     */
    public function getUnit2()
    {
        return $this->unit2;
    }

    /**
     * Sets a new unit2.
     *
     * Měrná jednotka 2.
     *
     * @param string $unit2
     *
     * @return self
     */
    public function setUnit2($unit2)
    {
        $this->unit2 = $unit2;

        return $this;
    }

    /**
     * Gets as unit3.
     *
     * Měrná jednotka 3.
     *
     * @return string
     */
    public function getUnit3()
    {
        return $this->unit3;
    }

    /**
     * Sets a new unit3.
     *
     * Měrná jednotka 3.
     *
     * @param string $unit3
     *
     * @return self
     */
    public function setUnit3($unit3)
    {
        $this->unit3 = $unit3;

        return $this;
    }

    /**
     * Gets as coefficient2.
     *
     * Měrná jednotka 2 koeficient.
     *
     * @return float
     */
    public function getCoefficient2()
    {
        return $this->coefficient2;
    }

    /**
     * Sets a new coefficient2.
     *
     * Měrná jednotka 2 koeficient.
     *
     * @param float $coefficient2
     *
     * @return self
     */
    public function setCoefficient2($coefficient2)
    {
        $this->coefficient2 = $coefficient2;

        return $this;
    }

    /**
     * Gets as coefficient3.
     *
     * Měrná jednotka 3 koeficient.
     *
     * @return float
     */
    public function getCoefficient3()
    {
        return $this->coefficient3;
    }

    /**
     * Sets a new coefficient3.
     *
     * Měrná jednotka 3 koeficient.
     *
     * @param float $coefficient3
     *
     * @return self
     */
    public function setCoefficient3($coefficient3)
    {
        $this->coefficient3 = $coefficient3;

        return $this;
    }

    /**
     * Gets as storage.
     *
     * Členění. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage.
     *
     * Členění. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as typePrice.
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
     * Sets a new typePrice.
     *
     * Cenová skupina. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return self
     */
    public function setTypePrice(?\Pohoda\Type\RefType $typePrice = null)
    {
        $this->typePrice = $typePrice;

        return $this;
    }

    /**
     * Gets as weightedPurchasePrice.
     *
     * Vážená nákupní cena (jen pro export).
     *
     * @return float
     */
    public function getWeightedPurchasePrice()
    {
        return $this->weightedPurchasePrice;
    }

    /**
     * Sets a new weightedPurchasePrice.
     *
     * Vážená nákupní cena (jen pro export).
     *
     * @param float $weightedPurchasePrice
     *
     * @return self
     */
    public function setWeightedPurchasePrice($weightedPurchasePrice)
    {
        $this->weightedPurchasePrice = $weightedPurchasePrice;

        return $this;
    }

    /**
     * Gets as purchasingPrice.
     *
     * Nákupní cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return \Pohoda\Stock\StockHeaderType\PurchasingPriceAType
     */
    public function getPurchasingPrice()
    {
        return $this->purchasingPrice;
    }

    /**
     * Sets a new purchasingPrice.
     *
     * Nákupní cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return self
     */
    public function setPurchasingPrice(?\Pohoda\Stock\StockHeaderType\PurchasingPriceAType $purchasingPrice = null)
    {
        $this->purchasingPrice = $purchasingPrice;

        return $this;
    }

    /**
     * Gets as sellingPrice.
     *
     * Prodejní cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return \Pohoda\Stock\StockHeaderType\SellingPriceAType
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * Sets a new sellingPrice.
     *
     * Prodejní cena. Pokud není uvedena, bere se jako NULOVÁ.
     *
     * @return self
     */
    public function setSellingPrice(?\Pohoda\Stock\StockHeaderType\SellingPriceAType $sellingPrice = null)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Gets as fixation.
     *
     * Typ fixace (jen export).
     *
     * @return string
     */
    public function getFixation()
    {
        return $this->fixation;
    }

    /**
     * Sets a new fixation.
     *
     * Typ fixace (jen export).
     *
     * @param string $fixation
     *
     * @return self
     */
    public function setFixation($fixation)
    {
        $this->fixation = $fixation;

        return $this;
    }

    /**
     * Gets as limitMin.
     *
     * Limit Min pro automatickou objednávku.
     *
     * @return float
     */
    public function getLimitMin()
    {
        return $this->limitMin;
    }

    /**
     * Sets a new limitMin.
     *
     * Limit Min pro automatickou objednávku.
     *
     * @param float $limitMin
     *
     * @return self
     */
    public function setLimitMin($limitMin)
    {
        $this->limitMin = $limitMin;

        return $this;
    }

    /**
     * Gets as limitMax.
     *
     * Limit Max pro automatickou objednávku.
     *
     * @return float
     */
    public function getLimitMax()
    {
        return $this->limitMax;
    }

    /**
     * Sets a new limitMax.
     *
     * Limit Max pro automatickou objednávku.
     *
     * @param float $limitMax
     *
     * @return self
     */
    public function setLimitMax($limitMax)
    {
        $this->limitMax = $limitMax;

        return $this;
    }

    /**
     * Gets as mass.
     *
     * Hmotnost.
     *
     * @return float
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Sets a new mass.
     *
     * Hmotnost.
     *
     * @param float $mass
     *
     * @return self
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Gets as volume.
     *
     * Objem.
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets a new volume.
     *
     * Objem.
     *
     * @param float $volume
     *
     * @return self
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Gets as count.
     *
     * Stav zásoby (jen pro export).
     *
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count.
     *
     * Stav zásoby (jen pro export).
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Gets as countReceivedOrders.
     *
     * Objednávky (jen pro export).
     *
     * @return float
     */
    public function getCountReceivedOrders()
    {
        return $this->countReceivedOrders;
    }

    /**
     * Sets a new countReceivedOrders.
     *
     * Objednávky (jen pro export).
     *
     * @param float $countReceivedOrders
     *
     * @return self
     */
    public function setCountReceivedOrders($countReceivedOrders)
    {
        $this->countReceivedOrders = $countReceivedOrders;

        return $this;
    }

    /**
     * Gets as reservation.
     *
     * Rezervace (jen pro export).
     *
     * @return float
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Sets a new reservation.
     *
     * Rezervace (jen pro export).
     *
     * @param float $reservation
     *
     * @return self
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Gets as supplier.
     *
     * Dodavatel.
     *
     * @return \Pohoda\Type\CompanyType
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier.
     *
     * Dodavatel.
     *
     * @return self
     */
    public function setSupplier(?\Pohoda\Type\CompanyType $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Gets as orderName.
     *
     * Název skladové zásoby pro použití ve funkci Automatické objednávky.
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
     * Název skladové zásoby pro použití ve funkci Automatické objednávky.
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
     * Gets as orderQuantity.
     *
     * Požadované množství k objednání pro použití ve funkci Automatické objednávky.
     *
     * @return float
     */
    public function getOrderQuantity()
    {
        return $this->orderQuantity;
    }

    /**
     * Sets a new orderQuantity.
     *
     * Požadované množství k objednání pro použití ve funkci Automatické objednávky.
     *
     * @param float $orderQuantity
     *
     * @return self
     */
    public function setOrderQuantity($orderQuantity)
    {
        $this->orderQuantity = $orderQuantity;

        return $this;
    }

    /**
     * Gets as countIssuedOrders.
     *
     * Objednáno (jen pro export).
     *
     * @return float
     */
    public function getCountIssuedOrders()
    {
        return $this->countIssuedOrders;
    }

    /**
     * Sets a new countIssuedOrders.
     *
     * Objednáno (jen pro export).
     *
     * @param float $countIssuedOrders
     *
     * @return self
     */
    public function setCountIssuedOrders($countIssuedOrders)
    {
        $this->countIssuedOrders = $countIssuedOrders;

        return $this;
    }

    /**
     * Gets as reclamation.
     *
     * Stav zásoby v reklamaci (jen pro export).
     *
     * @return float
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * Sets a new reclamation.
     *
     * Stav zásoby v reklamaci (jen pro export).
     *
     * @param float $reclamation
     *
     * @return self
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    /**
     * Gets as service.
     *
     * Servis (jen pro export).
     *
     * @return float
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service.
     *
     * Servis (jen pro export).
     *
     * @param float $service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Gets as shortName.
     *
     * Zkrácený název skladové položky - např. při tisku na registrační pokladně.
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName.
     *
     * Zkrácený název skladové položky - např. při tisku na registrační pokladně.
     *
     * @param string $shortName
     *
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Gets as typeRP.
     *
     * Příznak pro registrační pokladnu.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getTypeRP()
    {
        return $this->typeRP;
    }

    /**
     * Sets a new typeRP.
     *
     * Příznak pro registrační pokladnu.
     *
     * @return self
     */
    public function setTypeRP(?\Pohoda\Type\RefType $typeRP = null)
    {
        $this->typeRP = $typeRP;

        return $this;
    }

    /**
     * Gets as guaranteeType.
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
     * Sets a new guaranteeType.
     *
     * Typ záruky.
     *
     * @param string $guaranteeType
     *
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;

        return $this;
    }

    /**
     * Gets as guarantee.
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
     * Sets a new guarantee.
     *
     * Délka záruky.
     *
     * @param int $guarantee
     *
     * @return self
     */
    public function setGuarantee($guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Gets as producer.
     *
     * Výrobce skladové položky.
     *
     * @return string
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Sets a new producer.
     *
     * Výrobce skladové položky.
     *
     * @param string $producer
     *
     * @return self
     */
    public function setProducer($producer)
    {
        $this->producer = $producer;

        return $this;
    }

    /**
     * Gets as unitOfMeasure.
     *
     * Jednotka měrné ceny.
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure.
     *
     * Jednotka měrné ceny.
     *
     * @param string $unitOfMeasure
     *
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as coefficientOfMeasure.
     *
     * Koeficient pro přepočet jednotky měrné ceny.
     *
     * @return float
     */
    public function getCoefficientOfMeasure()
    {
        return $this->coefficientOfMeasure;
    }

    /**
     * Sets a new coefficientOfMeasure.
     *
     * Koeficient pro přepočet jednotky měrné ceny.
     *
     * @param float $coefficientOfMeasure
     *
     * @return self
     */
    public function setCoefficientOfMeasure($coefficientOfMeasure)
    {
        $this->coefficientOfMeasure = $coefficientOfMeasure;

        return $this;
    }

    /**
     * Gets as eETItem.
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
     * Sets a new eETItem.
     *
     * Typ položky EET (pouze CZ verze).
     *
     * @param string $eETItem
     *
     * @return self
     */
    public function setEETItem($eETItem)
    {
        $this->eETItem = $eETItem;

        return $this;
    }

    /**
     * Gets as dicPP.
     *
     * DIČ pověřujícího poplatníka (pouze CZ verze).
     *
     * @return string
     */
    public function getDicPP()
    {
        return $this->dicPP;
    }

    /**
     * Sets a new dicPP.
     *
     * DIČ pověřujícího poplatníka (pouze CZ verze).
     *
     * @param string $dicPP
     *
     * @return self
     */
    public function setDicPP($dicPP)
    {
        $this->dicPP = $dicPP;

        return $this;
    }

    /**
     * Gets as eKasaItem.
     *
     * Položky eKasa (pouze SK verze).
     *
     * @return \Pohoda\Stock\EKasaItemType
     */
    public function getEKasaItem()
    {
        return $this->eKasaItem;
    }

    /**
     * Sets a new eKasaItem.
     *
     * Položky eKasa (pouze SK verze).
     *
     * @return self
     */
    public function setEKasaItem(?\Pohoda\Stock\EKasaItemType $eKasaItem = null)
    {
        $this->eKasaItem = $eKasaItem;

        return $this;
    }

    /**
     * Gets as yield.
     *
     * Výnos. Účet pro účtování výnosů z prodeje zásoby.
     *
     * @return string
     */
    public function getYield()
    {
        return $this->yield;
    }

    /**
     * Sets a new yield.
     *
     * Výnos. Účet pro účtování výnosů z prodeje zásoby.
     *
     * @param string $yield
     *
     * @return self
     */
    public function setYield($yield)
    {
        $this->yield = $yield;

        return $this;
    }

    /**
     * Gets as cost.
     *
     * Náklad. Účet pro účtování nákladu z prodeje zásoby.
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost.
     *
     * Náklad. Účet pro účtování nákladu z prodeje zásoby.
     *
     * @param string $cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Gets as classificationVATReceipt.
     *
     * Příjem - členění DPH.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVATReceipt()
    {
        return $this->classificationVATReceipt;
    }

    /**
     * Sets a new classificationVATReceipt.
     *
     * Příjem - členění DPH.
     *
     * @return self
     */
    public function setClassificationVATReceipt(?\Pohoda\Type\ClassificationVATType $classificationVATReceipt = null)
    {
        $this->classificationVATReceipt = $classificationVATReceipt;

        return $this;
    }

    /**
     * Gets as classificationKVDPHReceipt.
     *
     * Příjem - členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPHReceipt()
    {
        return $this->classificationKVDPHReceipt;
    }

    /**
     * Sets a new classificationKVDPHReceipt.
     *
     * Příjem - členění KV DPH (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPHReceipt(?\Pohoda\Type\RefType $classificationKVDPHReceipt = null)
    {
        $this->classificationKVDPHReceipt = $classificationKVDPHReceipt;

        return $this;
    }

    /**
     * Gets as classificationVATIssue.
     *
     * Výdej - členění DPH.
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVATIssue()
    {
        return $this->classificationVATIssue;
    }

    /**
     * Sets a new classificationVATIssue.
     *
     * Výdej - členění DPH.
     *
     * @return self
     */
    public function setClassificationVATIssue(?\Pohoda\Type\ClassificationVATType $classificationVATIssue = null)
    {
        $this->classificationVATIssue = $classificationVATIssue;

        return $this;
    }

    /**
     * Gets as classificationKVDPHIssue.
     *
     * Výdej - členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPHIssue()
    {
        return $this->classificationKVDPHIssue;
    }

    /**
     * Sets a new classificationKVDPHIssue.
     *
     * Výdej - členění KV DPH (pouze SK verze).
     *
     * @return self
     */
    public function setClassificationKVDPHIssue(?\Pohoda\Type\RefType $classificationKVDPHIssue = null)
    {
        $this->classificationKVDPHIssue = $classificationKVDPHIssue;

        return $this;
    }

    /**
     * Gets as classOfStock.
     *
     * Účtování metodou A - Druh zásoby.
     *
     * @return string
     */
    public function getClassOfStock()
    {
        return $this->classOfStock;
    }

    /**
     * Sets a new classOfStock.
     *
     * Účtování metodou A - Druh zásoby.
     *
     * @param string $classOfStock
     *
     * @return self
     */
    public function setClassOfStock($classOfStock)
    {
        $this->classOfStock = $classOfStock;

        return $this;
    }

    /**
     * Gets as acc.
     *
     * Účtování metodou A - analytický účet zásoby.
     *
     * @return string
     */
    public function getAcc()
    {
        return $this->acc;
    }

    /**
     * Sets a new acc.
     *
     * Účtování metodou A - analytický účet zásoby.
     *
     * @param string $acc
     *
     * @return self
     */
    public function setAcc($acc)
    {
        $this->acc = $acc;

        return $this;
    }

    /**
     * Gets as typeServiceMOSS.
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
     * Sets a new typeServiceMOSS.
     *
     * Druh služby (OSS).
     *
     * @return self
     */
    public function setTypeServiceMOSS(?\Pohoda\Type\MOSStypeType $typeServiceMOSS = null)
    {
        $this->typeServiceMOSS = $typeServiceMOSS;

        return $this;
    }

    /**
     * Gets as controlLimitTaxLiability.
     *
     * Kontrola limitu pro režim přenesení daňové povinnosti (pouze CZ verze).
     *
     * @return string
     */
    public function getControlLimitTaxLiability()
    {
        return $this->controlLimitTaxLiability;
    }

    /**
     * Sets a new controlLimitTaxLiability.
     *
     * Kontrola limitu pro režim přenesení daňové povinnosti (pouze CZ verze).
     *
     * @param string $controlLimitTaxLiability
     *
     * @return self
     */
    public function setControlLimitTaxLiability($controlLimitTaxLiability)
    {
        $this->controlLimitTaxLiability = $controlLimitTaxLiability;

        return $this;
    }

    /**
     * Gets as pDP.
     *
     * Příznak přenesení daňové povinnosti (pouze SK verze).
     *
     * @return string
     */
    public function getPDP()
    {
        return $this->pDP;
    }

    /**
     * Sets a new pDP.
     *
     * Příznak přenesení daňové povinnosti (pouze SK verze).
     *
     * @param string $pDP
     *
     * @return self
     */
    public function setPDP($pDP)
    {
        $this->pDP = $pDP;

        return $this;
    }

    /**
     * Gets as pDPclassificationVATIssue.
     *
     * Výdej - členění DPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getPDPclassificationVATIssue()
    {
        return $this->pDPclassificationVATIssue;
    }

    /**
     * Sets a new pDPclassificationVATIssue.
     *
     * Výdej - členění DPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @return self
     */
    public function setPDPclassificationVATIssue(?\Pohoda\Type\ClassificationVATType $pDPclassificationVATIssue = null)
    {
        $this->pDPclassificationVATIssue = $pDPclassificationVATIssue;

        return $this;
    }

    /**
     * Gets as pDPclassificationKVDPHIssue.
     *
     * Výdej - členění KVDPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPDPclassificationKVDPHIssue()
    {
        return $this->pDPclassificationKVDPHIssue;
    }

    /**
     * Sets a new pDPclassificationKVDPHIssue.
     *
     * Výdej - členění KVDPH související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @return self
     */
    public function setPDPclassificationKVDPHIssue(?\Pohoda\Type\RefType $pDPclassificationKVDPHIssue = null)
    {
        $this->pDPclassificationKVDPHIssue = $pDPclassificationKVDPHIssue;

        return $this;
    }

    /**
     * Gets as codePDP.
     *
     * Kód zboží související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @return string
     */
    public function getCodePDP()
    {
        return $this->codePDP;
    }

    /**
     * Sets a new codePDP.
     *
     * Kód zboží související s režimem přenesení daňové povinnosti (pouze SK verze).
     *
     * @param string $codePDP
     *
     * @return self
     */
    public function setCodePDP($codePDP)
    {
        $this->codePDP = $codePDP;

        return $this;
    }

    /**
     * Gets as recyclingContrib.
     *
     * Recyklační příspěvek zásoby.
     *
     * @return \Pohoda\Stock\RecyclingContribType
     */
    public function getRecyclingContrib()
    {
        return $this->recyclingContrib;
    }

    /**
     * Sets a new recyclingContrib.
     *
     * Recyklační příspěvek zásoby.
     *
     * @return self
     */
    public function setRecyclingContrib(?\Pohoda\Stock\RecyclingContribType $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;

        return $this;
    }

    /**
     * Gets as intrastat.
     *
     * Výkaz pro intrastat.
     *
     * @return \Pohoda\Stock\InstrastatType
     */
    public function getIntrastat()
    {
        return $this->intrastat;
    }

    /**
     * Sets a new intrastat.
     *
     * Výkaz pro intrastat.
     *
     * @return self
     */
    public function setIntrastat(?\Pohoda\Stock\InstrastatType $intrastat = null)
    {
        $this->intrastat = $intrastat;

        return $this;
    }

    /**
     * Gets as news.
     *
     * Označení zásoby - Novinka.
     *
     * @return string
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Sets a new news.
     *
     * Označení zásoby - Novinka.
     *
     * @param string $news
     *
     * @return self
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Gets as clearanceSale.
     *
     * Označení zásoby - Doprodej.
     *
     * @return string
     */
    public function getClearanceSale()
    {
        return $this->clearanceSale;
    }

    /**
     * Sets a new clearanceSale.
     *
     * Označení zásoby - Doprodej.
     *
     * @param string $clearanceSale
     *
     * @return self
     */
    public function setClearanceSale($clearanceSale)
    {
        $this->clearanceSale = $clearanceSale;

        return $this;
    }

    /**
     * Gets as sale.
     *
     * Označení zásoby - Akce.
     *
     * @return string
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Sets a new sale.
     *
     * Označení zásoby - Akce.
     *
     * @param string $sale
     *
     * @return self
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Gets as recommended.
     *
     * Označení zásoby - Doporučujeme.
     *
     * @return string
     */
    public function getRecommended()
    {
        return $this->recommended;
    }

    /**
     * Sets a new recommended.
     *
     * Označení zásoby - Doporučujeme.
     *
     * @param string $recommended
     *
     * @return self
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Gets as discount.
     *
     * Označení zásoby - Sleva.
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount.
     *
     * Označení zásoby - Sleva.
     *
     * @param string $discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Gets as prepare.
     *
     * Označení zásoby - Připravujeme.
     *
     * @return string
     */
    public function getPrepare()
    {
        return $this->prepare;
    }

    /**
     * Sets a new prepare.
     *
     * Označení zásoby - Připravujeme.
     *
     * @param string $prepare
     *
     * @return self
     */
    public function setPrepare($prepare)
    {
        $this->prepare = $prepare;

        return $this;
    }

    /**
     * Gets as availability.
     *
     * Skladová dostupnost zásoby(skladem, do 3 dnů, na objednávku).
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability.
     *
     * Skladová dostupnost zásoby(skladem, do 3 dnů, na objednávku).
     *
     * @param string $availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Gets as handlingInformation.
     *
     * Doprava zásoby(PPL,pošta,osobní odběr,...)Cena za dopravu .
     *
     * @return string
     */
    public function getHandlingInformation()
    {
        return $this->handlingInformation;
    }

    /**
     * Sets a new handlingInformation.
     *
     * Doprava zásoby(PPL,pošta,osobní odběr,...)Cena za dopravu .
     *
     * @param string $handlingInformation
     *
     * @return self
     */
    public function setHandlingInformation($handlingInformation)
    {
        $this->handlingInformation = $handlingInformation;

        return $this;
    }

    /**
     * Gets as foreignName1.
     *
     * Cizí název skladové položky.
     *
     * @return string
     */
    public function getForeignName1()
    {
        return $this->foreignName1;
    }

    /**
     * Sets a new foreignName1.
     *
     * Cizí název skladové položky.
     *
     * @param string $foreignName1
     *
     * @return self
     */
    public function setForeignName1($foreignName1)
    {
        $this->foreignName1 = $foreignName1;

        return $this;
    }

    /**
     * Gets as foreignNameComplement1.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @return string
     */
    public function getForeignNameComplement1()
    {
        return $this->foreignNameComplement1;
    }

    /**
     * Sets a new foreignNameComplement1.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @param string $foreignNameComplement1
     *
     * @return self
     */
    public function setForeignNameComplement1($foreignNameComplement1)
    {
        $this->foreignNameComplement1 = $foreignNameComplement1;

        return $this;
    }

    /**
     * Gets as foreignName2.
     *
     * Cizí název skladové položky.
     *
     * @return string
     */
    public function getForeignName2()
    {
        return $this->foreignName2;
    }

    /**
     * Sets a new foreignName2.
     *
     * Cizí název skladové položky.
     *
     * @param string $foreignName2
     *
     * @return self
     */
    public function setForeignName2($foreignName2)
    {
        $this->foreignName2 = $foreignName2;

        return $this;
    }

    /**
     * Gets as foreignNameComplement2.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @return string
     */
    public function getForeignNameComplement2()
    {
        return $this->foreignNameComplement2;
    }

    /**
     * Sets a new foreignNameComplement2.
     *
     * Doplňující text či poznámka k názvu skladové zásoby.
     *
     * @param string $foreignNameComplement2
     *
     * @return self
     */
    public function setForeignNameComplement2($foreignNameComplement2)
    {
        $this->foreignNameComplement2 = $foreignNameComplement2;

        return $this;
    }

    /**
     * Gets as description.
     *
     * Stručný popis.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description.
     *
     * Stručný popis.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as description2.
     *
     * Podrobný popis.
     *
     * @return string
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Sets a new description2.
     *
     * Podrobný popis.
     *
     * @param string $description2
     *
     * @return self
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * Adds as picture.
     *
     * Obrázky skladové položky.
     *
     * @return self
     */
    public function addToPictures(\Pohoda\Stock\PictureType $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    /**
     * isset pictures.
     *
     * Obrázky skladové položky.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPictures($index)
    {
        return isset($this->pictures[$index]);
    }

    /**
     * unset pictures.
     *
     * Obrázky skladové položky.
     *
     * @param int|string $index
     */
    public function unsetPictures($index): void
    {
        unset($this->pictures[$index]);
    }

    /**
     * Gets as pictures.
     *
     * Obrázky skladové položky.
     *
     * @return \Pohoda\Stock\PictureType[]
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets a new pictures.
     *
     * Obrázky skladové položky.
     *
     * @param \Pohoda\Stock\PictureType[] $pictures
     *
     * @return self
     */
    public function setPictures(?array $pictures = null)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Adds as idCategory.
     *
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @param int $idCategory
     *
     * @return self
     */
    public function addToCategories($idCategory)
    {
        $this->categories[] = $idCategory;

        return $this;
    }

    /**
     * isset categories.
     *
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCategories($index)
    {
        return isset($this->categories[$index]);
    }

    /**
     * unset categories.
     *
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetCategories($index): void
    {
        unset($this->categories[$index]);
    }

    /**
     * Gets as categories.
     *
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @return int[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets a new categories.
     *
     * Kategorie internetového obchodu u zásoby. Pouze pro export.
     *
     * @param int[] $categories
     *
     * @return self
     */
    public function setCategories(?array $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Adds as relatedFile.
     *
     * Související soubory.
     *
     * @return self
     */
    public function addToRelatedFiles(\Pohoda\Stock\RelatedFileType $relatedFile)
    {
        $this->relatedFiles[] = $relatedFile;

        return $this;
    }

    /**
     * isset relatedFiles.
     *
     * Související soubory.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRelatedFiles($index)
    {
        return isset($this->relatedFiles[$index]);
    }

    /**
     * unset relatedFiles.
     *
     * Související soubory.
     *
     * @param int|string $index
     */
    public function unsetRelatedFiles($index): void
    {
        unset($this->relatedFiles[$index]);
    }

    /**
     * Gets as relatedFiles.
     *
     * Související soubory.
     *
     * @return \Pohoda\Stock\RelatedFileType[]
     */
    public function getRelatedFiles()
    {
        return $this->relatedFiles;
    }

    /**
     * Sets a new relatedFiles.
     *
     * Související soubory.
     *
     * @param \Pohoda\Stock\RelatedFileType[] $relatedFiles
     *
     * @return self
     */
    public function setRelatedFiles(?array $relatedFiles = null)
    {
        $this->relatedFiles = $relatedFiles;

        return $this;
    }

    /**
     * Adds as relatedLink.
     *
     * Související odkazy.
     *
     * @return self
     */
    public function addToRelatedLinks(\Pohoda\Stock\RelatedLinkType $relatedLink)
    {
        $this->relatedLinks[] = $relatedLink;

        return $this;
    }

    /**
     * isset relatedLinks.
     *
     * Související odkazy.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRelatedLinks($index)
    {
        return isset($this->relatedLinks[$index]);
    }

    /**
     * unset relatedLinks.
     *
     * Související odkazy.
     *
     * @param int|string $index
     */
    public function unsetRelatedLinks($index): void
    {
        unset($this->relatedLinks[$index]);
    }

    /**
     * Gets as relatedLinks.
     *
     * Související odkazy.
     *
     * @return \Pohoda\Stock\RelatedLinkType[]
     */
    public function getRelatedLinks()
    {
        return $this->relatedLinks;
    }

    /**
     * Sets a new relatedLinks.
     *
     * Související odkazy.
     *
     * @param \Pohoda\Stock\RelatedLinkType[] $relatedLinks
     *
     * @return self
     */
    public function setRelatedLinks(?array $relatedLinks = null)
    {
        $this->relatedLinks = $relatedLinks;

        return $this;
    }

    /**
     * Adds as idStocks.
     *
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @return self
     */
    public function addToRelatedStocks(\Pohoda\Type\OrderStockItemType $idStocks)
    {
        $this->relatedStocks[] = $idStocks;

        return $this;
    }

    /**
     * isset relatedStocks.
     *
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRelatedStocks($index)
    {
        return isset($this->relatedStocks[$index]);
    }

    /**
     * unset relatedStocks.
     *
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetRelatedStocks($index): void
    {
        unset($this->relatedStocks[$index]);
    }

    /**
     * Gets as relatedStocks.
     *
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @return \Pohoda\Type\OrderStockItemType[]
     */
    public function getRelatedStocks()
    {
        return $this->relatedStocks;
    }

    /**
     * Sets a new relatedStocks.
     *
     * Seznam ID souvisejících zásob. Pouze pro export.
     *
     * @param \Pohoda\Type\OrderStockItemType[] $relatedStocks
     *
     * @return self
     */
    public function setRelatedStocks(?array $relatedStocks = null)
    {
        $this->relatedStocks = $relatedStocks;

        return $this;
    }

    /**
     * Adds as idStocks.
     *
     * Alternativní zásoby. Pouze pro export.
     *
     * @return self
     */
    public function addToAlternativeStocks(\Pohoda\Type\OrderStockItemType $idStocks)
    {
        $this->alternativeStocks[] = $idStocks;

        return $this;
    }

    /**
     * isset alternativeStocks.
     *
     * Alternativní zásoby. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAlternativeStocks($index)
    {
        return isset($this->alternativeStocks[$index]);
    }

    /**
     * unset alternativeStocks.
     *
     * Alternativní zásoby. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetAlternativeStocks($index): void
    {
        unset($this->alternativeStocks[$index]);
    }

    /**
     * Gets as alternativeStocks.
     *
     * Alternativní zásoby. Pouze pro export.
     *
     * @return \Pohoda\Type\OrderStockItemType[]
     */
    public function getAlternativeStocks()
    {
        return $this->alternativeStocks;
    }

    /**
     * Sets a new alternativeStocks.
     *
     * Alternativní zásoby. Pouze pro export.
     *
     * @param \Pohoda\Type\OrderStockItemType[] $alternativeStocks
     *
     * @return self
     */
    public function setAlternativeStocks(?array $alternativeStocks = null)
    {
        $this->alternativeStocks = $alternativeStocks;

        return $this;
    }

    /**
     * Adds as intParameter.
     *
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @return self
     */
    public function addToIntParameters(\Pohoda\Stock\IntParameterType $intParameter)
    {
        $this->intParameters[] = $intParameter;

        return $this;
    }

    /**
     * isset intParameters.
     *
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParameters($index)
    {
        return isset($this->intParameters[$index]);
    }

    /**
     * unset intParameters.
     *
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @param int|string $index
     */
    public function unsetIntParameters($index): void
    {
        unset($this->intParameters[$index]);
    }

    /**
     * Gets as intParameters.
     *
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @return \Pohoda\Stock\IntParameterType[]
     */
    public function getIntParameters()
    {
        return $this->intParameters;
    }

    /**
     * Sets a new intParameters.
     *
     * Internetové parametry zásoby. Pouze pro export.
     *
     * @param \Pohoda\Stock\IntParameterType[] $intParameters
     *
     * @return self
     */
    public function setIntParameters(?array $intParameters = null)
    {
        $this->intParameters = $intParameters;

        return $this;
    }

    /**
     * Gets as note.
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
     * Sets a new note.
     *
     * Poznámka.
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
     * Gets as markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord.
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     *
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;

        return $this;
    }

    /**
     * Adds as label.
     *
     * Štítky záznamu.
     *
     * @return self
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;

        return $this;
    }

    /**
     * isset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels.
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     */
    public function unsetLabels($index): void
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels.
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
     * Sets a new labels.
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     *
     * @return self
     */
    public function setLabels(?array $labels = null)
    {
        $this->labels = $labels;

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
