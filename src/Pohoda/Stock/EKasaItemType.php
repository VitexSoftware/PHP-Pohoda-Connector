<?php

namespace Pohoda\Stock;

/**
 * Class representing EKasaItemType
 *
 * Informace pro eKasu na zásobě (pouze SK verze).
 * XSD Type: eKasaItemType
 */
class EKasaItemType
{
    /**
     * eKasa typ vrátenia.
     *
     * @var string $refundType
     */
    private $refundType = null;

    /**
     * Gets as refundType
     *
     * eKasa typ vrátenia.
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * Sets a new refundType
     *
     * eKasa typ vrátenia.
     *
     * @param string $refundType
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
        return $this;
    }
}
