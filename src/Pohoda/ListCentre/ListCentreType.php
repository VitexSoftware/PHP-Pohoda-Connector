<?php

namespace Pohoda\ListCentre;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCentreType
 *
 *
 * XSD Type: listCentreType
 */
class ListCentreType extends ListVersionType
{
    /**
     * @var \Pohoda\Centre\CentreType[] $centre
     */
    private $centre = [
        
    ];

    /**
     * Adds as centre
     *
     * @return self
     * @param \Pohoda\Centre\CentreType $centre
     */
    public function addToCentre(\Pohoda\Centre\CentreType $centre)
    {
        $this->centre[] = $centre;
        return $this;
    }

    /**
     * isset centre
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCentre($index)
    {
        return isset($this->centre[$index]);
    }

    /**
     * unset centre
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCentre($index)
    {
        unset($this->centre[$index]);
    }

    /**
     * Gets as centre
     *
     * @return \Pohoda\Centre\CentreType[]
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * @param \Pohoda\Centre\CentreType[] $centre
     * @return self
     */
    public function setCentre(array $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }
}

