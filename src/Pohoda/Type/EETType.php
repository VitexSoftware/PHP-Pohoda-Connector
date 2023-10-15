<?php

namespace Pohoda\Type;

/**
 * Class representing EETType
 *
 * Elektronická evidence tržeb. Jen CZ verze.
 * XSD Type: EETType
 */
class EETType
{
    /**
     * Stav záznamu v agendě EET.
     *
     * @var string $stateEET
     */
    private $stateEET = null;

    /**
     * Podrobné informace o odeslání informací pro EET.
     *
     * @var \Pohoda\Type\DetailEETType[] $detailEET
     */
    private $detailEET = [
        
    ];

    /**
     * Profil EET, pod kterým bude tržba evidována na serveru EET.
     *
     * @var \Pohoda\Type\RefType $profile
     */
    private $profile = null;

    /**
     * Gets as stateEET
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
     * Sets a new stateEET
     *
     * Stav záznamu v agendě EET.
     *
     * @param string $stateEET
     * @return self
     */
    public function setStateEET($stateEET)
    {
        $this->stateEET = $stateEET;
        return $this;
    }

    /**
     * Adds as detailEET
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @return self
     * @param \Pohoda\Type\DetailEETType $detailEET
     */
    public function addToDetailEET(\Pohoda\Type\DetailEETType $detailEET)
    {
        $this->detailEET[] = $detailEET;
        return $this;
    }

    /**
     * isset detailEET
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailEET($index)
    {
        return isset($this->detailEET[$index]);
    }

    /**
     * unset detailEET
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailEET($index)
    {
        unset($this->detailEET[$index]);
    }

    /**
     * Gets as detailEET
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
     * Sets a new detailEET
     *
     * Podrobné informace o odeslání informací pro EET.
     *
     * @param \Pohoda\Type\DetailEETType[] $detailEET
     * @return self
     */
    public function setDetailEET(array $detailEET = null)
    {
        $this->detailEET = $detailEET;
        return $this;
    }

    /**
     * Gets as profile
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
     * Sets a new profile
     *
     * Profil EET, pod kterým bude tržba evidována na serveru EET.
     *
     * @param \Pohoda\Type\RefType $profile
     * @return self
     */
    public function setProfile(?\Pohoda\Type\RefType $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }
}

