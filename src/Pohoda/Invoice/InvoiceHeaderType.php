<?php

namespace Pohoda\Invoice;

/**
 * Class representing InvoiceHeaderType
 *
 *
 * XSD Type: invoiceHeaderType
 */
class InvoiceHeaderType
{
    /**
     * ID záznamu (jen pro export).
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
     * Typ faktury.
     *
     * @var string $invoiceType
     */
    private $invoiceType = null;

    /**
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @var string $storno
     */
    private $storno = null;

    /**
     * Typ ostatní pohledávky, závazku. Používá se jen v Daňové evidenci.
     *
     * @var string $sphereType
     */
    private $sphereType = null;

    /**
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
     *
     * @var \Pohoda\Type\NumberType $number
     */
    private $number = null;

    /**
     * Variabilní symbol. Pokud není hodnota zadána, použije se z čísla dokladu vypuštěním nečíselných znaků.
     *
     * @var string $symVar
     */
    private $symVar = null;

    /**
     * Číslo dokladu, používá se jako variabilní symbol při vystavení příkazu k úhradě a při likvidaci.
     *
     * @var string $originalDocument
     */
    private $originalDocument = null;

    /**
     * Původní číslo dokladu, pro doklady typu Dobropis, Vrubopis (pouze SK verze).
     *
     * @var string $originalDocumentNumber
     */
    private $originalDocumentNumber = null;

    /**
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Datum vystavení faktury. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Datum zdanitelného plnění / Datum odpočtu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @var \DateTime $dateTax
     */
    private $dateTax = null;

    /**
     * Datum účetního případu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @var \DateTime $dateAccounting
     */
    private $dateAccounting = null;

    /**
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven. Pouze pro doklady typu Přijatá faktura, Ostatní závazek, Vydaná Faktura - opravný daňový doklad (pouze CZ verze).
     *
     * @var \DateTime $dateKHDPH
     */
    private $dateKHDPH = null;

    /**
     * Datum splatnosti. Pokud hodnota není zadaná, vyplní v závislosti na datu vystavení
     *  faktury dle nastavení v poli "Splatnost pohledávek" agendy "Globální nastavení".
     *
     * @var \DateTime $dateDue
     */
    private $dateDue = null;

    /**
     * Datum uplatnění DPH.Datum pro zařazení dobropisu, resp. opravného daňového dokladu do přiznání k dani z přidané hodnoty a uplatnění odpočtu DPH.
     *
     * @var \DateTime $dateApplicationVAT
     */
    private $dateApplicationVAT = null;

    /**
     * Datum dodání tovaru (pouze SK verze, Ostatní závazky, Přijaté faktury).
     *
     * @var \DateTime $dateDelivery
     */
    private $dateDelivery = null;

    /**
     * Předkontace. Pokud není uveden typ předkontace, je nastavena předkontace dle uživatelského nastavení programu Pohoda.
     *
     * @var \Pohoda\Type\AccountingType $accounting
     */
    private $accounting = null;

    /**
     * Členění DPH, přednastavená hodnota je "inland". Nepoužívá se u typů "Proforma" a "Zálohová" faktura.
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
     * Evidenční číslo KH DPH. Pokud je na dokladu uvedeno, použije se pro kontrolní hlášení. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze CZ verze.
     *
     * @var string $numberKHDPH
     */
    private $numberKHDPH = null;

    /**
     * Pořadové číslo KV DPH. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze SK verze.
     *
     * @var string $numberKVDPH
     */
    private $numberKVDPH = null;

    /**
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Zákazníkova adresa.
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Osobní adresa.
     *
     * @var \Pohoda\Type\MyAddressType $myIdentity
     */
    private $myIdentity = null;

    /**
     * Objednávka.
     *
     * @var \Pohoda\Type\RefType $order
     */
    private $order = null;

    /**
     * Číslo objednávky na jejímž základě byla faktura vystavena.
     *
     * @var string $numberOrder
     */
    private $numberOrder = null;

    /**
     * Datum objednávky.
     *
     * @var \DateTime $dateOrder
     */
    private $dateOrder = null;

    /**
     * Cenová hladina odběratele. Používá se jen u typů vydaná faktura,
     *  vydaný vrubopis, vydaná zálohová faktura, vydaná proforma faktura.
     *
     * @var \Pohoda\Type\RefType $priceLevel
     */
    private $priceLevel = null;

