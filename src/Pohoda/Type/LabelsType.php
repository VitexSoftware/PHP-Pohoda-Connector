<?php

namespace Pohoda\Type;

/**
 * Class representing LabelsType
 *
 * Seznam štítku záznamu.
 * XSD Type: labelsType
 */
class LabelsType
{
    /**
     * @var \Pohoda\Type\LabelType[] $label
     */
    private $label = [
    ];

    /**
     * Adds as label
     *
     * @return self
     * @param \Pohoda\Type\LabelType $label
     */
    public function addToLabel(\Pohoda\Type\LabelType $label)
    {
        $this->label[] = $label;
        return $this;
    }

    /**
     * isset label
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabel($index)
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * @param \Pohoda\Type\LabelType[] $label
     * @return self
     */
    public function setLabel(array $label)
    {
        $this->label = $label;
        return $this;
    }
}
