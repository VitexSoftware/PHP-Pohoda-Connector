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

namespace Pohoda\Order;

/**
 * Class representing OrderHeaderType.
 *
 * XSD Type: orderHeaderType
 */
class OrderHeaderType
{
    /**
     * ID záznamu. Používá se při requestu.
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Typ objednávky. Tento element je vyžadován při vytvoření dokladu.
     */
    private ?string $orderType = null;

    /**
     * Storno dokladu (pouze pro export).
     */
    private ?string $storno = null;

    /**
     * Evidenční číslo dokladu.
     */
    private ?\Pohoda\Type\NumberType $number = null;

    /**
     * Číslo objednávky na jejímž základě byla faktura vystavena. Jen přijaté objednávky.
     */
    private ?string $numberOrder = null;

    /**
     * Datum vystavení / Datum zápisu. Tento element je vyžadován při vytvoření dokladu.
     */
    private ?\DateTime $date = null;

    /**
     * Datum dodání. Jen vydané objednávky.
     */
    private ?\DateTime $dateDelivery = null;

    /**
     * Vyřídit od. Jen přijaté objednávky.
     */
    private ?\DateTime $dateFrom = null;

    /**
     * Vyřídit do. Jen přijaté objednávky.
     */
    private ?\DateTime $dateTo = null;

    /**
     * Text dokladu.
     */
    private ?string $text = null;

    /**
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
     */
    private ?\Pohoda\Type\AddressType $partnerIdentity = null;

    /**
     * Osobní adresa.
     */
    private ?\Pohoda\Type\MyAddressType $myIdentity = null;

    /**
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
     */
    private ?\Pohoda\Type\PaymentType $paymentType = null;

    /**
     * Cenová hladinu odběratele. Jen přijaté objednávky.
     */
    private ?\Pohoda\Type\RefType $priceLevel = null;

    /**
     * Vyřízeno.
     */
    private ?string $isExecuted = null;

    /**
     * Dodáno. Používá se jen při exportu dokladu.
     */
    private ?string $isDelivered = null;

    /**
     * Rezervováno, pouze přijaté objednávky. Při importu dokladu je možné zásoby zarezervovat na skladě.
     */
    private ?string $isReserved = null;

    /**
     * Odkaz na typ internetového obchodu. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     */
    private ?\Pohoda\Type\RefType $iShop = null;

    /**
     * Odkaz na internetový obchod. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     */
    private ?string $iShopName = null;

    /**
     * Datum stornování dokladu. Používá se jen při exportu dokladu.
     */
    private ?\DateTime $dateCancellation = null;

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
     * Registrace DPH v EU.
     */
    private ?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null;

    /**
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     */
    private ?\Pohoda\Type\MOSStypeType $mOSS = null;

    /**
     * Důkazní prostředky (OSS).
     *
     * @var string[]
     */
    private ?array $evidentiaryResourcesMOSS = null;

    /**
     * Účetní období (OSS).
     */
    private ?string $accountingPeriodMOSS = null;

    /**
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů (nepoužívat v programu POHODA od verze 12 000, říjen 2018).
     */
    private ?string $permamentDocument = null;

    /**
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     */
    private ?string $permanentDocument = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Dopravce (pouze přijaté objednávky).
     */
    private ?\Pohoda\Type\CarrierType $carrier = null;

    /**
     * Interní poznámka.
     */
    private ?string $intNote = null;

    /**
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     */
    private ?string $histRate = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     */
    private ?string $lock1 = null;

    /**
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     */
    private ?string $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[]
     */
    private ?array $labels = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private ?array $parameters = null;

    /**
     * Gets as id.
     *
     * ID záznamu. Používá se při requestu.
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
     * ID záznamu. Používá se při requestu.
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
     * Gets as orderType.
     *
     * Typ objednávky. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets a new orderType.
     *
     * Typ objednávky. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param string $orderType
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Gets as storno.
     *
     * Storno dokladu (pouze pro export).
     *
     * @return string
     */
    public function getStorno()
    {
        return $this->storno;
    }

