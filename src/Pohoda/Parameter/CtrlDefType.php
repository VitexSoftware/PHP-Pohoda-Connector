<?php

namespace Pohoda\Parameter;

/**
 * Class representing CtrlDefType
 *
 * Definice prvku formuláře.
 * XSD Type: ctrlDefType
 */
class CtrlDefType
{
    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $label
     */
    private $label = null;

    /**
     * @var \Pohoda\Type\RectangleType $rect
     */
    private $rect = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var int $style
     */
    private $style = null;

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
     * Gets as label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Gets as rect
     *
     * @return \Pohoda\Type\RectangleType
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * Sets a new rect
     *
     * @param \Pohoda\Type\RectangleType $rect
     * @return self
     */
    public function setRect(\Pohoda\Type\RectangleType $rect)
    {
        $this->rect = $rect;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as style
     *
     * @return int
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Sets a new style
     *
     * @param int $style
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }
}

