<?php

namespace Pohoda\Prodejka;

/**
 * Class representing EKasaItemType
 *
 * Informace pro eKasu na položce dokladu (pouze SK verze).
 * XSD Type: eKasaItemType
 */
class EKasaItemType
{
    /**
     * Unikátny identifikátor pôvodného dokladu - eKasa (používa sa pri vrátení tovaru).
     *
     * @var string $refId
     */
    private $refId = null;

    /**
     * eKasa typ vrátenia.
     *
     * @var string $refundType
     */
    private $refundType = null;

    /**
     * Gets as refId
     *
     * Unikátny identifikátor pôvodného dokladu - eKasa (používa sa pri vrátení tovaru).
     *
     * @return string
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Sets a new refId
     *
     * Unikátny identifikátor pôvodného dokladu - eKasa (používa sa pri vrátení tovaru).
     *
     * @param string $refId
     * @return self
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;
        return $this;
    }

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
