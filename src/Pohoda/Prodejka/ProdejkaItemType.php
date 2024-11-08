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

namespace Pohoda\Prodejka;

/**
 * Class representing ProdejkaItemType.
 *
 * XSD Type: prodejkaItemType
 */
class ProdejkaItemType
{
    /**
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     */
    private ?\Pohoda\Type\LinkItemType $link = null;

    /**
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     */
    private ?\Pohoda\Type\LinkedDocumentType $linkedDocument = null;

    /**
     * Odkaz na refundovanou položku. Zkontroluje se, zda je možné provést refundaci. Pokud ano, vytvoří se vazba na refundované položce. Nepřenášejí se žádná políčka z refundované položky.
     */
    private ?\Pohoda\Type\SourceDocumentItemType $refundItem = null;

    /**
     * ID položky dokladu (jen pro export).
     */
    private ?int $id = null;
    private ?string $extId = null;

    /**
     * Text položky.
     */
    private ?string $text = null;

    /**
     * Množství.
     */
    private ?float $quantity = null;

    /**
     * Měrná jednotka.
     */
    private ?string $unit = null;

    /**
     * Koeficient.
     */
    private ?float $coefficient = null;

    /**
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
     */
    private ?string $payVAT = null;

    /**
     * Sazba DPH.
     */
    private ?\Pohoda\Type\VatRateType $rateVAT = null;

    /**
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     */
    private ?float $percentVAT = null;

    /**
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
     */
    private ?float $discountPercentage = null;

    /**
     * Kč.
     */
    private ?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null;

    /**
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     */
    private ?\Pohoda\Type\RecyclingContribType $recyclingContrib = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Kód.
     */
    private ?string $code = null;

    /**
     * Délka záruky.
     */
    private ?int $guarantee = null;

    /**
     * Typ záruky.
     */
    private ?string $guaranteeType = null;

    /**
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     */
    private ?\Pohoda\Type\StockItemType $stockItem = null;

    /**
     * Předkontace.
     */
    private ?\Pohoda\Type\RefType $accounting = null;

    /**
     * Středisko.
     */
    private ?\Pohoda\Type\RefType $centre = null;

    /**
     * Činnost.
     */
    private ?\Pohoda\Type\RefType $activity = null;

    /**
     * Zakázka.
     */
    private ?\Pohoda\Type\RefType $contract = null;

    /**
     * Datum expirace.
     */
    private ?\DateTime $expirationDate = null;

    /**
     * Typ položky EET (pouze CZ verze).
     */
    private ?string $eETItem = null;

    /**
     * Položka eKasa (pouze SK verze).
     */
    private ?\Pohoda\Prodejka\EKasaItemType $eKasaItem = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as link.
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *
     * @return \Pohoda\Type\LinkItemType
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link.
     *
     * Pomocí tohoto bloku lze vytvořit položku z jiného dokladu. Vložený doklad lze upravit pomocí zadaných parametrů u dokladu.
     *
     * @return self
     */
    public function setLink(?\Pohoda\Type\LinkItemType $link = null)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Gets as linkedDocument.
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     *
     * @return \Pohoda\Type\LinkedDocumentType
     */
    public function getLinkedDocument()
    {
        return $this->linkedDocument;
    }

    /**
     * Sets a new linkedDocument.
     *
     * Vazba na doklad. Informace o vazbě položky exportovaného dokladu na položku jiného dokladu (pouze pro export).
     *
     * @return self
     */
    public function setLinkedDocument(?\Pohoda\Type\LinkedDocumentType $linkedDocument = null)
    {
        $this->linkedDocument = $linkedDocument;

        return $this;
    }

    /**
     * Gets as refundItem.
     *
     * Odkaz na refundovanou položku. Zkontroluje se, zda je možné provést refundaci. Pokud ano, vytvoří se vazba na refundované položce. Nepřenášejí se žádná políčka z refundované položky.
     *
     * @return \Pohoda\Type\SourceDocumentItemType
     */
    public function getRefundItem()
    {
        return $this->refundItem;
    }

    /**
     * Sets a new refundItem.
     *
     * Odkaz na refundovanou položku. Zkontroluje se, zda je možné provést refundaci. Pokud ano, vytvoří se vazba na refundované položce. Nepřenášejí se žádná políčka z refundované položky.
     *
     * @return self
     */
    public function setRefundItem(?\Pohoda\Type\SourceDocumentItemType $refundItem = null)
    {
        $this->refundItem = $refundItem;

        return $this;
    }

