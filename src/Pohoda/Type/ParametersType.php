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
 * Class representing ParametersType.
 *
 * XSD Type: parametersType
 */
class ParametersType
{
    /**
     * @var \Pohoda\Type\ParameterDocType[]
     */
    private array $parameter = [
    ];

    /**
     * Adds as parameter.
     *
     * @return self
     */
    public function addToParameter(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameter[] = $parameter;

        return $this;
    }

    /**
     * isset parameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter.
     *
     * @param int|string $index
     */
    public function unsetParameter($index): void
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameter
     *
     * @return self
     */
    public function setParameter(?array $parameter = null)
    {
        $this->parameter = $parameter;

        return $this;
    }
}