    /**
     * Forma úhrady. Implicitně je nastaveno příkazem.
     *
     * @var \Pohoda\Type\PaymentType $paymentType
     */
    private $paymentType = null;

    /**
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku.
     *  (Používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @var \Pohoda\Type\AccountType $account
     */
    private $account = null;

    /**
     * Konstantní symbol.
     *
     * @var string $symConst
     */
    private $symConst = null;

    /**
     * Specifický symbol. Používá se jen u závazků.
     *
     * @var string $symSpec
     */
    private $symSpec = null;

    /**
     * Číslo bankovního účtu, na který dlužnou částku proplatíme. Číslo bude uvedeno na příkazu k úhradě.
     *  (Používá se jen závazků, dobropisu - vydané faktury).
     *
     * @var \Pohoda\Invoice\InvoiceHeaderType\PaymentAccountAType $paymentAccount
     */
    private $paymentAccount = null;

    /**
     * Zpráva pro příjemce (Přijaté faktury, Přijaté zálohové faktury a Ostatní závazky).
     *
     * @var string $messageForRecipient
     */
    private $messageForRecipient = null;

    /**
     * Datum vystavení příkazu k úhradě (pouze pro export Přijatých faktur, Přijatých zálohových faktur a Ostatních závazků).
     *
     * @var \DateTime $dateOfPaymentOrder
     */
    private $dateOfPaymentOrder = null;

    /**
     * Příznak dokladu "Placeno přes terminál".Pouze pro doklad, který má nastaven typ úhrady "Platební kartou".
     *
     * @var string $paymentTerminal
     */
    private $paymentTerminal = null;

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
     * Registrace DPH v EU.
     *
     * @var \Pohoda\Type\RefTypeRegVATinEUType $regVATinEU
     */
    private $regVATinEU = null;

    /**
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @var \Pohoda\Type\MOSStypeType $mOSS
     */
    private $mOSS = null;

    /**
     * Důkazní prostředky (OSS).
     *
     * @var string[] $evidentiaryResourcesMOSS
     */
    private $evidentiaryResourcesMOSS = null;

    /**
     * Účetní období (OSS).
     *
     * @var string $accountingPeriodMOSS
     */
    private $accountingPeriodMOSS = null;

    /**
     * Datum uskutečnění zdanitelného plnění OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @var \DateTime $dateTaxOriginalDocumentMOSS
     */
    private $dateTaxOriginalDocumentMOSS = null;

    /**
     * Vykázat doklad jako opravu OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @var string $correctionMOSS
     */
    private $correctionMOSS = null;

    /**
     * Dopravce (pouze vydané faktury a vydané zálohové faktury).
     *
     * @var \Pohoda\Type\CarrierType $carrier
     */
    private $carrier = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Interní poznámka, libovolný text, který nevstupuje do tiskových sestav.
     *
     * @var string $intNote
     */
    private $intNote = null;

    /**
     * Stav likvidace faktury. Pouze pro export, při importu je ignorováno.
     *
     * @var \Pohoda\Type\LiquidationType $liquidation
     */
    private $liquidation = null;

    /**
     * Hodnota pole Uplatněno. Pouze vydané a přijaté zálohové faktury. Jen pro export.
     *
     * @var float $applied
     */
    private $applied = null;

    /**
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @var string $histRate
     */
    private $histRate = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @var string $lock1
     */
    private $lock1 = null;

    /**
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @var string $lock2
     */
    private $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[] $labels
     */
    private $labels = null;

    /**
     * Výkaz pro intrastat.
     *
     * @var \Pohoda\Invoice\IntrastatType $intrastat
     */
    private $intrastat = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Podmíněná kontrola dokladu.
     *
     * @var \Pohoda\Type\TypeValidateType $validate
     */
    private $validate = null;

    /**
     * Odložený výdej. Hodnota 'true' nastaví vkládání skladových zásob ve formě textových položek (s vazbou na agendu Zásoby).
     *  Takto vložená položka nevytváří ve faktuře skladový pohyb. Ve stavovém řádku vydané faktury je označena jako Textová položka (s vazbou na agendu Zásoby). Používá se jen v agendě Vydané faktury.
     * .
     *
     * @var string $postponedIssue
     */
    private $postponedIssue = null;

