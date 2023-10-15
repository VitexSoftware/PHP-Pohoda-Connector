<?php

namespace Pohoda\List;

/**
 * Class representing ListIntParamRequestType
 *
 *
 * XSD Type: listIntParamRequestType
 */
class ListIntParamRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\List\RequestIntParamType $requestIntParam
     */
    private $requestIntParam = null;

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
     * Gets as requestIntParam
     *
     * @return \Pohoda\List\RequestIntParamType
     */
    public function getRequestIntParam()
    {
        return $this->requestIntParam;
    }

    /**
     * Sets a new requestIntParam
     *
     * @param \Pohoda\List\RequestIntParamType $requestIntParam
     * @return self
     */
    public function setRequestIntParam(?\Pohoda\List\RequestIntParamType $requestIntParam = null)
    {
        $this->requestIntParam = $requestIntParam;
        return $this;
    }
}
