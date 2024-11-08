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

namespace Pohoda\Documentresponse;

/**
 * Class representing ProducedDetailsType.
 *
 * XSD Type: producedDetailsType
 */
class ProducedDetailsType
{
    /**
     * ID vytvořeného dokladu.
     */
    private ?string $id = null;

    /**
     * Vytvořené číslo dokladu.
     */
    private ?string $number = null;

    /**
     * Kód vytvořeného dokladu.
     */
    private ?string $code = null;

    /**
     * Typ provedené operace.
     */
    private ?string $actionType = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Výsledek importu položek.
     */
    private ?\Pohoda\Documentresponse\ItemDetailsType $itemDetails = null;

    /**
     * Gets as id.
     *
     * ID vytvořeného dokladu.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID vytvořeného dokladu.
     *
     * @param string $id
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
     * Vytvořené číslo dokladu.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Vytvořené číslo dokladu.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as code.
     *
     * Kód vytvořeného dokladu.
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
     * Kód vytvořeného dokladu.
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
     * Gets as actionType.
     *
     * Typ provedené operace.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ provedené operace.
     *
     * @param string $actionType
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

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
     * Gets as itemDetails.
     *
     * Výsledek importu položek.
     *
     * @return \Pohoda\Documentresponse\ItemDetailsType
     */
    public function getItemDetails()
    {
        return $this->itemDetails;
    }

    /**
     * Sets a new itemDetails.
     *
     * Výsledek importu položek.
     *
     * @return self
     */
    public function setItemDetails(?\Pohoda\Documentresponse\ItemDetailsType $itemDetails = null)
    {
        $this->itemDetails = $itemDetails;

        return $this;
    }
}