    /**
     * Gets as id
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Gets as invoiceType
     *
     * Typ faktury.
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->invoiceType;
    }

    /**
     * Sets a new invoiceType
     *
     * Typ faktury.
     *
     * @param string $invoiceType
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->invoiceType = $invoiceType;
        return $this;
    }

    /**
     * Gets as storno
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @return string
     */
    public function getStorno()
    {
        return $this->storno;
    }

    /**
     * Sets a new storno
     *
     * Příznak „Storno/Stornujícího“ dokladu (pouze pro export).
     *
     * @param string $storno
     * @return self
     */
    public function setStorno($storno)
    {
        $this->storno = $storno;
        return $this;
    }

    /**
     * Gets as sphereType
     *
     * Typ ostatní pohledávky, závazku. Používá se jen v Daňové evidenci.
     *
     * @return string
     */
    public function getSphereType()
    {
        return $this->sphereType;
    }

    /**
     * Sets a new sphereType
     *
     * Typ ostatní pohledávky, závazku. Používá se jen v Daňové evidenci.
     *
     * @param string $sphereType
     * @return self
     */
    public function setSphereType($sphereType)
    {
        $this->sphereType = $sphereType;
        return $this;
    }

    /**
     * Gets as number
     *
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená
     *  v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
     *
     * @param \Pohoda\Type\NumberType $number
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as symVar
     *
     * Variabilní symbol. Pokud není hodnota zadána, použije se z čísla dokladu vypuštěním nečíselných znaků.
     *
     * @return string
     */
    public function getSymVar()
    {
        return $this->symVar;
    }

    /**
     * Sets a new symVar
     *
     * Variabilní symbol. Pokud není hodnota zadána, použije se z čísla dokladu vypuštěním nečíselných znaků.
     *
     * @param string $symVar
     * @return self
     */
    public function setSymVar($symVar)
    {
        $this->symVar = $symVar;
        return $this;
    }

    /**
     * Gets as originalDocument
     *
     * Číslo dokladu, používá se jako variabilní symbol při vystavení příkazu k úhradě a při likvidaci.
     *
     * @return string
     */
    public function getOriginalDocument()
    {
        return $this->originalDocument;
    }

    /**
     * Sets a new originalDocument
     *
     * Číslo dokladu, používá se jako variabilní symbol při vystavení příkazu k úhradě a při likvidaci.
     *
     * @param string $originalDocument
     * @return self
     */
    public function setOriginalDocument($originalDocument)
    {
        $this->originalDocument = $originalDocument;
        return $this;
    }

    /**
     * Gets as originalDocumentNumber
     *
     * Původní číslo dokladu, pro doklady typu Dobropis, Vrubopis (pouze SK verze).
     *
     * @return string
     */
    public function getOriginalDocumentNumber()
    {
        return $this->originalDocumentNumber;
    }

    /**
     * Sets a new originalDocumentNumber
     *
     * Původní číslo dokladu, pro doklady typu Dobropis, Vrubopis (pouze SK verze).
     *
     * @param string $originalDocumentNumber
     * @return self
     */
    public function setOriginalDocumentNumber($originalDocumentNumber)
    {
        $this->originalDocumentNumber = $originalDocumentNumber;
        return $this;
    }

    /**
     * Gets as symPar
     *
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
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
     * Párový symbol. Používá se jen v účetnictví (dříve PU).
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
     * Gets as date
     *
     * Datum vystavení faktury. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
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
     * Datum vystavení faktury. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
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
     * Gets as dateTax
     *
     * Datum zdanitelného plnění / Datum odpočtu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @return \DateTime
     */
    public function getDateTax()
    {
        return $this->dateTax;
    }

    /**
     * Sets a new dateTax
     *
     * Datum zdanitelného plnění / Datum odpočtu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @param \DateTime $dateTax
     * @return self
     */
    public function setDateTax(?\DateTime $dateTax = null)
    {
        $this->dateTax = $dateTax;
        return $this;
    }

    /**
     * Gets as dateAccounting
     *
     * Datum účetního případu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @return \DateTime
     */
    public function getDateAccounting()
    {
        return $this->dateAccounting;
    }

