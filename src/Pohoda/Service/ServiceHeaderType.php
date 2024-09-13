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

namespace Pohoda\Service;

/**
 * Class representing ServiceHeaderType.
 *
 * XSD Type: serviceHeaderType
 */
class ServiceHeaderType
{
    /**
     * ID záznamu (jen pro export).
     */
    private int $id = null;

    /**
     * Typ servisního záznamu.
     */
    private string $serviceType = null;

    /**
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
     */
    private \Pohoda\Type\NumberType $number = null;

    /**
     * Datum přijetí do servisu. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
     */
    private \DateTime $received = null;

    /**
     * Vyřídit do.
     */
    private \DateTime $settleUntil = null;

    /**
     * Ukončeno.
     */
    private \DateTime $finished = null;

    /**
     * Vyřízeno (jen pro export).
     */
    private \DateTime $executed = null;

    /**
     * Odhadovaná cena servisních prací.
     */
    private float $expectedPrice = null;

    /**
     * Odhadovaná cena servisních prací v cizí měně.
     */
    private float $expectedPriceFC = null;

    /**
     * Částka zálohy přijaté od zákazníka na provedení servisních prací.
     */
    private float $advancePrice = null;

    /**
     * Částka zálohy přijaté od zákazníka na provedení servisních prací v cizí měně.
     */
    private float $advancePriceFC = null;

    /**
     * Stav servisu. Jen pro export. Vyplňuje se automaticky, dle záložky Stav servisu.
     */
    private \Pohoda\Type\RefType $status = null;

    /**
     * Odpovědná osoba.
     */
    private \Pohoda\Type\RefTypeLongType $responsiblePerson = null;

    /**
     * Text dokladu servisu.
     */
    private string $text = null;

    /**
     * Zákazníkova adresa.
     */
    private \Pohoda\Type\AddressType $partnerIdentity = null;

    /**
     * Jméno a příjmení kontaktní osoby.
     */
    private string $contactName = null;

    /**
     * Doplňující údaje ke kontaktní osobě např. titul.
     */
    private string $contactDetail = null;

    /**
     * Cenová hladina odběratele.
     */
    private \Pohoda\Type\RefType $priceLevel = null;

    /**
     * Vyřízeno.
     */
    private string $isExecuted = null;

    /**
     * Číslo nebo jiná identifikace daňového dokladu, kterým bylo zboží původně vyskladněno.
     */
    private string $numberDocument = null;

    /**
     * Datum vystavení daňového dokladu, kterým bylo zboží původně vyskladněno.
     */
    private \DateTime $dateDocument = null;

    /**
     * Způsob přijetí servisovaného předmětu.
     */
    private \Pohoda\Type\RefSrvDeliveryType $receiving = null;

    /**
     * Způsob předání opraveného servisovaného předmětu.
     */
    private \Pohoda\Type\RefSrvDeliveryType $forwarding = null;

    /**
     * Středisko.
     */
    private \Pohoda\Type\RefType $centre = null;

    /**
     * Činnost.
     */
    private \Pohoda\Type\RefType $activity = null;

    /**
     * Zakázka.
     */
    private \Pohoda\Type\RefType $contract = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Interní poznámka, libovolný text, který nevstupuje do tiskových sestav.
     */
    private string $intNote = null;

    /**
     * Popis závady.
     */
    private string $recognizedDefect = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     */
    private string $lock1 = null;

    /**
     * Zámek II (pouze verze E1). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     */
    private string $lock2 = null;

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
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Gets as serviceType.
     *
     * Typ servisního záznamu.
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType.
     *
     * Typ servisního záznamu.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
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
     * Evidenční číslo dokladu. Pokud není hodnota uvedena, použije se číselná řada přednastavená v uživatelském nastavení nebo se nastaví první číselná řada pro daný doklad.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as received.
     *
     * Datum přijetí do servisu. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
     *
     * @return \DateTime
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Sets a new received.
     *
     * Datum přijetí do servisu. Pokud není hodnota zadaná, použije se aktuální datum nebo datum posledního záznamu, dle volby v uživatelském nastavení.
     *
     * @return self
     */
    public function setReceived(?\DateTime $received = null)
    {
        $this->received = $received;

        return $this;
    }

