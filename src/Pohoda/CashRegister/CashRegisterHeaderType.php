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

namespace Pohoda\CashRegister;

/**
 * Class representing CashRegisterHeaderType.
 *
 * XSD Type: cashRegisterHeaderType
 */
class CashRegisterHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     */
    private int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private \Pohoda\Type\ExtIdType $extId = null;

    /**
     * Zkratka pokladny.
     */
    private string $ids = null;

    /**
     * Název pokladny.
     */
    private string $name = null;

    /**
     * Analytický účet.
     */
    private \Pohoda\Type\RefType $account = null;

    /**
     * Pokladní.
     */
    private \Pohoda\Type\RefType $cashier = null;

    /**
     * Valutová hotovostní pokladna. Pokud je uveden tento element, bude vytvořena valutová pokladna.V ostatních případech tuzemská pokladna.
     */
    private \Pohoda\CashRegister\CurrencyCashRegisterType $currencyCashRegister = null;

    /**
     * Datum zrušení pokladny.
     */
    private \DateTime $cancelled = null;

    /**
     * Doklad FM (Pouze Pohoda SK).
     */
    private string $fM = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Gets as id.
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Gets as ids.
     *
     * Zkratka pokladny.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids.
     *
     * Zkratka pokladny.
     *
     * @param string $ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název pokladny.
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
     * Název pokladny.
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
     * Gets as account.
     *
     * Analytický účet.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account.
     *
     * Analytický účet.
     *
     * @return self
     */
    public function setAccount(?\Pohoda\Type\RefType $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets as cashier.
     *
     * Pokladní.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCashier()
    {
        return $this->cashier;
    }

    /**
     * Sets a new cashier.
     *
     * Pokladní.
     *
     * @return self
     */
    public function setCashier(?\Pohoda\Type\RefType $cashier = null)
    {
        $this->cashier = $cashier;

        return $this;
    }

    /**
     * Gets as currencyCashRegister.
     *
     * Valutová hotovostní pokladna. Pokud je uveden tento element, bude vytvořena valutová pokladna.V ostatních případech tuzemská pokladna.
     *
     * @return \Pohoda\CashRegister\CurrencyCashRegisterType
     */
    public function getCurrencyCashRegister()
    {
        return $this->currencyCashRegister;
    }

    /**
     * Sets a new currencyCashRegister.
     *
     * Valutová hotovostní pokladna. Pokud je uveden tento element, bude vytvořena valutová pokladna.V ostatních případech tuzemská pokladna.
     *
     * @return self
     */
    public function setCurrencyCashRegister(?\Pohoda\CashRegister\CurrencyCashRegisterType $currencyCashRegister = null)
    {
        $this->currencyCashRegister = $currencyCashRegister;

        return $this;
    }

    /**
     * Gets as cancelled.
     *
     * Datum zrušení pokladny.
     *
     * @return \DateTime
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * Sets a new cancelled.
     *
     * Datum zrušení pokladny.
     *
     * @return self
     */
    public function setCancelled(?\DateTime $cancelled = null)
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    /**
     * Gets as fM.
     *
     * Doklad FM (Pouze Pohoda SK).
     *
     * @return string
     */
    public function getFM()
    {
        return $this->fM;
    }

    /**
     * Sets a new fM.
     *
     * Doklad FM (Pouze Pohoda SK).
     *
     * @param string $fM
     *
     * @return self
     */
    public function setFM($fM)
    {
        $this->fM = $fM;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka
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
     * Poznámka
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
}
