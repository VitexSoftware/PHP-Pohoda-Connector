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

namespace Pohoda\RulesPairing;

/**
 * Class representing RulesPairingItemType.
 *
 * XSD Type: rulesPairingItemType
 */
class RulesPairingItemType
{
    /**
     * Typ pohybu.
     */
    private ?string $movement = null;

    /**
     * Typ dokladu.
     *
     * @var string[]
     */
    private ?array $documents = null;

    /**
     * Pravidla párování.
     *
     * @var string[]
     */
    private ?array $pairings = null;

    /**
     * Porovnání částky.
     */
    private ?string $amountComparison = null;

    /**
     * Splněno při.
     */
    private ?string $fulfilled = null;

    /**
     * Konec skupiny.
     */
    private ?string $endGroup = null;

    /**
     * Ukončit.
     */
    private ?string $finish = null;

    /**
     * Poznámka.
     */
    private ?string $note = null;

    /**
     * Gets as movement.
     *
     * Typ pohybu.
     *
     * @return string
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * Sets a new movement.
     *
     * Typ pohybu.
     *
     * @param string $movement
     *
     * @return self
     */
    public function setMovement($movement)
    {
        $this->movement = $movement;

        return $this;
    }

    /**
     * Adds as document.
     *
     * Typ dokladu.
     *
     * @param string $document
     *
     * @return self
     */
    public function addToDocuments($document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * isset documents.
     *
     * Typ dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDocuments($index)
    {
        return isset($this->documents[$index]);
    }

    /**
     * unset documents.
     *
     * Typ dokladu.
     *
     * @param int|string $index
     */
    public function unsetDocuments($index): void
    {
        unset($this->documents[$index]);
    }

    /**
     * Gets as documents.
     *
     * Typ dokladu.
     *
     * @return string[]
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents.
     *
     * Typ dokladu.
     *
     * @param string $documents
     *
     * @return self
     */
    public function setDocuments(?array $documents = null)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Adds as pairing.
     *
     * Pravidla párování.
     *
     * @param string $pairing
     *
     * @return self
     */
    public function addToPairings($pairing)
    {
        $this->pairings[] = $pairing;

        return $this;
    }

    /**
     * isset pairings.
     *
     * Pravidla párování.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPairings($index)
    {
        return isset($this->pairings[$index]);
    }

    /**
     * unset pairings.
     *
     * Pravidla párování.
     *
     * @param int|string $index
     */
    public function unsetPairings($index): void
    {
        unset($this->pairings[$index]);
    }

    /**
     * Gets as pairings.
     *
     * Pravidla párování.
     *
     * @return string[]
     */
    public function getPairings()
    {
        return $this->pairings;
    }

    /**
     * Sets a new pairings.
     *
     * Pravidla párování.
     *
     * @param string $pairings
     *
     * @return self
     */
    public function setPairings(?array $pairings = null)
    {
        $this->pairings = $pairings;

        return $this;
    }

    /**
     * Gets as amountComparison.
     *
     * Porovnání částky.
     *
     * @return string
     */
    public function getAmountComparison()
    {
        return $this->amountComparison;
    }

    /**
     * Sets a new amountComparison.
     *
     * Porovnání částky.
     *
     * @param string $amountComparison
     *
     * @return self
     */
    public function setAmountComparison($amountComparison)
    {
        $this->amountComparison = $amountComparison;

        return $this;
    }

    /**
     * Gets as fulfilled.
     *
     * Splněno při.
     *
     * @return string
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }

    /**
     * Sets a new fulfilled.
     *
     * Splněno při.
     *
     * @param string $fulfilled
     *
     * @return self
     */
    public function setFulfilled($fulfilled)
    {
        $this->fulfilled = $fulfilled;

        return $this;
    }

    /**
     * Gets as endGroup.
     *
     * Konec skupiny.
     *
     * @return string
     */
    public function getEndGroup()
    {
        return $this->endGroup;
    }

    /**
     * Sets a new endGroup.
     *
     * Konec skupiny.
     *
     * @param string $endGroup
     *
     * @return self
     */
    public function setEndGroup($endGroup)
    {
        $this->endGroup = $endGroup;

        return $this;
    }

    /**
     * Gets as finish.
     *
     * Ukončit.
     *
     * @return string
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Sets a new finish.
     *
     * Ukončit.
     *
     * @param string $finish
     *
     * @return self
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Poznámka
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
     * Poznámka
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
