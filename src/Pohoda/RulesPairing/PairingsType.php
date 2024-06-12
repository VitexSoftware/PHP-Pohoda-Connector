<?php

namespace Pohoda\RulesPairing;

/**
 * Class representing PairingsType
 *
 * Doklady.
 * XSD Type: pairingsType
 */
class PairingsType
{
    /**
     * @var string[] $pairing
     */
    private $pairing = [
    ];

    /**
     * Adds as pairing
     *
     * @return self
     * @param string $pairing
     */
    public function addToPairing($pairing)
    {
        $this->pairing[] = $pairing;
        return $this;
    }

    /**
     * isset pairing
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPairing($index)
    {
        return isset($this->pairing[$index]);
    }

    /**
     * unset pairing
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPairing($index)
    {
        unset($this->pairing[$index]);
    }

    /**
     * Gets as pairing
     *
     * @return string[]
     */
    public function getPairing()
    {
        return $this->pairing;
    }

    /**
     * Sets a new pairing
     *
     * @param string $pairing
     * @return self
     */
    public function setPairing(array $pairing)
    {
        $this->pairing = $pairing;
        return $this;
    }
}
