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
 * Class representing ListParameterRequestType.
 *
 * XSD Type: listParameterRequestType
 */
class ListParameterRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $parameterVersion = null;

    /**
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @var \Pohoda\List\RequestParameterType[]
     */
    private array $requestParameter = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as parameterVersion.
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
     * Sets a new parameterVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $parameterVersion
     *
     * @return self
     */
    public function setParameterVersion($parameterVersion)
    {
        $this->parameterVersion = $parameterVersion;

        return $this;
    }

    /**
     * Adds as requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @return self
     */
    public function addToRequestParameter(\Pohoda\List\RequestParameterType $requestParameter)
    {
        $this->requestParameter[] = $requestParameter;

        return $this;
    }

    /**
     * isset requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestParameter($index)
    {
        return isset($this->requestParameter[$index]);
    }

    /**
     * unset requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param int|string $index
     */
    public function unsetRequestParameter($index): void
    {
        unset($this->requestParameter[$index]);
    }

    /**
     * Gets as requestParameter.
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
     * Sets a new requestParameter.
     *
     * Atributy určují výběr agend pro export parametrů. Pokud není zadán žádný, vyexportují se parametry všech agend.
     *
     * @param \Pohoda\List\RequestParameterType[] $requestParameter
     *
     * @return self
     */
    public function setRequestParameter(?array $requestParameter = null)
    {
        $this->requestParameter = $requestParameter;

        return $this;
    }
}
