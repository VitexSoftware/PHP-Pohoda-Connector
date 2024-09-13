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

namespace Pohoda\Type;

/**
 * Class representing StockRefType.
 *
 * Odkaz na skladovou položku. Vazbu lze provést přes elementy: ID, IDS, EAN, PLU.
 *  Použijeme-li více elementů současně, je brán pouze element s nejvyšší prioritou, ostatní se při zpracování ignorují.
 *  Priorita elementu je následující: ID,IDS,EAN,PLU".
 *  V případě, že je vybrán jeden nebo více skladů sklad a zásoba je definována jinak než podle 'id', zásoba se vyhledá jen ve vybraném skladu.
 * XSD Type: stockRefType
 */
class StockRefType
{
    /**
     * Změní nastavení vkládání svázaných zásob ze skladu k položce na doklad. Výchozí hodnota(pokud není atribut uveden) je dle nastavení
     *  programu POHODA. Při nastavení atributu: True – vkládá , False – nevkládá svázané zásoby.
     */
    private bool $insertAttachStock = null;

    /**
     * Umožní ignorovat uživatelský filtr na sklady, které je možné v GUI Pohody nastavit v agendě SKLAD/SKLADY. Při nastavení atributu: True – použít nastavený filtr na sklad z programu POHODA, False – ignorovat nastavený filtr na sklad z programu POHODA.
     */
    private bool $applyUserSettingsFilterOnTheStore = null;
    private int $id = null;
    private string $ids = null;
    private \Pohoda\Type\ExtIdType $extId = null;
    private string $eAN = null;
    private int $pLU = null;

    /**
     * Gets as insertAttachStock.
     *
     * Změní nastavení vkládání svázaných zásob ze skladu k položce na doklad. Výchozí hodnota(pokud není atribut uveden) je dle nastavení
     *  programu POHODA. Při nastavení atributu: True – vkládá , False – nevkládá svázané zásoby.
     *
     * @return bool
     */
    public function getInsertAttachStock()
    {
        return $this->insertAttachStock;
    }

    /**
     * Sets a new insertAttachStock.
     *
     * Změní nastavení vkládání svázaných zásob ze skladu k položce na doklad. Výchozí hodnota(pokud není atribut uveden) je dle nastavení
     *  programu POHODA. Při nastavení atributu: True – vkládá , False – nevkládá svázané zásoby.
     *
     * @param bool $insertAttachStock
     *
     * @return self
     */
    public function setInsertAttachStock($insertAttachStock)
    {
        $this->insertAttachStock = $insertAttachStock;

        return $this;
    }

    /**
     * Gets as applyUserSettingsFilterOnTheStore.
     *
     * Umožní ignorovat uživatelský filtr na sklady, které je možné v GUI Pohody nastavit v agendě SKLAD/SKLADY. Při nastavení atributu: True – použít nastavený filtr na sklad z programu POHODA, False – ignorovat nastavený filtr na sklad z programu POHODA.
     *
     * @return bool
     */
    public function getApplyUserSettingsFilterOnTheStore()
    {
        return $this->applyUserSettingsFilterOnTheStore;
    }

    /**
     * Sets a new applyUserSettingsFilterOnTheStore.
     *
     * Umožní ignorovat uživatelský filtr na sklady, které je možné v GUI Pohody nastavit v agendě SKLAD/SKLADY. Při nastavení atributu: True – použít nastavený filtr na sklad z programu POHODA, False – ignorovat nastavený filtr na sklad z programu POHODA.
     *
     * @param bool $applyUserSettingsFilterOnTheStore
     *
     * @return self
     */
    public function setApplyUserSettingsFilterOnTheStore($applyUserSettingsFilterOnTheStore)
    {
        $this->applyUserSettingsFilterOnTheStore = $applyUserSettingsFilterOnTheStore;

        return $this;
    }

    /**
     * Gets as id.
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
     * Gets as ids.
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
     * Gets as extId.
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
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as eAN.
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
     * @return int
     */
    public function getPLU()
    {
        return $this->pLU;
    }

    /**
     * Sets a new pLU.
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
}
