<?php

namespace Pohoda\List;

/**
 * Class representing RequestParameterType
 *
 *
 * XSD Type: requestParameterType
 */
class RequestParameterType
{
    /**
     * @var string $idsAgenda
     */
    private $idsAgenda = null;

    /**
     * @var string $idsUserAgenda
     */
    private $idsUserAgenda = null;

    /**
     * Gets as idsAgenda
     *
     * @return string
     */
    public function getIdsAgenda()
    {
        return $this->idsAgenda;
    }

    /**
     * Sets a new idsAgenda
     *
     * @param string $idsAgenda
     * @return self
     */
    public function setIdsAgenda($idsAgenda)
    {
        $this->idsAgenda = $idsAgenda;
        return $this;
    }

    /**
     * Gets as idsUserAgenda
     *
     * @return string
     */
    public function getIdsUserAgenda()
    {
        return $this->idsUserAgenda;
    }

    /**
     * Sets a new idsUserAgenda
     *
     * @param string $idsUserAgenda
     * @return self
     */
    public function setIdsUserAgenda($idsUserAgenda)
    {
        $this->idsUserAgenda = $idsUserAgenda;
        return $this;
    }
}

