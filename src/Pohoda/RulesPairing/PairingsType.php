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
 * Class representing PairingsType.
 *
 * Doklady.
 * XSD Type: pairingsType
 */
class PairingsType
{
    /**
     * @var string[]
     */
    private array $pairing = [
    ];

    /**
     * Adds as pairing.
     *
     * @param string $pairing
     *
     * @return self
     */
    public function addToPairing($pairing)
    {
        $this->pairing[] = $pairing;

        return $this;
    }

    /**
     * isset pairing.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPairing($index)
    {
        return isset($this->pairing[$index]);
    }

    /**
     * unset pairing.
     *
     * @param int|string $index
     */
    public function unsetPairing($index): void
    {
        unset($this->pairing[$index]);
    }

    /**
     * Gets as pairing.
     *
     * @return string[]
     */
    public function getPairing()
    {
        return $this->pairing;
    }

    /**
     * Sets a new pairing.
     *
     * @param string $pairing
     *
     * @return self
     */
    public function setPairing(array $pairing)
    {
        $this->pairing = $pairing;

        return $this;
    }
}
