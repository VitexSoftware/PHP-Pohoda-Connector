<?php

namespace Pohoda\List;

/**
 * Class representing ItemUserCodeType
 *
 *
 * XSD Type: itemUserCodeType
 */
class ItemUserCodeType extends ItemType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var int $constant
     */
    private $constant = null;

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
     * Gets as constant
     *
     * @return int
     */
    public function getConstant()
    {
        return $this->constant;
    }

    /**
     * Sets a new constant
     *
     * @param int $constant
     * @return self
     */
    public function setConstant($constant)
    {
        $this->constant = $constant;
        return $this;
    }
}