    /**
     * Sets a new storno.
     *
     * Storno dokladu (pouze pro export).
     *
     * @param string $storno
     *
     * @return self
     */
    public function setStorno($storno)
    {
        $this->storno = $storno;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Evidenční číslo dokladu.
     *
     * @return \Pohoda\Type\NumberType
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Evidenční číslo dokladu.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as numberOrder.
     *
     * Číslo objednávky na jejímž základě byla faktura vystavena. Jen přijaté objednávky.
     *
     * @return string
     */
    public function getNumberOrder()
    {
        return $this->numberOrder;
    }

    /**
     * Sets a new numberOrder.
     *
     * Číslo objednávky na jejímž základě byla faktura vystavena. Jen přijaté objednávky.
     *
     * @param string $numberOrder
     *
     * @return self
     */
    public function setNumberOrder($numberOrder)
    {
        $this->numberOrder = $numberOrder;

        return $this;
    }

    /**
     * Gets as date.
     *
     * Datum vystavení / Datum zápisu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date.
     *
     * Datum vystavení / Datum zápisu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as dateDelivery.
     *
     * Datum dodání. Jen vydané objednávky.
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Sets a new dateDelivery.
     *
     * Datum dodání. Jen vydané objednávky.
     *
     * @return self
     */
    public function setDateDelivery(?\DateTime $dateDelivery = null)
    {
        $this->dateDelivery = $dateDelivery;

        return $this;
    }

    /**
     * Gets as dateFrom.
     *
     * Vyřídit od. Jen přijaté objednávky.
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
     * Vyřídit od. Jen přijaté objednávky.
     *
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTo.
     *
     * Vyřídit do. Jen přijaté objednávky.
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo.
     *
     * Vyřídit do. Jen přijaté objednávky.
     *
     * @return self
     */
    public function setDateTo(?\DateTime $dateTo = null)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text dokladu
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
     * Text dokladu
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
     * Gets as partnerIdentity.
     *
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity.
     *
     * Zákazníkova adresa. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;

        return $this;
    }

    /**
     * Gets as myIdentity.
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
     * Sets a new myIdentity.
     *
     * Osobní adresa.
     *
     * @return self
     */
    public function setMyIdentity(?\Pohoda\Type\MyAddressType $myIdentity = null)
    {
        $this->myIdentity = $myIdentity;

        return $this;
    }

    /**
     * Gets as paymentType.
     *
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
     *
     * @return \Pohoda\Type\PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType.
     *
     * Forma úhrady. Implicitně je nastaveno 'příkazem'.
     *
     * @return self
     */
    public function setPaymentType(?\Pohoda\Type\PaymentType $paymentType = null)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as priceLevel.
     *
     * Cenová hladinu odběratele. Jen přijaté objednávky.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Sets a new priceLevel.
     *
     * Cenová hladinu odběratele. Jen přijaté objednávky.
     *
     * @return self
     */
    public function setPriceLevel(?\Pohoda\Type\RefType $priceLevel = null)
    {
        $this->priceLevel = $priceLevel;

        return $this;
    }

    /**
     * Gets as isExecuted.
     *
     * Vyřízeno.
     *
     * @return string
     */
    public function getIsExecuted()
    {
        return $this->isExecuted;
    }

    /**
     * Sets a new isExecuted.
     *
     * Vyřízeno.
     *
     * @param string $isExecuted
     *
     * @return self
     */
    public function setIsExecuted($isExecuted)
    {
        $this->isExecuted = $isExecuted;

        return $this;
    }

    /**
     * Gets as isDelivered.
     *
     * Dodáno. Používá se jen při exportu dokladu.
     *
     * @return string
     */
    public function getIsDelivered()
    {
        return $this->isDelivered;
    }

    /**
     * Sets a new isDelivered.
     *
     * Dodáno. Používá se jen při exportu dokladu.
     *
     * @param string $isDelivered
     *
     * @return self
     */
    public function setIsDelivered($isDelivered)
    {
        $this->isDelivered = $isDelivered;

        return $this;
    }

    /**
     * Gets as isReserved.
     *
     * Rezervováno, pouze přijaté objednávky. Při importu dokladu je možné zásoby zarezervovat na skladě.
     *
     * @return string
     */
    public function getIsReserved()
    {
        return $this->isReserved;
    }

    /**
     * Sets a new isReserved.
     *
     * Rezervováno, pouze přijaté objednávky. Při importu dokladu je možné zásoby zarezervovat na skladě.
     *
     * @param string $isReserved
     *
     * @return self
     */
    public function setIsReserved($isReserved)
    {
        $this->isReserved = $isReserved;

        return $this;
    }

    /**
     * Gets as iShop.
     *
     * Odkaz na typ internetového obchodu. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getIShop()
    {
        return $this->iShop;
    }

    /**
     * Sets a new iShop.
     *
     * Odkaz na typ internetového obchodu. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     *
     * @return self
     */
    public function setIShop(?\Pohoda\Type\RefType $iShop = null)
    {
        $this->iShop = $iShop;

        return $this;
    }

    /**
     * Gets as iShopName.
     *
     * Odkaz na internetový obchod. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     *
     * @return string
     */
    public function getIShopName()
    {
        return $this->iShopName;
    }

    /**
     * Sets a new iShopName.
     *
     * Odkaz na internetový obchod. Používá se jen při exportu dokladu. Jen přijaté objednávky.
     *
     * @param string $iShopName
     *
     * @return self
     */
    public function setIShopName($iShopName)
    {
        $this->iShopName = $iShopName;

        return $this;
    }

