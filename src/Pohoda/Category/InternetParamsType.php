<?php

namespace Pohoda\Category;

/**
 * Class representing InternetParamsType
 *
 *
 * XSD Type: internetParamsType
 */
class InternetParamsType
{
    /**
     * Verze 2.0, hodnoty ID parametrů internetových obchodů jsou oddělené čárkou.
     *
     * @var string $idInternetParams
     */
    private $idInternetParams = null;

    /**
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @var \Pohoda\Type\RefTypeLongType[] $intParameter
     */
    private $intParameter = [
    ];

    /**
     * Gets as idInternetParams
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
     * Sets a new idInternetParams
     *
     * Verze 2.0, hodnoty ID parametrů internetových obchodů jsou oddělené čárkou.
     *
     * @param string $idInternetParams
     * @return self
     */
    public function setIdInternetParams($idInternetParams)
    {
        $this->idInternetParams = $idInternetParams;
        return $this;
    }

    /**
     * Adds as intParameter
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @return self
     * @param \Pohoda\Type\RefTypeLongType $intParameter
     */
    public function addToIntParameter(\Pohoda\Type\RefTypeLongType $intParameter)
    {
        $this->intParameter[] = $intParameter;
        return $this;
    }

    /**
     * isset intParameter
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntParameter($index)
    {
        return isset($this->intParameter[$index]);
    }

    /**
     * unset intParameter
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntParameter($index)
    {
        unset($this->intParameter[$index]);
    }

    /**
     * Gets as intParameter
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
     * Sets a new intParameter
     *
     * Verze 2.1 a vyšší, hodnoty parametrů internetových obchodů.
     *
     * @param \Pohoda\Type\RefTypeLongType[] $intParameter
     * @return self
     */
    public function setIntParameter(array $intParameter = null)
    {
        $this->intParameter = $intParameter;
        return $this;
    }
}
