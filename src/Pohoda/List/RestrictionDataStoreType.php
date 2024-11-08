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
 * Class representing RestrictionDataStoreType.
 *
 * XSD Type: restrictionDataStoreType
 */
class RestrictionDataStoreType
{
    /**
     * Exportovat volitelné parametry.
     */
    private ?string $parameters = null;

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
}
