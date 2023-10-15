<?php

namespace Pohoda\List;

/**
 * Class representing RestrictionDocParamType
 *
 *
 * XSD Type: restrictionDocParamType
 */
class RestrictionDocParamType
{
    /**
     * Exportovat záznamy ze záložky "Doklady".
     *
     * @var string $documents
     */
    private $documents = null;

    /**
     * Exportovat volitelné parametry.
     *
     * @var string $parameters
     */
    private $parameters = null;

    /**
     * Exportovat záznamy ze záložky "Likvidace"
     *
     * @var string $liquidations
     */
    private $liquidations = null;

    /**
     * Gets as documents
     *
     * Exportovat záznamy ze záložky "Doklady".
     *
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Sets a new documents
     *
     * Exportovat záznamy ze záložky "Doklady".
     *
     * @param string $documents
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

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

    /**
     * Gets as liquidations
     *
     * Exportovat záznamy ze záložky "Likvidace"
     *
     * @return string
     */
    public function getLiquidations()
    {
        return $this->liquidations;
    }

    /**
     * Sets a new liquidations
     *
     * Exportovat záznamy ze záložky "Likvidace"
     *
     * @param string $liquidations
     * @return self
     */
    public function setLiquidations($liquidations)
    {
        $this->liquidations = $liquidations;
        return $this;
    }
}
