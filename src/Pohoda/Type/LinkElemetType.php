<?php

namespace Pohoda\Type;

/**
 * Class representing LinkElemetType
 *
 *
 * XSD Type: linkElemetType
 */
class LinkElemetType
{
    /**
     * Agenda zdrojového dokladu.
     *
     * @var string $sourceAgenda
     */
    private $sourceAgenda = null;

    /**
     * Doklad.
     *
     * @var \Pohoda\Type\SourceDocumentType $sourceDocument
     */
    private $sourceDocument = null;

    /**
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     *
     * @var \Pohoda\Type\SettingsSourceDocumentType $settingsSourceDocument
     */
    private $settingsSourceDocument = null;

    /**
     * Gets as sourceAgenda
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
     * Sets a new sourceAgenda
     *
     * Agenda zdrojového dokladu.
     *
     * @param string $sourceAgenda
     * @return self
     */
    public function setSourceAgenda($sourceAgenda)
    {
        $this->sourceAgenda = $sourceAgenda;
        return $this;
    }

    /**
     * Gets as sourceDocument
     *
     * Doklad.
     *
     * @return \Pohoda\Type\SourceDocumentType
     */
    public function getSourceDocument()
    {
        return $this->sourceDocument;
    }

    /**
     * Sets a new sourceDocument
     *
     * Doklad.
     *
     * @param \Pohoda\Type\SourceDocumentType $sourceDocument
     * @return self
     */
    public function setSourceDocument(\Pohoda\Type\SourceDocumentType $sourceDocument)
    {
        $this->sourceDocument = $sourceDocument;
        return $this;
    }

    /**
     * Gets as settingsSourceDocument
     *
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     *
     * @return \Pohoda\Type\SettingsSourceDocumentType
     */
    public function getSettingsSourceDocument()
    {
        return $this->settingsSourceDocument;
    }

    /**
     * Sets a new settingsSourceDocument
     *
     * Nastavení parametrů na zdrojovém dokladu po vytvoření vazby na doklad.
     *
     * @param \Pohoda\Type\SettingsSourceDocumentType $settingsSourceDocument
     * @return self
     */
    public function setSettingsSourceDocument(?\Pohoda\Type\SettingsSourceDocumentType $settingsSourceDocument = null)
    {
        $this->settingsSourceDocument = $settingsSourceDocument;
        return $this;
    }
}