    /**
     * Gets as dateCancellation.
     *
     * Datum stornování dokladu. Používá se jen při exportu dokladu.
     *
     * @return \DateTime
     */
    public function getDateCancellation()
    {
        return $this->dateCancellation;
    }

    /**
     * Sets a new dateCancellation.
     *
     * Datum stornování dokladu. Používá se jen při exportu dokladu.
     *
     * @return self
     */
    public function setDateCancellation(?\DateTime $dateCancellation = null)
    {
        $this->dateCancellation = $dateCancellation;

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
     * Gets as regVATinEU.
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
     * Sets a new regVATinEU.
     *
     * Registrace DPH v EU.
     *
     * @return self
     */
    public function setRegVATinEU(?\Pohoda\Type\RefTypeRegVATinEUType $regVATinEU = null)
    {
        $this->regVATinEU = $regVATinEU;

        return $this;
    }

    /**
     * Gets as mOSS.
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
     * Sets a new mOSS.
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return self
     */
    public function setMOSS(?\Pohoda\Type\MOSStypeType $mOSS = null)
    {
        $this->mOSS = $mOSS;

        return $this;
    }

    /**
     * Adds as ids.
     *
     * Důkazní prostředky (OSS).
     *
     * @param string $ids
     *
     * @return self
     */
    public function addToEvidentiaryResourcesMOSS($ids)
    {
        $this->evidentiaryResourcesMOSS[] = $ids;

        return $this;
    }

    /**
     * isset evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEvidentiaryResourcesMOSS($index)
    {
        return isset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * unset evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     */
    public function unsetEvidentiaryResourcesMOSS($index): void
    {
        unset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * Gets as evidentiaryResourcesMOSS.
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
     * Sets a new evidentiaryResourcesMOSS.
     *
     * Důkazní prostředky (OSS).
     *
     * @param string[] $evidentiaryResourcesMOSS
     *
     * @return self
     */
    public function setEvidentiaryResourcesMOSS(?array $evidentiaryResourcesMOSS = null)
    {
        $this->evidentiaryResourcesMOSS = $evidentiaryResourcesMOSS;

        return $this;
    }

    /**
     * Gets as accountingPeriodMOSS.
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
     * Sets a new accountingPeriodMOSS.
     *
     * Účetní období (OSS).
     *
     * @param string $accountingPeriodMOSS
     *
     * @return self
     */
    public function setAccountingPeriodMOSS($accountingPeriodMOSS)
    {
        $this->accountingPeriodMOSS = $accountingPeriodMOSS;

        return $this;
    }

    /**
     * Gets as permamentDocument.
     *
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů (nepoužívat v programu POHODA od verze 12 000, říjen 2018).
     *
     * @return string
     */
    public function getPermamentDocument()
    {
        return $this->permamentDocument;
    }

    /**
     * Sets a new permamentDocument.
     *
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů (nepoužívat v programu POHODA od verze 12 000, říjen 2018).
     *
     * @param string $permamentDocument
     *
     * @return self
     */
    public function setPermamentDocument($permamentDocument)
    {
        $this->permamentDocument = $permamentDocument;

        return $this;
    }

    /**
     * Gets as permanentDocument.
     *
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     *
     * @return string
     */
    public function getPermanentDocument()
    {
        return $this->permanentDocument;
    }

    /**
     * Sets a new permanentDocument.
     *
     * Trvalý doklad. Příznak pro označení trvalé objednávky v programu POHODA. U takto označených dokladů se nebude sledovat přenesené množství a bude možné ji neustále přenášet do dokladů.
     *
     * @param string $permanentDocument
     *
     * @return self
     */
    public function setPermanentDocument($permanentDocument)
    {
        $this->permanentDocument = $permanentDocument;

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
     * Gets as carrier.
     *
     * Dopravce (pouze přijaté objednávky).
     *
     * @return \Pohoda\Type\CarrierType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier.
     *
     * Dopravce (pouze přijaté objednávky).
     *
     * @return self
     */
    public function setCarrier(?\Pohoda\Type\CarrierType $carrier = null)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Gets as intNote.
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote.
     *
     * Interní poznámka.
     *
     * @param string $intNote
     *
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;

        return $this;
    }

    /**
     * Gets as histRate.
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
     * Sets a new histRate.
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @param string $histRate
     *
     * @return self
     */
    public function setHistRate($histRate)
    {
        $this->histRate = $histRate;

        return $this;
    }

    /**
     * Gets as lock1.
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
     * Sets a new lock1.
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     *
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;

        return $this;
    }

    /**
     * Gets as lock2.
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2.
     *
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     *
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;

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
