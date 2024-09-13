<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pohoda\Parameter;

/**
 * Class representing CtrlDefType.
 *
 * Definice prvku formuláře.
 * XSD Type: ctrlDefType
 */
class CtrlDefType
{
    private string $name = null;
    private string $label = null;
    private \Pohoda\Type\RectangleType $rect = null;
    private string $type = null;
    private int $style = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Gets as rect.
     *
     * @return \Pohoda\Type\RectangleType
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * Sets a new rect.
     *
     * @return self
     */
    public function setRect(\Pohoda\Type\RectangleType $rect)
    {
        $this->rect = $rect;

        return $this;
    }

    /**
     * Gets as type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as style.
     *
     * @return int
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Sets a new style.
     *
     * @param int $style
     *
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }
}
