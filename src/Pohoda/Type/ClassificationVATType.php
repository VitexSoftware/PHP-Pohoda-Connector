<?php

namespace Pohoda\Type;

/**
 * Class representing ClassificationVATType
 *
 * Odkaz na entitu. Vyšší prioritu má element "id", dále "ids".
 * XSD Type: classificationVATType
 */
class ClassificationVATType
{
    /**
     * ID záznamu členění.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Zkratka členění DPH.
     *
     * @var string $ids
     */
    private $ids = null;

    /**
     * Typ členění.
     *
     * @var string $classificationVATType
     */
    private $classificationVATType = null;

    /**
     * Gets as id
     *
     * ID záznamu členění.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * ID záznamu členění.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ids
     *
     * Zkratka členění DPH.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * Zkratka členění DPH.
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Gets as classificationVATType
     *
     * Typ členění.
     *
     * @return string
     */
    public function getClassificationVATType()
    {
        return $this->classificationVATType;
    }

    /**
     * Sets a new classificationVATType
     *
     * Typ členění.
     *
     * @param string $classificationVATType
     * @return self
     */
    public function setClassificationVATType($classificationVATType)
    {
        $this->classificationVATType = $classificationVATType;
        return $this;
    }
}