    /**
     * Sets a new dateAccounting
     *
     * Datum účetního případu. Pokud není hodnota zadaná, použije se hodnota z elementu "date".
     *
     * @param \DateTime $dateAccounting
     * @return self
     */
    public function setDateAccounting(?\DateTime $dateAccounting = null)
    {
        $this->dateAccounting = $dateAccounting;
        return $this;
    }

    /**
     * Gets as dateKHDPH
     *
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven. Pouze pro doklady typu Přijatá faktura, Ostatní závazek, Vydaná Faktura - opravný daňový doklad (pouze CZ verze).
     *
     * @return \DateTime
     */
    public function getDateKHDPH()
    {
        return $this->dateKHDPH;
    }

    /**
     * Sets a new dateKHDPH
     *
     * Datum KH DPH. Pokud není datum KH DPH uveden, nebude na dokladu nastaven. Pouze pro doklady typu Přijatá faktura, Ostatní závazek, Vydaná Faktura - opravný daňový doklad (pouze CZ verze).
     *
     * @param \DateTime $dateKHDPH
     * @return self
     */
    public function setDateKHDPH(?\DateTime $dateKHDPH = null)
    {
        $this->dateKHDPH = $dateKHDPH;
        return $this;
    }

    /**
     * Gets as dateDue
     *
     * Datum splatnosti. Pokud hodnota není zadaná, vyplní v závislosti na datu vystavení
     *  faktury dle nastavení v poli "Splatnost pohledávek" agendy "Globální nastavení".
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Sets a new dateDue
     *
     * Datum splatnosti. Pokud hodnota není zadaná, vyplní v závislosti na datu vystavení
     *  faktury dle nastavení v poli "Splatnost pohledávek" agendy "Globální nastavení".
     *
     * @param \DateTime $dateDue
     * @return self
     */
    public function setDateDue(?\DateTime $dateDue = null)
    {
        $this->dateDue = $dateDue;
        return $this;
    }

    /**
     * Gets as dateApplicationVAT
     *
     * Datum uplatnění DPH.Datum pro zařazení dobropisu, resp. opravného daňového dokladu do přiznání k dani z přidané hodnoty a uplatnění odpočtu DPH.
     *
     * @return \DateTime
     */
    public function getDateApplicationVAT()
    {
        return $this->dateApplicationVAT;
    }

    /**
     * Sets a new dateApplicationVAT
     *
     * Datum uplatnění DPH.Datum pro zařazení dobropisu, resp. opravného daňového dokladu do přiznání k dani z přidané hodnoty a uplatnění odpočtu DPH.
     *
     * @param \DateTime $dateApplicationVAT
     * @return self
     */
    public function setDateApplicationVAT(?\DateTime $dateApplicationVAT = null)
    {
        $this->dateApplicationVAT = $dateApplicationVAT;
        return $this;
    }

