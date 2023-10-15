<?php

namespace Pohoda\List;

/**
 * Class representing RequestUserCodeType
 *
 *
 * XSD Type: requestUserCodeType
 */
class RequestUserCodeType
{
    /**
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

