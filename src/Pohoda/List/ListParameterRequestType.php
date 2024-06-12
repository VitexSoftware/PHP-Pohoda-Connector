<?php

namespace Pohoda\List;

/**
 * Class representing ListParameterRequestType
 *
 *
 * XSD Type: listParameterRequestType
 */
class ListParameterRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $parameterVersion
     */
    private $parameterVersion = null;

    /**
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @var \Pohoda\List\RequestParameterType[] $requestParameter
     */
    private $requestParameter = [
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as parameterVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getParameterVersion()
    {
        return $this->parameterVersion;
    }

    /**
     * Sets a new parameterVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $parameterVersion
     * @return self
     */
    public function setParameterVersion($parameterVersion)
    {
        $this->parameterVersion = $parameterVersion;
        return $this;
    }

    /**
     * Adds as requestParameter
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @return self
     * @param \Pohoda\List\RequestParameterType $requestParameter
     */
    public function addToRequestParameter(\Pohoda\List\RequestParameterType $requestParameter)
    {
        $this->requestParameter[] = $requestParameter;
        return $this;
    }

    /**
     * isset requestParameter
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestParameter($index)
    {
        return isset($this->requestParameter[$index]);
    }

    /**
     * unset requestParameter
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestParameter($index)
    {
        unset($this->requestParameter[$index]);
    }

    /**
     * Gets as requestParameter
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @return \Pohoda\List\RequestParameterType[]
     */
    public function getRequestParameter()
    {
        return $this->requestParameter;
    }

    /**
     * Sets a new requestParameter
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param \Pohoda\List\RequestParameterType[] $requestParameter
     * @return self
     */
    public function setRequestParameter(array $requestParameter = null)
    {
        $this->requestParameter = $requestParameter;
        return $this;
    }
}
