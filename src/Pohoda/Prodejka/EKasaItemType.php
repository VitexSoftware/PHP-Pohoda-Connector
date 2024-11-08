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

namespace Pohoda\Prodejka;

/**
 * Class representing EKasaItemType.
 *
 * Informace pro eKasu na položce dokladu (pouze SK verze).
 * XSD Type: eKasaItemType
 */
class EKasaItemType
{
    /**
     * Unikátny identifikátor pôvodného dokladu - eKasa (používa sa pri vrátení tovaru).
     */
    private ?string $refId = null;

    /**
     * eKasa typ vrátenia.
     */
    private ?string $refundType = null;

    /**
     * Gets as refId.
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
     * Sets a new refId.
     *
     * Unikátny identifikátor pôvodného dokladu - eKasa (používa sa pri vrátení tovaru).
     *
     * @param string $refId
     *
     * @return self
     */
    public function setRefId($refId)
    {
        $this->refId = $refId;

        return $this;
    }

    /**
     * Gets as refundType.
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
     * Sets a new refundType.
     *
     * eKasa typ vrátenia.
     *
     * @param string $refundType
     *
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;

        return $this;
    }
}
