<?php

namespace Pohoda\ListCentre;

/**
 * Class representing ListRequestCentreType
 *
 *
 * XSD Type: listRequestCentreType
 */
class ListRequestCentreType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze centre dokumentu.
     *
     * @var string $centreVersion
     */
    private $centreVersion = null;

    /**
     * @var \Pohoda\ListCentre\RequestCentreType[] $requestCentre
     */
    private $requestCentre = [

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
     * Gets as centreVersion
     *
     * Požadovaná verze centre dokumentu.
     *
     * @return string
     */
    public function getCentreVersion()
    {
        return $this->centreVersion;
    }

    /**
     * Sets a new centreVersion
     *
     * Požadovaná verze centre dokumentu.
     *
     * @param string $centreVersion
     * @return self
     */
    public function setCentreVersion($centreVersion)
    {
        $this->centreVersion = $centreVersion;
        return $this;
    }

    /**
     * Adds as requestCentre
     *
     * @return self
     * @param \Pohoda\ListCentre\RequestCentreType $requestCentre
     */
    public function addToRequestCentre(\Pohoda\ListCentre\RequestCentreType $requestCentre)
    {
        $this->requestCentre[] = $requestCentre;
        return $this;
    }

    /**
     * isset requestCentre
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestCentre($index)
    {
        return isset($this->requestCentre[$index]);
    }

    /**
     * unset requestCentre
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestCentre($index)
    {
        unset($this->requestCentre[$index]);
    }

    /**
     * Gets as requestCentre
     *
     * @return \Pohoda\ListCentre\RequestCentreType[]
     */
    public function getRequestCentre()
    {
        return $this->requestCentre;
    }

    /**
     * Sets a new requestCentre
     *
     * @param \Pohoda\ListCentre\RequestCentreType[] $requestCentre
     * @return self
     */
    public function setRequestCentre(array $requestCentre)
    {
        $this->requestCentre = $requestCentre;
        return $this;
    }
}
