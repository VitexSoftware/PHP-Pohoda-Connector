<?php

namespace Pohoda\ClassificationVAT;

/**
 * Class representing ClassificationVATType
 *
 *
 * XSD Type: classificationVATType
 */
class ClassificationVATType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\ClassificationVAT\ClassificationVATHeaderType $classificationVATHeader
     */
    private $classificationVATHeader = null;

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
     * Gets as classificationVATHeader
     *
     * @return \Pohoda\ClassificationVAT\ClassificationVATHeaderType
     */
    public function getClassificationVATHeader()
    {
        return $this->classificationVATHeader;
    }

    /**
     * Sets a new classificationVATHeader
     *
     * @param \Pohoda\ClassificationVAT\ClassificationVATHeaderType $classificationVATHeader
     * @return self
     */
    public function setClassificationVATHeader(?\Pohoda\ClassificationVAT\ClassificationVATHeaderType $classificationVATHeader = null)
    {
        $this->classificationVATHeader = $classificationVATHeader;
        return $this;
    }
}
