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

namespace Pohoda\List;

/**
 * Class representing RestrictionDocParamType.
 *
 * XSD Type: restrictionDocParamType
 */
class RestrictionDocParamType
{
    /**
     * Exportovat záznamy ze záložky "Doklady".
     */
    private ?string $documents = null;

    /**
     * Exportovat volitelné parametry.
     */
    private ?string $parameters = null;

    /**
     * Exportovat záznamy ze záložky "Likvidace".
     */
    private ?string $liquidations = null;

    /**
     * Gets as documents.
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
     * Sets a new documents.
     *
     * Exportovat záznamy ze záložky "Doklady".
     *
     * @param string $documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * Gets as parameters.
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
     * Sets a new parameters.
     *
     * Exportovat volitelné parametry.
     *
     * @param string $parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Gets as liquidations.
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
     * Sets a new liquidations.
     *
     * Exportovat záznamy ze záložky "Likvidace"
     *
     * @param string $liquidations
     *
     * @return self
     */
    public function setLiquidations($liquidations)
    {
        $this->liquidations = $liquidations;

        return $this;
    }
}
