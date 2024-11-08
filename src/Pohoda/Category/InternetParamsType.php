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

namespace Pohoda\Category;

/**
 * Class representing InternetParamsType.
 *
 * XSD Type: internetParamsType
 */
class InternetParamsType
{
    /**
     * Verze 2.0, hodnoty ID parametrů internetových obchodů jsou oddělené čárkou.
     */
    private ?string $idInternetParams = null;

    /**
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @var \Pohoda\Type\RefTypeLongType[]
     */
    private array $intParameter = [
    ];

    /**
     * Gets as idInternetParams.
     *
     * Verze 2.0, hodnoty ID parametrů internetových obchodů jsou oddělené čárkou.
     *
     * @return string
     */
    public function getIdInternetParams()
    {
        return $this->idInternetParams;
    }

    /**
     * Sets a new idInternetParams.
     *
     * Verze 2.0, hodnoty ID parametrů internetových obchodů jsou oddělené čárkou.
     *
     * @param string $idInternetParams
     *
     * @return self
     */
    public function setIdInternetParams($idInternetParams)
    {
        $this->idInternetParams = $idInternetParams;

        return $this;
    }

    /**
     * Adds as intParameter.
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @return self
     */
    public function addToIntParameter(\Pohoda\Type\RefTypeLongType $intParameter)
    {
        $this->intParameter[] = $intParameter;

        return $this;
    }

    /**
     * isset intParameter.
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
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
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
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
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @return \Pohoda\Type\RefTypeLongType[]
     */
    public function getIntParameter()
    {
        return $this->intParameter;
    }

    /**
     * Sets a new intParameter.
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @param \Pohoda\Type\RefTypeLongType[] $intParameter
     *
     * @return self
     */
    public function setIntParameter(?array $intParameter = null)
    {
        $this->intParameter = $intParameter;

        return $this;
    }
}
