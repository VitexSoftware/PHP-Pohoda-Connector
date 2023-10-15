<?php

namespace Pohoda\IntParam;

/**
 * Class representing ParameterListItemType
 *
 *
 * XSD Type: parameterListItemType
 */
class ParameterListItemType
{
    /**
     * ID záznamu (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var int $sequence
     */
    private $sequence = null;

    /**
     * Gets as id
     *
     * ID záznamu (jen pro export).
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
     * ID záznamu (jen pro export).
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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * @param int $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }
}
