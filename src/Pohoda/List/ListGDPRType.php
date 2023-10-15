<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListGDPRType
 *
 *
 * XSD Type: listGDPRType
 */
class ListGDPRType extends ListVersionType
{
    /**
     * @var \Pohoda\Gdpr\GDPRType[] $gDPR
     */
    private $gDPR = [

    ];

    /**
     * Adds as gDPR
     *
     * @return self
     * @param \Pohoda\Gdpr\GDPRType $gDPR
     */
    public function addToGDPR(\Pohoda\Gdpr\GDPRType $gDPR)
    {
        $this->gDPR[] = $gDPR;
        return $this;
    }

    /**
     * isset gDPR
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDPR($index)
    {
        return isset($this->gDPR[$index]);
    }

    /**
     * unset gDPR
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDPR($index)
    {
        unset($this->gDPR[$index]);
    }

    /**
     * Gets as gDPR
     *
     * @return \Pohoda\Gdpr\GDPRType[]
     */
    public function getGDPR()
    {
        return $this->gDPR;
    }

    /**
     * Sets a new gDPR
     *
     * @param \Pohoda\Gdpr\GDPRType[] $gDPR
     * @return self
     */
    public function setGDPR(array $gDPR = null)
    {
        $this->gDPR = $gDPR;
        return $this;
    }
}
