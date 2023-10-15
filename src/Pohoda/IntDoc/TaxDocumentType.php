<?php

namespace Pohoda\IntDoc;

/**
 * Class representing TaxDocumentType
 *
 *
 * XSD Type: taxDocumentType
 */
class TaxDocumentType
{
    /**
     * Vazba likvidace na daňový doklad.
     *
     * @var \Pohoda\Type\SourceDocumentItemType $sourceLiquidation
     */
    private $sourceLiquidation = null;

    /**
     * Gets as sourceLiquidation
     *
     * Vazba likvidace na daňový doklad.
     *
     * @return \Pohoda\Type\SourceDocumentItemType
     */
    public function getSourceLiquidation()
    {
        return $this->sourceLiquidation;
    }

    /**
     * Sets a new sourceLiquidation
     *
     * Vazba likvidace na daňový doklad.
     *
     * @param \Pohoda\Type\SourceDocumentItemType $sourceLiquidation
     * @return self
     */
    public function setSourceLiquidation(\Pohoda\Type\SourceDocumentItemType $sourceLiquidation)
    {
        $this->sourceLiquidation = $sourceLiquidation;
        return $this;
    }
}
