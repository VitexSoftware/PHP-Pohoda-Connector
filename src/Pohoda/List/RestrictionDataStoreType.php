<?php

namespace Pohoda\List;

/**
 * Class representing RestrictionDataStoreType
 *
 *
 * XSD Type: restrictionDataStoreType
 */
class RestrictionDataStoreType
{
    /**
     * Exportovat volitelné parametry.
     *
     * @var string $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * Exportovat volitelné parametry.
     *
     * @return string
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Exportovat volitelné parametry.
     *
     * @param string $parameters
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }
}
