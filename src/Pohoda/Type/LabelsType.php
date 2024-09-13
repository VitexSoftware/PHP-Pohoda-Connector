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

namespace Pohoda\Type;

/**
 * Class representing LabelsType.
 *
 * Seznam štítku záznamu.
 * XSD Type: labelsType
 */
class LabelsType
{
    /**
     * @var \Pohoda\Type\LabelType[]
     */
    private array $label = [
    ];

    /**
     * Adds as label.
     *
     * @return self
     */
    public function addToLabel(\Pohoda\Type\LabelType $label)
    {
        $this->label[] = $label;

        return $this;
    }

    /**
     * isset label.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label.
     *
     * @param int|string $index
     */
    public function unsetLabel($index): void
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label.
     *
     * @param \Pohoda\Type\LabelType[] $label
     *
     * @return self
     */
    public function setLabel(array $label)
    {
        $this->label = $label;

        return $this;
    }
}
