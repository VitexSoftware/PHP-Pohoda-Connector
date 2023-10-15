<?php

namespace Pohoda\List;

/**
 * Class representing ListRequestType
 *
 *
 * XSD Type: listRequestType
 */
class ListRequestType
{
    /**
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Gets as version
     *
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
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
     * Verze exportovaného XML. Podrobnosti k jednotlivým verzím najdete na www.stormware.cz/xml.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}