    /**
     * Gets as settleUntil.
     *
     * Vyřídit do.
     *
     * @return \DateTime
     */
    public function getSettleUntil()
    {
        return $this->settleUntil;
    }

    /**
     * Sets a new settleUntil.
     *
     * Vyřídit do.
     *
     * @return self
     */
    public function setSettleUntil(?\DateTime $settleUntil = null)
    {
        $this->settleUntil = $settleUntil;

        return $this;
    }

    /**
     * Gets as finished.
     *
     * Ukončeno.
     *
     * @return \DateTime
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Sets a new finished.
     *
     * Ukončeno.
     *
     * @return self
     */
    public function setFinished(?\DateTime $finished = null)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Gets as executed.
     *
     * Vyřízeno (jen pro export).
     *
     * @return \DateTime
     */
    public function getExecuted()
    {
        return $this->executed;
    }

    /**
     * Sets a new executed.
     *
     * Vyřízeno (jen pro export).
     *
     * @return self
     */
    public function setExecuted(?\DateTime $executed = null)
    {
        $this->executed = $executed;

        return $this;
    }

    /**
     * Gets as expectedPrice.
     *
     * Odhadovaná cena servisních prací.
     *
     * @return float
     */
    public function getExpectedPrice()
    {
        return $this->expectedPrice;
    }

    /**
     * Sets a new expectedPrice.
     *
     * Odhadovaná cena servisních prací.
     *
     * @param float $expectedPrice
     *
     * @return self
     */
    public function setExpectedPrice($expectedPrice)
    {
        $this->expectedPrice = $expectedPrice;

        return $this;
    }

    /**
     * Gets as expectedPriceFC.
     *
     * Odhadovaná cena servisních prací v cizí měně.
     *
     * @return float
     */
    public function getExpectedPriceFC()
    {
        return $this->expectedPriceFC;
    }

    /**
     * Sets a new expectedPriceFC.
     *
     * Odhadovaná cena servisních prací v cizí měně.
     *
     * @param float $expectedPriceFC
     *
     * @return self
     */
    public function setExpectedPriceFC($expectedPriceFC)
    {
        $this->expectedPriceFC = $expectedPriceFC;

        return $this;
    }

    /**
     * Gets as advancePrice.
     *
     * Částka zálohy přijaté od zákazníka na provedení servisních prací.
     *
     * @return float
     */
    public function getAdvancePrice()
    {
        return $this->advancePrice;
    }

    /**
     * Sets a new advancePrice.
     *
     * Částka zálohy přijaté od zákazníka na provedení servisních prací.
     *
     * @param float $advancePrice
     *
     * @return self
     */
    public function setAdvancePrice($advancePrice)
    {
        $this->advancePrice = $advancePrice;

        return $this;
    }

    /**
     * Gets as advancePriceFC.
     *
     * Částka zálohy přijaté od zákazníka na provedení servisních prací v cizí měně.
     *
     * @return float
     */
    public function getAdvancePriceFC()
    {
        return $this->advancePriceFC;
    }

    /**
     * Sets a new advancePriceFC.
     *
     * Částka zálohy přijaté od zákazníka na provedení servisních prací v cizí měně.
     *
     * @param float $advancePriceFC
     *
     * @return self
     */
    public function setAdvancePriceFC($advancePriceFC)
    {
        $this->advancePriceFC = $advancePriceFC;

        return $this;
    }

