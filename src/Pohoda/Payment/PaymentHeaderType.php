<?php

namespace Pohoda\Payment;

/**
 * Class representing PaymentHeaderType
 *
 *
 * XSD Type: paymentHeaderType
 */
class PaymentHeaderType
{
    /**
     * ID záznamu.
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
     * Název formy úhrady.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis formy úhrady.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Typ formy úhrady. Na základě zvoleného typu se bude provádět i její zaúčtování.
     *
     * @var string $paymentType
     */
    private $paymentType = null;

    /**
     * Typ formy úhrady pro FM.
     *
     * @var string $paymentTypeFM
     */
    private $paymentTypeFM = null;

    /**
     * Cizí měna.
     *
     * @var \Pohoda\Payment\ForeignCurrencyType $foreignCurrency
     */
    private $foreignCurrency = null;

    /**
     * Stravenka.
     *
     * @var \Pohoda\Payment\TicketType $ticket
     */
    private $ticket = null;

    /**
     * Hotovost.
     *
     * @var \Pohoda\Payment\CashDefaultType $cash
     */
    private $cash = null;

    /**
     * Použít v agendách prodejek. Zadaná forma úhrady je nabízena v agendě Prodejky, Kasa a v modulu POHODA Kasa Offline. .
     *
     * @var string $useInSales
     */
    private $useInSales = null;

    /**
     * Použít v ostatních agendách. Zvolená forma úhrady je nabízena v ostatních agendách.
     *
     * @var string $useInOtherAgendas
     */
    private $useInOtherAgendas = null;

    /**
     * Vstupuje do EET.
     *
     * @var string $eet
     */
    private $eet = null;

    /**
     * Poznámka.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as id
     *
     * ID záznamu.
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
     * ID záznamu.
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
     * Gets as name
     *
     * Název formy úhrady.
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
     * Název formy úhrady.
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
     * Gets as text
     *
     * Popis formy úhrady.
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
     * Popis formy úhrady.
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
     * Gets as paymentType
     *
     * Typ formy úhrady. Na základě zvoleného typu se bude provádět i její zaúčtování.
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Typ formy úhrady. Na základě zvoleného typu se bude provádět i její zaúčtování.
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * Gets as paymentTypeFM
     *
     * Typ formy úhrady pro FM.
     *
     * @return string
     */
    public function getPaymentTypeFM()
    {
        return $this->paymentTypeFM;
    }

    /**
     * Sets a new paymentTypeFM
     *
     * Typ formy úhrady pro FM.
     *
     * @param string $paymentTypeFM
     * @return self
     */
    public function setPaymentTypeFM($paymentTypeFM)
    {
        $this->paymentTypeFM = $paymentTypeFM;
        return $this;
    }

    /**
     * Gets as foreignCurrency
     *
     * Cizí měna.
     *
     * @return \Pohoda\Payment\ForeignCurrencyType
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
     * @param \Pohoda\Payment\ForeignCurrencyType $foreignCurrency
     * @return self
     */
    public function setForeignCurrency(?\Pohoda\Payment\ForeignCurrencyType $foreignCurrency = null)
    {
        $this->foreignCurrency = $foreignCurrency;
        return $this;
    }

    /**
     * Gets as ticket
     *
     * Stravenka.
     *
     * @return \Pohoda\Payment\TicketType
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Sets a new ticket
     *
     * Stravenka.
     *
     * @param \Pohoda\Payment\TicketType $ticket
     * @return self
     */
    public function setTicket(?\Pohoda\Payment\TicketType $ticket = null)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * Gets as cash
     *
     * Hotovost.
     *
     * @return \Pohoda\Payment\CashDefaultType
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Sets a new cash
     *
     * Hotovost.
     *
     * @param \Pohoda\Payment\CashDefaultType $cash
     * @return self
     */
    public function setCash(?\Pohoda\Payment\CashDefaultType $cash = null)
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * Gets as useInSales
     *
     * Použít v agendách prodejek. Zadaná forma úhrady je nabízena v agendě Prodejky, Kasa a v modulu POHODA Kasa Offline. .
     *
     * @return string
     */
    public function getUseInSales()
    {
        return $this->useInSales;
    }

    /**
     * Sets a new useInSales
     *
     * Použít v agendách prodejek. Zadaná forma úhrady je nabízena v agendě Prodejky, Kasa a v modulu POHODA Kasa Offline. .
     *
     * @param string $useInSales
     * @return self
     */
    public function setUseInSales($useInSales)
    {
        $this->useInSales = $useInSales;
        return $this;
    }

    /**
     * Gets as useInOtherAgendas
     *
     * Použít v ostatních agendách. Zvolená forma úhrady je nabízena v ostatních agendách.
     *
     * @return string
     */
    public function getUseInOtherAgendas()
    {
        return $this->useInOtherAgendas;
    }

    /**
     * Sets a new useInOtherAgendas
     *
     * Použít v ostatních agendách. Zvolená forma úhrady je nabízena v ostatních agendách.
     *
     * @param string $useInOtherAgendas
     * @return self
     */
    public function setUseInOtherAgendas($useInOtherAgendas)
    {
        $this->useInOtherAgendas = $useInOtherAgendas;
        return $this;
    }

    /**
     * Gets as eet
     *
     * Vstupuje do EET.
     *
     * @return string
     */
    public function getEet()
    {
        return $this->eet;
    }

    /**
     * Sets a new eet
     *
     * Vstupuje do EET.
     *
     * @param string $eet
     * @return self
     */
    public function setEet($eet)
    {
        $this->eet = $eet;
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
}

