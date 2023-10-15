<?php

namespace Pohoda\Type;

/**
 * Class representing RectangleType
 *
 *
 * XSD Type: rectangle
 */
class RectangleType
{
    /**
     * @var int $left
     */
    private $left = null;

    /**
     * @var int $top
     */
    private $top = null;

    /**
     * @var int $right
     */
    private $right = null;

    /**
     * @var int $bottom
     */
    private $bottom = null;

    /**
     * Gets as left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Sets a new left
     *
     * @param int $left
     * @return self
     */
    public function setLeft($left)
    {
        $this->left = $left;
        return $this;
    }

    /**
     * Gets as top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Sets a new top
     *
     * @param int $top
     * @return self
     */
    public function setTop($top)
    {
        $this->top = $top;
        return $this;
    }

    /**
     * Gets as right
     *
     * @return int
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Sets a new right
     *
     * @param int $right
     * @return self
     */
    public function setRight($right)
    {
        $this->right = $right;
        return $this;
    }

    /**
     * Gets as bottom
     *
     * @return int
     */
    public function getBottom()
    {
        return $this->bottom;
    }

    /**
     * Sets a new bottom
     *
     * @param int $bottom
     * @return self
     */
    public function setBottom($bottom)
    {
        $this->bottom = $bottom;
        return $this;
    }
}

