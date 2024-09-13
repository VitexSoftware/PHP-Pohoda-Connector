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

namespace Pohoda\ProductRequirement;

/**
 * Class representing ProductRequirementHeaderType.
 *
 * XSD Type: productRequirementHeaderType
 */
class ProductRequirementHeaderType
{
    /**
     * ID záznamu.
     */
    private int $id = null;

    /**
     * Číslo dokladu.
     */
    private \Pohoda\Type\NumberType $number = null;

    /**
     * Datum výrobního požadavku. Pokud hodnota není uvedena použije se aktuální datum.
     */
    private \DateTime $date = null;

    /**
     * Vyřídit do.
     */
    private \DateTime $dateTill = null;

    /**
     * Text dokladu.
     */
    private string $text = null;

    /**
     * Zákazníkova adresa.
     */
    private \Pohoda\Type\AddressType $partnerIdentity = null;

    /**
     * Zdrojové středisko.
     */
    private \Pohoda\Type\RefType $centreSource = null;

    /**
     * Cílové středisko.
     */
    private \Pohoda\Type\RefType $centreDestination = null;

    /**
     * Činnost.
     */
    private \Pohoda\Type\RefType $activity = null;

    /**
     * Zakázka.
     */
    private \Pohoda\Type\RefType $contract = null;

    /**
     * Vyřízeno.
     */
    private string $isExecuted = null;

    /**
     * Přeneseno (Vyrobeno). Pouze pro export.
     */
    private string $isProduced = null;

    /**
     * Rezervováno.
     */
    private string $isReserved = null;

    /**
     * Poznámka.
     */
    private string $note = null;

    /**
     * Interní poznámka.
     */
    private string $intNote = null;

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
     * ID záznamu.
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
     * ID záznamu.
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
     * Gets as number.
     *
     * Číslo dokladu.
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
     * Číslo dokladu.
     *
     * @return self
     */
    public function setNumber(?\Pohoda\Type\NumberType $number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as date.
     *
     * Datum výrobního požadavku. Pokud hodnota není uvedena použije se aktuální datum.
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
     * Datum výrobního požadavku. Pokud hodnota není uvedena použije se aktuální datum.
     *
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as dateTill.
     *
     * Vyřídit do.
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
     * Vyřídit do.
     *
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;

        return $this;
    }

    /**
     * Gets as text.
     *
     * Text dokladu.
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
     * Text dokladu.
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
     * Zákazníkova adresa
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
     * Zákazníkova adresa
     *
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;

        return $this;
    }

    /**
     * Gets as centreSource.
     *
     * Zdrojové středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentreSource()
    {
        return $this->centreSource;
    }

    /**
     * Sets a new centreSource.
     *
     * Zdrojové středisko.
     *
     * @return self
     */
    public function setCentreSource(?\Pohoda\Type\RefType $centreSource = null)
    {
        $this->centreSource = $centreSource;

        return $this;
    }

    /**
     * Gets as centreDestination.
     *
     * Cílové středisko.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentreDestination()
    {
        return $this->centreDestination;
    }

    /**
     * Sets a new centreDestination.
     *
     * Cílové středisko.
     *
     * @return self
     */
    public function setCentreDestination(?\Pohoda\Type\RefType $centreDestination = null)
    {
        $this->centreDestination = $centreDestination;

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
     * Gets as isProduced.
     *
     * Přeneseno (Vyrobeno). Pouze pro export.
     *
     * @return string
     */
    public function getIsProduced()
    {
        return $this->isProduced;
    }

    /**
     * Sets a new isProduced.
     *
     * Přeneseno (Vyrobeno). Pouze pro export.
     *
     * @param string $isProduced
     *
     * @return self
     */
    public function setIsProduced($isProduced)
    {
        $this->isProduced = $isProduced;

        return $this;
    }

    /**
     * Gets as isReserved.
     *
     * Rezervováno.
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
     * Rezervováno.
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