    /**
     * Gets as status.
     *
     * Stav servisu. Jen pro export. Vyplňuje se automaticky, dle záložky Stav servisu.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status.
     *
     * Stav servisu. Jen pro export. Vyplňuje se automaticky, dle záložky Stav servisu.
     *
     * @return self
     */
    public function setStatus(?\Pohoda\Type\RefType $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as responsiblePerson.
     *
     * Odpovědná osoba.
     *
     * @return \Pohoda\Type\RefTypeLongType
     */
    public function getResponsiblePerson()
    {
        return $this->responsiblePerson;
    }

    /**
     * Sets a new responsiblePerson.
     *
     * Odpovědná osoba.
     *
     * @return self
     */
    public function setResponsiblePerson(?\Pohoda\Type\RefTypeLongType $responsiblePerson = null)
    {
        $this->responsiblePerson = $responsiblePerson;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text dokladu servisu.
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
     * Text dokladu servisu.
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
     * Zákazníkova adresa.
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
     * Zákazníkova adresa.
     *
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;

        return $this;
    }

    /**
     * Gets as contactName.
     *
     * Jméno a příjmení kontaktní osoby.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName.
     *
     * Jméno a příjmení kontaktní osoby.
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Gets as contactDetail.
     *
     * Doplňující údaje ke kontaktní osobě např. titul.
     *
     * @return string
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }

    /**
     * Sets a new contactDetail.
     *
     * Doplňující údaje ke kontaktní osobě např. titul.
     *
     * @param string $contactDetail
     *
     * @return self
     */
    public function setContactDetail($contactDetail)
    {
        $this->contactDetail = $contactDetail;

        return $this;
    }

    /**
     * Gets as priceLevel.
     *
     * Cenová hladina odběratele.
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
     * Cenová hladina odběratele.
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
     * Gets as numberDocument.
     *
     * Číslo nebo jiná identifikace daňového dokladu, kterým bylo zboží původně vyskladněno.
     *
     * @return string
     */
    public function getNumberDocument()
    {
        return $this->numberDocument;
    }

    /**
     * Sets a new numberDocument.
     *
     * Číslo nebo jiná identifikace daňového dokladu, kterým bylo zboží původně vyskladněno.
     *
     * @param string $numberDocument
     *
     * @return self
     */
    public function setNumberDocument($numberDocument)
    {
        $this->numberDocument = $numberDocument;

        return $this;
    }

    /**
     * Gets as dateDocument.
     *
     * Datum vystavení daňového dokladu, kterým bylo zboží původně vyskladněno.
     *
     * @return \DateTime
     */
    public function getDateDocument()
    {
        return $this->dateDocument;
    }

    /**
     * Sets a new dateDocument.
     *
     * Datum vystavení daňového dokladu, kterým bylo zboží původně vyskladněno.
     *
     * @return self
     */
    public function setDateDocument(?\DateTime $dateDocument = null)
    {
        $this->dateDocument = $dateDocument;

        return $this;
    }

    /**
     * Gets as receiving.
     *
     * Způsob přijetí servisovaného předmětu.
     *
     * @return \Pohoda\Type\RefSrvDeliveryType
     */
    public function getReceiving()
    {
        return $this->receiving;
    }

    /**
     * Sets a new receiving.
     *
     * Způsob přijetí servisovaného předmětu.
     *
     * @return self
     */
    public function setReceiving(?\Pohoda\Type\RefSrvDeliveryType $receiving = null)
    {
        $this->receiving = $receiving;

        return $this;
    }

    /**
     * Gets as forwarding.
     *
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @return \Pohoda\Type\RefSrvDeliveryType
     */
    public function getForwarding()
    {
        return $this->forwarding;
    }

    /**
     * Sets a new forwarding.
     *
     * Způsob předání opraveného servisovaného předmětu.
     *
     * @return self
     */
    public function setForwarding(?\Pohoda\Type\RefSrvDeliveryType $forwarding = null)
    {
        $this->forwarding = $forwarding;

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
     * Gets as intNote.
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
     * Sets a new intNote.
     *
     * Interní poznámka, libovolný text, který nevstupuje do tiskových sestav.
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
     * Gets as recognizedDefect.
     *
     * Popis závady.
     *
     * @return string
     */
    public function getRecognizedDefect()
    {
        return $this->recognizedDefect;
    }

    /**
     * Sets a new recognizedDefect.
     *
     * Popis závady.
     *
     * @param string $recognizedDefect
     *
     * @return self
     */
    public function setRecognizedDefect($recognizedDefect)
    {
        $this->recognizedDefect = $recognizedDefect;

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
