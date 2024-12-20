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
 * Class representing EETType.
 *
 * Elektronická evidence tržeb. Jen CZ verze.
 * XSD Type: EETType
 */
class EETType
{
    /**
     * Stav záznamu v agendě EET.
     */
    private ?string $stateEET = null;

    /**
     * Podrobné informace o odeslání informací pro EET.
     *
     * @var \Pohoda\Type\DetailEETType[]
     */
    private array $detailEET = [
    ];

    /**
     * Profil EET, pod kterým bude tržba evidována na serveru EET.
     */
    private ?\Pohoda\Type\RefType $profile = null;

    /**
     * Gets as stateEET.
     *
     * Stav záznamu v agendě EET.
     *
     * @return string
     */
    public function getStateEET()
    {
        return $this->stateEET;
    }

    /**
     * Sets a new stateEET.
     *
     * Stav záznamu v agendě EET.
     *
     * @param string $stateEET
     *
     * @return self
     */
    public function setStateEET($stateEET)
    {
        $this->stateEET = $stateEET;

        return $this;
    }

    /**
     * Adds as detailEET.
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @return self
     */
    public function addToDetailEET(\Pohoda\Type\DetailEETType $detailEET)
    {
        $this->detailEET[] = $detailEET;

        return $this;
    }

    /**
     * isset detailEET.
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDetailEET($index)
    {
        return isset($this->detailEET[$index]);
    }

    /**
     * unset detailEET.
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param int|string $index
     */
    public function unsetDetailEET($index): void
    {
        unset($this->detailEET[$index]);
    }

    /**
     * Gets as detailEET.
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @return \Pohoda\Type\DetailEETType[]
     */
    public function getDetailEET()
    {
        return $this->detailEET;
    }

    /**
     * Sets a new detailEET.
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param \Pohoda\Type\DetailEETType[] $detailEET
     *
     * @return self
     */
    public function setDetailEET(?array $detailEET = null)
    {
        $this->detailEET = $detailEET;

        return $this;
    }

    /**
     * Gets as profile.
     *
     * Profil EET, pod kterým bude tržba evidována na serveru EET.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile.
     *
     * Profil EET, pod kterým bude tržba evidována na serveru EET.
     *
     * @return self
     */
    public function setProfile(?\Pohoda\Type\RefType $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }
}