    /**
     * Gets as dateDelivery
     *
     * Datum dodání tovaru (pouze SK verze, Ostatní závazky, Přijaté faktury).
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Sets a new dateDelivery
     *
     * Datum dodání tovaru (pouze SK verze, Ostatní závazky, Přijaté faktury).
     *
     * @param \DateTime $dateDelivery
     * @return self
     */
    public function setDateDelivery(?\DateTime $dateDelivery = null)
    {
        $this->dateDelivery = $dateDelivery;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastavena předkontace dle uživatelského nastavení programu Pohoda.
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace. Pokud není uveden typ předkontace, je nastavena předkontace dle uživatelského nastavení programu Pohoda.
     *
     * @param \Pohoda\Type\AccountingType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\AccountingType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as classificationVAT
     *
     * Členění DPH, přednastavená hodnota je "inland". Nepoužívá se u typů "Proforma" a "Zálohová" faktura.
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
     * Členění DPH, přednastavená hodnota je "inland". Nepoužívá se u typů "Proforma" a "Zálohová" faktura.
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
     * Gets as numberKHDPH
     *
     * Evidenční číslo KH DPH. Pokud je na dokladu uvedeno, použije se pro kontrolní hlášení. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze CZ verze.
     *
     * @return string
     */
    public function getNumberKHDPH()
    {
        return $this->numberKHDPH;
    }

    /**
     * Sets a new numberKHDPH
     *
     * Evidenční číslo KH DPH. Pokud je na dokladu uvedeno, použije se pro kontrolní hlášení. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze CZ verze.
     *
     * @param string $numberKHDPH
     * @return self
     */
    public function setNumberKHDPH($numberKHDPH)
    {
        $this->numberKHDPH = $numberKHDPH;
        return $this;
    }

    /**
     * Gets as numberKVDPH
     *
     * Pořadové číslo KV DPH. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze SK verze.
     *
     * @return string
     */
    public function getNumberKVDPH()
    {
        return $this->numberKVDPH;
    }

    /**
     * Sets a new numberKVDPH
     *
     * Pořadové číslo KV DPH. Jen Ostatní pohledávky, Vydané Faktury (podmíněno v Globálním nastavení). Pouze SK verze.
     *
     * @param string $numberKVDPH
     * @return self
     */
    public function setNumberKVDPH($numberKVDPH)
    {
        $this->numberKVDPH = $numberKVDPH;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Text dokladu. Tento element je vyžadován při vytvoření dokladu.
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
     * Gets as partnerIdentity
     *
     * Zákazníkova adresa.
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity
     *
     * Zákazníkova adresa.
     *
     * @param \Pohoda\Type\AddressType $partnerIdentity
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;
        return $this;
    }

    /**
     * Gets as myIdentity
     *
     * Osobní adresa.
     *
     * @return \Pohoda\Type\MyAddressType
     */
    public function getMyIdentity()
    {
        return $this->myIdentity;
    }

    /**
     * Sets a new myIdentity
     *
     * Osobní adresa.
     *
     * @param \Pohoda\Type\MyAddressType $myIdentity
     * @return self
     */
    public function setMyIdentity(?\Pohoda\Type\MyAddressType $myIdentity = null)
    {
        $this->myIdentity = $myIdentity;
        return $this;
    }

    /**
     * Gets as order
     *
     * Objednávka.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Objednávka.
     *
     * @param \Pohoda\Type\RefType $order
     * @return self
     */
    public function setOrder(?\Pohoda\Type\RefType $order = null)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as numberOrder
     *
     * Číslo objednávky na jejímž základě byla faktura vystavena.
     *
     * @return string
     */
    public function getNumberOrder()
    {
        return $this->numberOrder;
    }

    /**
     * Sets a new numberOrder
     *
     * Číslo objednávky na jejímž základě byla faktura vystavena.
     *
     * @param string $numberOrder
     * @return self
     */
    public function setNumberOrder($numberOrder)
    {
        $this->numberOrder = $numberOrder;
        return $this;
    }

    /**
     * Gets as dateOrder
     *
     * Datum objednávky.
     *
     * @return \DateTime
     */
    public function getDateOrder()
    {
        return $this->dateOrder;
    }

    /**
     * Sets a new dateOrder
     *
     * Datum objednávky.
     *
     * @param \DateTime $dateOrder
     * @return self
     */
    public function setDateOrder(?\DateTime $dateOrder = null)
    {
        $this->dateOrder = $dateOrder;
        return $this;
    }

    /**
     * Gets as priceLevel
     *
     * Cenová hladina odběratele. Používá se jen u typů vydaná faktura,
     *  vydaný vrubopis, vydaná zálohová faktura, vydaná proforma faktura.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Sets a new priceLevel
     *
     * Cenová hladina odběratele. Používá se jen u typů vydaná faktura,
     *  vydaný vrubopis, vydaná zálohová faktura, vydaná proforma faktura.
     *
     * @param \Pohoda\Type\RefType $priceLevel
     * @return self
     */
    public function setPriceLevel(?\Pohoda\Type\RefType $priceLevel = null)
    {
        $this->priceLevel = $priceLevel;
        return $this;
    }

    /**
     * Gets as paymentType
     *
     * Forma úhrady. Implicitně je nastaveno příkazem.
     *
     * @return \Pohoda\Type\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Forma úhrady. Implicitně je nastaveno příkazem.
     *
     * @param \Pohoda\Type\PaymentType $paymentType
     * @return self
     */
    public function setPaymentType(?\Pohoda\Type\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as account
     *
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku.
     *  (Používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @return \Pohoda\Type\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Bankovní účet nebo hotovostní pokladna, na kterou chcete nechat proplatit tuto pohledávku.
     *  (Používá se jen u pohledávek.) Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @param \Pohoda\Type\AccountType $account
     * @return self
     */
    public function setAccount(?\Pohoda\Type\AccountType $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as symConst
     *
     * Konstantní symbol.
     *
     * @return string
     */
    public function getSymConst()
    {
        return $this->symConst;
    }

    /**
     * Sets a new symConst
     *
     * Konstantní symbol.
     *
     * @param string $symConst
     * @return self
     */
    public function setSymConst($symConst)
    {
        $this->symConst = $symConst;
        return $this;
    }

    /**
     * Gets as symSpec
     *
     * Specifický symbol. Používá se jen u závazků.
     *
     * @return string
     */
    public function getSymSpec()
    {
        return $this->symSpec;
    }

    /**
     * Sets a new symSpec
     *
     * Specifický symbol. Používá se jen u závazků.
     *
     * @param string $symSpec
     * @return self
     */
    public function setSymSpec($symSpec)
    {
        $this->symSpec = $symSpec;
        return $this;
    }

    /**
     * Gets as paymentAccount
     *
     * Číslo bankovního účtu, na který dlužnou částku proplatíme. Číslo bude uvedeno na příkazu k úhradě.
     *  (Používá se jen závazků, dobropisu - vydané faktury).
     *
     * @return \Pohoda\Invoice\InvoiceHeaderType\PaymentAccountAType
     */
    public function getPaymentAccount()
    {
        return $this->paymentAccount;
    }

    /**
     * Sets a new paymentAccount
     *
     * Číslo bankovního účtu, na který dlužnou částku proplatíme. Číslo bude uvedeno na příkazu k úhradě.
     *  (Používá se jen závazků, dobropisu - vydané faktury).
     *
     * @param \Pohoda\Invoice\InvoiceHeaderType\PaymentAccountAType $paymentAccount
     * @return self
     */
    public function setPaymentAccount(?\Pohoda\Invoice\InvoiceHeaderType\PaymentAccountAType $paymentAccount = null)
    {
        $this->paymentAccount = $paymentAccount;
        return $this;
    }

    /**
     * Gets as messageForRecipient
     *
     * Zpráva pro příjemce (Přijaté faktury, Přijaté zálohové faktury a Ostatní závazky).
     *
     * @return string
     */
    public function getMessageForRecipient()
    {
        return $this->messageForRecipient;
    }

    /**
     * Sets a new messageForRecipient
     *
     * Zpráva pro příjemce (Přijaté faktury, Přijaté zálohové faktury a Ostatní závazky).
     *
     * @param string $messageForRecipient
     * @return self
     */
    public function setMessageForRecipient($messageForRecipient)
    {
        $this->messageForRecipient = $messageForRecipient;
        return $this;
    }

    /**
     * Gets as dateOfPaymentOrder
     *
     * Datum vystavení příkazu k úhradě (pouze pro export Přijatých faktur, Přijatých zálohových faktur a Ostatních závazků).
     *
     * @return \DateTime
     */
    public function getDateOfPaymentOrder()
    {
        return $this->dateOfPaymentOrder;
    }

    /**
     * Sets a new dateOfPaymentOrder
     *
     * Datum vystavení příkazu k úhradě (pouze pro export Přijatých faktur, Přijatých zálohových faktur a Ostatních závazků).
     *
     * @param \DateTime $dateOfPaymentOrder
     * @return self
     */
    public function setDateOfPaymentOrder(?\DateTime $dateOfPaymentOrder = null)
    {
        $this->dateOfPaymentOrder = $dateOfPaymentOrder;
        return $this;
    }

    /**
     * Gets as paymentTerminal
     *
     * Příznak dokladu "Placeno přes terminál".Pouze pro doklad, který má nastaven typ úhrady "Platební kartou".
     *
     * @return string
     */
    public function getPaymentTerminal()
    {
        return $this->paymentTerminal;
    }

    /**
     * Sets a new paymentTerminal
     *
     * Příznak dokladu "Placeno přes terminál".Pouze pro doklad, který má nastaven typ úhrady "Platební kartou".
     *
     * @param string $paymentTerminal
     * @return self
     */
    public function setPaymentTerminal($paymentTerminal)
    {
        $this->paymentTerminal = $paymentTerminal;
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
     * Gets as regVATinEU
     *
     * Registrace DPH v EU.
     *
     * @return \Pohoda\Type\RefTypeRegVATinEUType
     */
    public function getRegVATinEU()
    {
        return $this->regVATinEU;
    }

    /**
     * Sets a new regVATinEU
     *
     * Registrace DPH v EU.
     *
     * @param \Pohoda\Type\RefTypeRegVATinEUType $regVATinEU
     * @return self
     */
    public function setRegVATinEU(?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null)
    {
        $this->regVATinEU = $regVATinEU;
        return $this;
    }

    /**
     * Gets as mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getMOSS()
    {
        return $this->mOSS;
    }

    /**
     * Sets a new mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @param \Pohoda\Type\MOSStypeType $mOSS
     * @return self
     */
    public function setMOSS(?\Pohoda\Type\MOSStypeType $mOSS = null)
    {
        $this->mOSS = $mOSS;
        return $this;
    }

    /**
     * Adds as ids
     *
     * Důkazní prostředky (OSS).
     *
     * @return self
     * @param string $ids
     */
    public function addToEvidentiaryResourcesMOSS($ids)
    {
        $this->evidentiaryResourcesMOSS[] = $ids;
        return $this;
    }

    /**
     * isset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidentiaryResourcesMOSS($index)
    {
        return isset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * unset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidentiaryResourcesMOSS($index)
    {
        unset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * Gets as evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @return string[]
     */
    public function getEvidentiaryResourcesMOSS()
    {
        return $this->evidentiaryResourcesMOSS;
    }

    /**
     * Sets a new evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param string[] $evidentiaryResourcesMOSS
     * @return self
     */
    public function setEvidentiaryResourcesMOSS(array $evidentiaryResourcesMOSS = null)
    {
        $this->evidentiaryResourcesMOSS = $evidentiaryResourcesMOSS;
        return $this;
    }

    /**
     * Gets as accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @return string
     */
    public function getAccountingPeriodMOSS()
    {
        return $this->accountingPeriodMOSS;
    }

    /**
     * Sets a new accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @param string $accountingPeriodMOSS
     * @return self
     */
    public function setAccountingPeriodMOSS($accountingPeriodMOSS)
    {
        $this->accountingPeriodMOSS = $accountingPeriodMOSS;
        return $this;
    }

    /**
     * Gets as dateTaxOriginalDocumentMOSS
     *
     * Datum uskutečnění zdanitelného plnění OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @return \DateTime
     */
    public function getDateTaxOriginalDocumentMOSS()
    {
        return $this->dateTaxOriginalDocumentMOSS;
    }

    /**
     * Sets a new dateTaxOriginalDocumentMOSS
     *
     * Datum uskutečnění zdanitelného plnění OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @param \DateTime $dateTaxOriginalDocumentMOSS
     * @return self
     */
    public function setDateTaxOriginalDocumentMOSS(?\DateTime $dateTaxOriginalDocumentMOSS = null)
    {
        $this->dateTaxOriginalDocumentMOSS = $dateTaxOriginalDocumentMOSS;
        return $this;
    }

    /**
     * Gets as correctionMOSS
     *
     * Vykázat doklad jako opravu OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @return string
     */
    public function getCorrectionMOSS()
    {
        return $this->correctionMOSS;
    }

    /**
     * Sets a new correctionMOSS
     *
     * Vykázat doklad jako opravu OSS (pouze pro opravné daňové doklady, dobropisy nebo vrubopisy).
     *
     * @param string $correctionMOSS
     * @return self
     */
    public function setCorrectionMOSS($correctionMOSS)
    {
        $this->correctionMOSS = $correctionMOSS;
        return $this;
    }

    /**
     * Gets as carrier
     *
     * Dopravce (pouze vydané faktury a vydané zálohové faktury).
     *
     * @return \Pohoda\Type\CarrierType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier
     *
     * Dopravce (pouze vydané faktury a vydané zálohové faktury).
     *
     * @param \Pohoda\Type\CarrierType $carrier
     * @return self
     */
    public function setCarrier(?\Pohoda\Type\CarrierType $carrier = null)
    {
        $this->carrier = $carrier;
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
     * Gets as intNote
     *
     * Interní poznámka, libovolný text, který nevstupuje do tiskových sestav.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote
     *
     * Interní poznámka, libovolný text, který nevstupuje do tiskových sestav.
     *
     * @param string $intNote
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;
        return $this;
    }

    /**
     * Gets as liquidation
     *
     * Stav likvidace faktury. Pouze pro export, při importu je ignorováno.
     *
     * @return \Pohoda\Type\LiquidationType
     */
    public function getLiquidation()
    {
        return $this->liquidation;
    }

    /**
     * Sets a new liquidation
     *
     * Stav likvidace faktury. Pouze pro export, při importu je ignorováno.
     *
     * @param \Pohoda\Type\LiquidationType $liquidation
     * @return self
     */
    public function setLiquidation(?\Pohoda\Type\LiquidationType $liquidation = null)
    {
        $this->liquidation = $liquidation;
        return $this;
    }

    /**
     * Gets as applied
     *
     * Hodnota pole Uplatněno. Pouze vydané a přijaté zálohové faktury. Jen pro export.
     *
     * @return float
     */
    public function getApplied()
    {
        return $this->applied;
    }

    /**
     * Sets a new applied
     *
     * Hodnota pole Uplatněno. Pouze vydané a přijaté zálohové faktury. Jen pro export.
     *
     * @param float $applied
     * @return self
     */
    public function setApplied($applied)
    {
        $this->applied = $applied;
        return $this;
    }

    /**
     * Gets as histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @return string
     */
    public function getHistRate()
    {
        return $this->histRate;
    }

    /**
     * Sets a new histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @param string $histRate
     * @return self
     */
    public function setHistRate($histRate)
    {
        $this->histRate = $histRate;
        return $this;
    }

    /**
     * Gets as lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @return string
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;
        return $this;
    }

    /**
     * Gets as lock2
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;
        return $this;
    }

    /**
     * Gets as markRecord
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
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
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

    /**
     * Gets as intrastat
     *
     * Výkaz pro intrastat.
     *
     * @return \Pohoda\Invoice\IntrastatType
     */
    public function getIntrastat()
    {
        return $this->intrastat;
    }

    /**
     * Sets a new intrastat
     *
     * Výkaz pro intrastat.
     *
     * @param \Pohoda\Invoice\IntrastatType $intrastat
     * @return self
     */
    public function setIntrastat(?\Pohoda\Invoice\IntrastatType $intrastat = null)
    {
        $this->intrastat = $intrastat;
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

    /**
     * Gets as validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @return \Pohoda\Type\TypeValidateType
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * Sets a new validate
     *
     * Podmíněná kontrola dokladu.
     *
     * @param \Pohoda\Type\TypeValidateType $validate
     * @return self
     */
    public function setValidate(?\Pohoda\Type\TypeValidateType $validate = null)
    {
        $this->validate = $validate;
        return $this;
    }

    /**
     * Gets as postponedIssue
     *
     * Odložený výdej. Hodnota 'true' nastaví vkládání skladových zásob ve formě textových položek (s vazbou na agendu Zásoby).
     *  Takto vložená položka nevytváří ve faktuře skladový pohyb. Ve stavovém řádku vydané faktury je označena jako Textová položka (s vazbou na agendu Zásoby). Používá se jen v agendě Vydané faktury.
     * .
     *
     * @return string
     */
    public function getPostponedIssue()
    {
        return $this->postponedIssue;
    }

    /**
     * Sets a new postponedIssue
     *
     * Odložený výdej. Hodnota 'true' nastaví vkládání skladových zásob ve formě textových položek (s vazbou na agendu Zásoby).
     *  Takto vložená položka nevytváří ve faktuře skladový pohyb. Ve stavovém řádku vydané faktury je označena jako Textová položka (s vazbou na agendu Zásoby). Používá se jen v agendě Vydané faktury.
     * .
     *
     * @param string $postponedIssue
     * @return self
     */
    public function setPostponedIssue($postponedIssue)
    {
        $this->postponedIssue = $postponedIssue;
        return $this;
    }
}