    /**
     * Gets as id.
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
     * Sets a new id.
     *
     * ID položky dokladu (jen pro export).
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
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * @param string $extId
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as text.
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
     * Sets a new text.
     *
     * Text položky.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Gets as quantity.
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
     * Sets a new quantity.
     *
     * Množství.
     *
     * @param float $quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
     * Gets as coefficient.
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
     * Sets a new coefficient.
     *
     * Koeficient.
     *
     * @param float $coefficient
     *
     * @return self
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Gets as payVAT.
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
     * Sets a new payVAT.
     *
     * Ceny jsou uvedeny: bez DPH, včetně DPH. Výchozí hodnota se týká pouze textové položky. Pro skladové položky bude brána výchozí hodnota dle nastavení v programu POHODA.
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
     * Gets as rateVAT.
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
     * Sets a new rateVAT.
     *
     * Sazba DPH.
     *
     * @return self
     */
    public function setRateVAT(?\Pohoda\Type\VatRateType $rateVAT = null)
    {
        $this->rateVAT = $rateVAT;

        return $this;
    }

    /**
     * Gets as percentVAT.
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
     * Sets a new percentVAT.
     *
     * Historická sazba v procentech. Povoluje se v Globálním nastavení.
     *
     * @param float $percentVAT
     *
     * @return self
     */
    public function setPercentVAT($percentVAT)
    {
        $this->percentVAT = $percentVAT;

        return $this;
    }

    /**
     * Gets as discountPercentage.
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
     * Sets a new discountPercentage.
     *
     * Sleva v procentech. Pokud není uvedena, bere se jako hodnota slevy z priceLevel dokumentu. Pokud není definován ani priceLevel bere se jako NULOVÁ.
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
     * Gets as homeCurrency.
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
     * Sets a new homeCurrency.
     *
     * Kč.
     *
     * @return self
     */
    public function setHomeCurrency(?\Pohoda\Type\TypeCurrencyHomeItemType $homeCurrency = null)
    {
        $this->homeCurrency = $homeCurrency;

        return $this;
    }

    /**
     * Gets as recyclingContrib.
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
     * Sets a new recyclingContrib.
     *
     * Recyklační příspěvek položky. Pokud při importu dokladu tento element není na položce uveden, bude na skladové položce dokladu nastaven dle skladové zásoby. U textové položky nebude nastaven.
     *
     * @return self
     */
    public function setRecyclingContrib(?\Pohoda\Type\RecyclingContribType $recyclingContrib = null)
    {
        $this->recyclingContrib = $recyclingContrib;

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
     * Gets as code.
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
     * Sets a new code.
     *
     * Kód.
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
     * Gets as stockItem.
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
     * Sets a new stockItem.
     *
     * Údaje potřebné k nalezení skladové zásoby vložené do položky. Pokud zde tento element není, jedná se o textovou položku.
     *
     * @return self
     */
    public function setStockItem(?\Pohoda\Type\StockItemType $stockItem = null)
    {
        $this->stockItem = $stockItem;

        return $this;
    }

    /**
     * Gets as accounting.
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
     * Sets a new accounting.
     *
     * Předkontace.
     *
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\RefType $accounting = null)
    {
        $this->accounting = $accounting;

        return $this;
    }

    /**
     * Gets as centre.
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
     * Sets a new centre.
     *
     * Středisko.
     *
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Gets as activity.
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
     * Sets a new activity.
     *
     * Činnost.
     *
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Gets as contract.
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
     * Sets a new contract.
     *
     * Zakázka.
     *
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Gets as expirationDate.
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
     * Sets a new expirationDate.
     *
     * Datum expirace.
     *
     * @return self
     */
    public function setExpirationDate(?\DateTime $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;

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
     * Gets as eKasaItem.
     *
     * Položka eKasa (pouze SK verze).
     *
     * @return \Pohoda\Prodejka\EKasaItemType
     */
    public function getEKasaItem()
    {
        return $this->eKasaItem;
    }

    /**
     * Sets a new eKasaItem.
     *
     * Položka eKasa (pouze SK verze).
     *
     * @return self
     */
    public function setEKasaItem(?\Pohoda\Prodejka\EKasaItemType $eKasaItem = null)
    {
        $this->eKasaItem = $eKasaItem;

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
