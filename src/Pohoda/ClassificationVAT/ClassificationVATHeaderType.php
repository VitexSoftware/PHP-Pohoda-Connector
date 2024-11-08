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

namespace Pohoda\ClassificationVAT;

/**
 * Class representing ClassificationVATHeaderType.
 *
 * Členění DPH
 * XSD Type: classificationVATHeaderType
 */
class ClassificationVATHeaderType
{
    /**
     * ID záznamu.
     */
    private ?int $id = null;

    /**
     * Odkaz na záznam v externí databázi. V databázi se nachází speciální tabulka obsahující
     *  vazbu mezi agendou a externí databází.
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Zkratka.
     */
    private ?string $code = null;

    /**
     * Název.
     */
    private ?string $name = null;

    /**
     * Typ členění DPH.
     */
    private ?\Pohoda\Type\RefType $vATType = null;

    /**
     * Text na dokladu.
     */
    private ?string $textOnDocument = null;

    /**
     * Text pro vyměření DPH.
     */
    private ?string $textForVATAssessment = null;

    /**
     * Nabízet.
     */
    private ?bool $offer = null;

    /**
     * Platnost od.
     */
    private ?\DateTime $validFrom = null;

    /**
     * Platnost do.
     */
    private ?\DateTime $validTill = null;

    /**
     * Řádek v Přiznání DPH.
     */
    private ?string $lineInVATReturn = null;

    /**
     * Sekce v Kontrolním hlášení (pouze CZ verze).
     */
    private ?string $sectionInVATLedgerStatement = null;

    /**
     * Kód režimu plnění (pouze CZ verze).
     */
    private ?string $codeOfSupplyMode = null;

    /**
     * Kód pro souhrnné hlášení.
     */
    private ?string $codeForSummaryReport = null;

    /**
     * Kód předmětu plnění (pouze CZ verze).
     */
    private ?string $codeOfObjectOfFulfilment = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     */
    private ?string $markRecord = null;

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
     * Gets as code.
     *
     * Zkratka.
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
     * Zkratka.
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
     * Gets as name.
     *
     * Název.
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
     * Název.
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
     * Gets as vATType.
     *
     * Typ členění DPH.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getVATType()
    {
        return $this->vATType;
    }

    /**
     * Sets a new vATType.
     *
     * Typ členění DPH.
     *
     * @return self
     */
    public function setVATType(\Pohoda\Type\RefType $vATType)
    {
        $this->vATType = $vATType;

        return $this;
    }

    /**
     * Gets as textOnDocument.
     *
     * Text na dokladu.
     *
     * @return string
     */
    public function getTextOnDocument()
    {
        return $this->textOnDocument;
    }

    /**
     * Sets a new textOnDocument.
     *
     * Text na dokladu.
     *
     * @param string $textOnDocument
     *
     * @return self
     */
    public function setTextOnDocument($textOnDocument)
    {
        $this->textOnDocument = $textOnDocument;

        return $this;
    }

    /**
     * Gets as textForVATAssessment.
     *
     * Text pro vyměření DPH.
     *
     * @return string
     */
    public function getTextForVATAssessment()
    {
        return $this->textForVATAssessment;
    }

    /**
     * Sets a new textForVATAssessment.
     *
     * Text pro vyměření DPH.
     *
     * @param string $textForVATAssessment
     *
     * @return self
     */
    public function setTextForVATAssessment($textForVATAssessment)
    {
        $this->textForVATAssessment = $textForVATAssessment;

        return $this;
    }

    /**
     * Gets as offer.
     *
     * Nabízet.
     *
     * @return bool
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer.
     *
     * Nabízet.
     *
     * @param bool $offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Gets as validFrom.
     *
     * Platnost od.
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom.
     *
     * Platnost od.
     *
     * @return self
     */
    public function setValidFrom(?\DateTime $validFrom = null)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Gets as validTill.
     *
     * Platnost do.
     *
     * @return \DateTime
     */
    public function getValidTill()
    {
        return $this->validTill;
    }

    /**
     * Sets a new validTill.
     *
     * Platnost do.
     *
     * @return self
     */
    public function setValidTill(?\DateTime $validTill = null)
    {
        $this->validTill = $validTill;

        return $this;
    }

    /**
     * Gets as lineInVATReturn.
     *
     * Řádek v Přiznání DPH.
     *
     * @return string
     */
    public function getLineInVATReturn()
    {
        return $this->lineInVATReturn;
    }

    /**
     * Sets a new lineInVATReturn.
     *
     * Řádek v Přiznání DPH.
     *
     * @param string $lineInVATReturn
     *
     * @return self
     */
    public function setLineInVATReturn($lineInVATReturn)
    {
        $this->lineInVATReturn = $lineInVATReturn;

        return $this;
    }

    /**
     * Gets as sectionInVATLedgerStatement.
     *
     * Sekce v Kontrolním hlášení (pouze CZ verze).
     *
     * @return string
     */
    public function getSectionInVATLedgerStatement()
    {
        return $this->sectionInVATLedgerStatement;
    }

    /**
     * Sets a new sectionInVATLedgerStatement.
     *
     * Sekce v Kontrolním hlášení (pouze CZ verze).
     *
     * @param string $sectionInVATLedgerStatement
     *
     * @return self
     */
    public function setSectionInVATLedgerStatement($sectionInVATLedgerStatement)
    {
        $this->sectionInVATLedgerStatement = $sectionInVATLedgerStatement;

        return $this;
    }

    /**
     * Gets as codeOfSupplyMode.
     *
     * Kód režimu plnění (pouze CZ verze).
     *
     * @return string
     */
    public function getCodeOfSupplyMode()
    {
        return $this->codeOfSupplyMode;
    }

    /**
     * Sets a new codeOfSupplyMode.
     *
     * Kód režimu plnění (pouze CZ verze).
     *
     * @param string $codeOfSupplyMode
     *
     * @return self
     */
    public function setCodeOfSupplyMode($codeOfSupplyMode)
    {
        $this->codeOfSupplyMode = $codeOfSupplyMode;

        return $this;
    }

    /**
     * Gets as codeForSummaryReport.
     *
     * Kód pro souhrnné hlášení.
     *
     * @return string
     */
    public function getCodeForSummaryReport()
    {
        return $this->codeForSummaryReport;
    }

    /**
     * Sets a new codeForSummaryReport.
     *
     * Kód pro souhrnné hlášení.
     *
     * @param string $codeForSummaryReport
     *
     * @return self
     */
    public function setCodeForSummaryReport($codeForSummaryReport)
    {
        $this->codeForSummaryReport = $codeForSummaryReport;

        return $this;
    }

    /**
     * Gets as codeOfObjectOfFulfilment.
     *
     * Kód předmětu plnění (pouze CZ verze).
     *
     * @return string
     */
    public function getCodeOfObjectOfFulfilment()
    {
        return $this->codeOfObjectOfFulfilment;
    }

    /**
     * Sets a new codeOfObjectOfFulfilment.
     *
     * Kód předmětu plnění (pouze CZ verze).
     *
     * @param string $codeOfObjectOfFulfilment
     *
     * @return self
     */
    public function setCodeOfObjectOfFulfilment($codeOfObjectOfFulfilment)
    {
        $this->codeOfObjectOfFulfilment = $codeOfObjectOfFulfilment;

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
}
