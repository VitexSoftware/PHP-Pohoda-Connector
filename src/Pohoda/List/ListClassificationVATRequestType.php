<?php

namespace Pohoda\List;

/**
 * Class representing ListClassificationVATRequestType
 *
 *
 * XSD Type: listClassificationVATRequestType
 */
class ListClassificationVATRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $classificationVATVersion
     */
    private $classificationVATVersion = null;

    /**
     * @var \Pohoda\List\RequestClassificationVATType[] $requestClassificationVAT
     */
    private $requestClassificationVAT = [
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
     * Gets as classificationVATVersion
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getClassificationVATVersion()
    {
        return $this->classificationVATVersion;
    }

    /**
     * Sets a new classificationVATVersion
     *
     * Požadovaná verze.
     *
     * @param string $classificationVATVersion
     * @return self
     */
    public function setClassificationVATVersion($classificationVATVersion)
    {
        $this->classificationVATVersion = $classificationVATVersion;
        return $this;
    }

    /**
     * Adds as requestClassificationVAT
     *
     * @return self
     * @param \Pohoda\List\RequestClassificationVATType $requestClassificationVAT
     */
    public function addToRequestClassificationVAT(\Pohoda\List\RequestClassificationVATType $requestClassificationVAT)
    {
        $this->requestClassificationVAT[] = $requestClassificationVAT;
        return $this;
    }

    /**
     * isset requestClassificationVAT
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestClassificationVAT($index)
    {
        return isset($this->requestClassificationVAT[$index]);
    }

    /**
     * unset requestClassificationVAT
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestClassificationVAT($index)
    {
        unset($this->requestClassificationVAT[$index]);
    }

    /**
     * Gets as requestClassificationVAT
     *
     * @return \Pohoda\List\RequestClassificationVATType[]
     */
    public function getRequestClassificationVAT()
    {
        return $this->requestClassificationVAT;
    }

    /**
     * Sets a new requestClassificationVAT
     *
     * @param \Pohoda\List\RequestClassificationVATType[] $requestClassificationVAT
     * @return self
     */
    public function setRequestClassificationVAT(array $requestClassificationVAT)
    {
        $this->requestClassificationVAT = $requestClassificationVAT;
        return $this;
    }
}
