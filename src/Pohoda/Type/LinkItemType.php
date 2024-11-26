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
 * Class representing LinkItemType.
 *
 * XSD Type: linkItemType
 */
class LinkItemType
{
    /**
     * Agenda zdrojového dokladu.
     */
    private ?string $sourceAgenda = null;

    /**
     * ID položky dokladu.
     */
    private ?int $sourceItemId = null;

    /**
     * Externí identifikátor položky dokladu.
     */
    private ?\Pohoda\Type\ExtIdType $sourceItemExtId = null;

    /**
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     */
    private ?\Pohoda\Type\SettingsSourceDocumentOrderItemType $settingsSourceDocumentOrderItem = null;

    /**
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     */
    private ?\Pohoda\Type\SettingsSourceDocumentItemType $settingsSourceDocumentItem = null;

    /**
     * Gets as sourceAgenda.
     *
     * Agenda zdrojového dokladu.
     *
     * @return string
     */
    public function getSourceAgenda()
    {
        return $this->sourceAgenda;
    }

    /**
     * Sets a new sourceAgenda.
     *
     * Agenda zdrojového dokladu.
     *
     * @param string $sourceAgenda
     *
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;

        return $this;
    }

    /**
     * Gets as sourceItemId.
     *
     * ID položky dokladu.
     *
     * @return int
     */
    public function getSourceItemId()
    {
        return $this->sourceItemId;
    }

    /**
     * Sets a new sourceItemId.
     *
     * ID položky dokladu.
     *
     * @param int $sourceItemId
     *
     * @return self
     */
    public function setSourceItemId($sourceItemId)
    {
        $this->sourceItemId = $sourceItemId;

        return $this;
    }

    /**
     * Gets as sourceItemExtId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getSourceItemExtId()
    {
        return $this->sourceItemExtId;
    }

    /**
     * Sets a new sourceItemExtId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @return self
     */
    public function setSourceItemExtId(?\Pohoda\Type\ExtIdType $sourceItemExtId = null)
    {
        $this->sourceItemExtId = $sourceItemExtId;

        return $this;
    }

    /**
     * Gets as settingsSourceDocumentOrderItem.
     *
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     *
     * @return \Pohoda\Type\SettingsSourceDocumentOrderItemType
     */
    public function getSettingsSourceDocumentOrderItem()
    {
        return $this->settingsSourceDocumentOrderItem;
    }

    /**
     * Sets a new settingsSourceDocumentOrderItem.
     *
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     *
     * @return self
     */
    public function setSettingsSourceDocumentOrderItem(?\Pohoda\Type\SettingsSourceDocumentOrderItemType $settingsSourceDocumentOrderItem = null)
    {
        $this->settingsSourceDocumentOrderItem = $settingsSourceDocumentOrderItem;

        return $this;
    }

    /**
     * Gets as settingsSourceDocumentItem.
     *
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     *
     * @return \Pohoda\Type\SettingsSourceDocumentItemType
     */
    public function getSettingsSourceDocumentItem()
    {
        return $this->settingsSourceDocumentItem;
    }

    /**
     * Sets a new settingsSourceDocumentItem.
     *
     * Nastavení příznaků na zdrojovém dokladu po vytvoření vazby přes položky dokladu.
     *
     * @return self
     */
    public function setSettingsSourceDocumentItem(?\Pohoda\Type\SettingsSourceDocumentItemType $settingsSourceDocumentItem = null)
    {
        $this->settingsSourceDocumentItem = $settingsSourceDocumentItem;

        return $this;
    }
}
