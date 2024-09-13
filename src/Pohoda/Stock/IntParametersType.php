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

namespace Pohoda\Stock;

/**
 * Class representing IntParametersType.
 *
 * XSD Type: intParametersType
 */
class IntParametersType
{
    /**
     * @var \Pohoda\Stock\IntParameterType[]
     */
    private array $intParameter = [
    ];

    /**
     * Adds as intParameter.
     *
     * @return self
     */
    public function addToIntParameter(\Pohoda\Stock\IntParameterType $intParameter)
    {
        $this->intParameter[] = $intParameter;

        return $this;
    }

    /**
     * isset intParameter.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParameter($index)
    {
        return isset($this->intParameter[$index]);
    }

    /**
     * unset intParameter.
     *
     * @param int|string $index
     */
    public function unsetIntParameter($index): void
    {
        unset($this->intParameter[$index]);
    }

    /**
     * Gets as intParameter.
     *
     * @return \Pohoda\Stock\IntParameterType[]
     */
    public function getIntParameter()
    {
        return $this->intParameter;
    }

    /**
     * Sets a new intParameter.
     *
     * @param \Pohoda\Stock\IntParameterType[] $intParameter
     *
     * @return self
     */
    public function setIntParameter(?array $intParameter = null)
    {
        $this->intParameter = $intParameter;

        return $this;
    }
}
