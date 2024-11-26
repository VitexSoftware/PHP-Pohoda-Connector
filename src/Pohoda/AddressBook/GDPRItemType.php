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

namespace Pohoda\AddressBook;

/**
 * Class representing GDPRItemType.
 *
 * XSD Type: GDPRItemType
 */
class GDPRItemType
{
    /**
     * Typ práce se záznamem GDPR. Výchozí hodnota je přidání nového záznamu.
     */
    private ?\Pohoda\Type\ActionTypeItemType $actionType = null;

    /**
     * ID položky GDPR (jen pro export).
     */
    private ?int $id = null;

    /**
     * Typ důvodu zpracování dat GDPR.
     */
    private ?\Pohoda\Type\RefTypeLongType $name = null;

    /**
     * Důvod zpracování (jen pro export).
     */
    private ?string $description = null;

    /**
     * Datum od. Pokud není uvedeno, bude nastaveno na aktuální datum.
     */
    private ?\DateTime $dateFrom = null;

    /**
     * Datum do.
     */
    private ?\DateTime $dateTill = null;

    /**
     * Datum a čas odvolání GDPR.
     */
    private ?\DateTime $revokeGDPR = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as actionType.
     *
     * Typ práce se záznamem GDPR. Výchozí hodnota je přidání nového záznamu.
     *
     * @return \Pohoda\Type\ActionTypeItemType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce se záznamem GDPR. Výchozí hodnota je přidání nového záznamu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\Type\ActionTypeItemType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as id.
     *
     * ID položky GDPR (jen pro export).
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
     * ID položky GDPR (jen pro export).
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
     * Gets as name.
     *
     * Typ důvodu zpracování dat GDPR.
     *
     * @return \Pohoda\Type\RefTypeLongType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * Typ důvodu zpracování dat GDPR.
     *
     * @return self
     */
    public function setName(\Pohoda\Type\RefTypeLongType $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as description.
     *
     * Důvod zpracování (jen pro export).
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
     * Důvod zpracování (jen pro export).
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
     * Gets as dateFrom.
     *
     * Datum od. Pokud není uvedeno, bude nastaveno na aktuální datum.
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
     * Datum od. Pokud není uvedeno, bude nastaveno na aktuální datum.
     *
     * @return self
     */
    public function setDateFrom(?\DateTime $dateFrom = null)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Gets as dateTill.
     *
     * Datum do.
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
     * Datum do.
     *
     * @return self
     */
    public function setDateTill(?\DateTime $dateTill = null)
    {
        $this->dateTill = $dateTill;

        return $this;
    }

    /**
     * Gets as revokeGDPR.
     *
     * Datum a čas odvolání GDPR.
     *
     * @return \DateTime
     */
    public function getRevokeGDPR()
    {
        return $this->revokeGDPR;
    }

    /**
     * Sets a new revokeGDPR.
     *
     * Datum a čas odvolání GDPR.
     *
     * @return self
     */
    public function setRevokeGDPR(?\DateTime $revokeGDPR = null)
    {
        $this->revokeGDPR = $revokeGDPR;

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
}
