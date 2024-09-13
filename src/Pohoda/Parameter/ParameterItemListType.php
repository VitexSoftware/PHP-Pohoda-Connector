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

namespace Pohoda\Parameter;

/**
 * Class representing ParameterItemListType.
 *
 * Seznam definic volitelných parametrů. U běžných agend je počet programově omezen na 92, uživatelské agendy mají maximálně 128 polí.
 * XSD Type: parameterItemListType
 */
class ParameterItemListType
{
    /**
     * @var \Pohoda\Parameter\ParameterDefType[]
     */
    private array $parameterDef = [
    ];

    /**
     * Adds as parameterDef.
     *
     * @return self
     */
    public function addToParameterDef(\Pohoda\Parameter\ParameterDefType $parameterDef)
    {
        $this->parameterDef[] = $parameterDef;

        return $this;
    }

    /**
     * isset parameterDef.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParameterDef($index)
    {
        return isset($this->parameterDef[$index]);
    }

    /**
     * unset parameterDef.
     *
     * @param int|string $index
     */
    public function unsetParameterDef($index): void
    {
        unset($this->parameterDef[$index]);
    }

    /**
     * Gets as parameterDef.
     *
     * @return \Pohoda\Parameter\ParameterDefType[]
     */
    public function getParameterDef()
    {
        return $this->parameterDef;
    }

    /**
     * Sets a new parameterDef.
     *
     * @param \Pohoda\Parameter\ParameterDefType[] $parameterDef
     *
     * @return self
     */
    public function setParameterDef(?array $parameterDef = null)
    {
        $this->parameterDef = $parameterDef;

        return $this;
    }
}
