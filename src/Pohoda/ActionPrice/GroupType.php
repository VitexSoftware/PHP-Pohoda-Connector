<?php

namespace Pohoda\ActionPrice;

/**
 * Class representing GroupType
 *
 *
 * XSD Type: groupType
 */
class GroupType
{
    /**
     * Název skupiny adres.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis skupiny adres.
     *
     * @var string $descripton
     */
    private $descripton = null;

    /**
     * Gets as name
     *
     * Název skupiny adres.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Název skupiny adres.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as descripton
     *
     * Popis skupiny adres.
     *
     * @return string
     */
    public function getDescripton()
    {
        return $this->descripton;
    }

    /**
     * Sets a new descripton
     *
     * Popis skupiny adres.
     *
     * @param string $descripton
     * @return self
     */
    public function setDescripton($descripton)
    {
        $this->descripton = $descripton;
        return $this;
    }
}

