<?php

namespace Pohoda\Type;

/**
 * Class representing ResponsiblePersonType
 *
 *
 * XSD Type: responsiblePersonType
 */
class ResponsiblePersonType
{
    /**
     * ID odpovědné osoby (jen pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $surname
     */
    private $surname = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $degree
     */
    private $degree = null;

    /**
     * Gets as id
     *
     * ID odpovědné osoby (jen pro export).
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
     * ID odpovědné osoby (jen pro export).
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
     * Gets as surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
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
     * Gets as degree
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets a new degree
     *
     * @param string $degree
     * @return self
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
        return $this;
    }
}

