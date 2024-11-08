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
 * Class representing ListIntParamRequestType.
 *
 * XSD Type: listIntParamRequestType
 */
class ListIntParamRequestType
{
    private ?string $version = null;
    private ?\Pohoda\List\RequestIntParamType $requestIntParam = null;

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
     * Gets as requestIntParam.
     *
     * @return \Pohoda\List\RequestIntParamType
     */
    public function getRequestIntParam()
    {
        return $this->requestIntParam;
    }

    /**
     * Sets a new requestIntParam.
     *
     * @return self
     */
    public function setRequestIntParam(?\Pohoda\List\RequestIntParamType $requestIntParam = null)
    {
        $this->requestIntParam = $requestIntParam;

        return $this;
    }
}
