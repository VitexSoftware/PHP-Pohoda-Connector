<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListClassificationVATType
 *
 *
 * XSD Type: listClassificationVATType
 */
class ListClassificationVATType extends ListVersionType
{
    /**
     * @var \Pohoda\ClassificationVAT\ClassificationVATType[] $classificationVAT
     */
    private $classificationVAT = [
        
    ];

    /**
     * Adds as classificationVAT
     *
     * @return self
     * @param \Pohoda\ClassificationVAT\ClassificationVATType $classificationVAT
     */
    public function addToClassificationVAT(\Pohoda\ClassificationVAT\ClassificationVATType $classificationVAT)
    {
        $this->classificationVAT[] = $classificationVAT;
        return $this;
    }

    /**
     * isset classificationVAT
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationVAT($index)
    {
        return isset($this->classificationVAT[$index]);
    }

    /**
     * unset classificationVAT
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationVAT($index)
    {
        unset($this->classificationVAT[$index]);
    }

    /**
     * Gets as classificationVAT
     *
     * @return \Pohoda\ClassificationVAT\ClassificationVATType[]
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT
     *
     * @param \Pohoda\ClassificationVAT\ClassificationVATType[] $classificationVAT
     * @return self
     */
    public function setClassificationVAT(array $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;
        return $this;
    }
}

