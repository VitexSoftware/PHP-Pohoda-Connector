<?php

namespace Pohoda\Parameter;

/**
 * Class representing FormItemListType
 *
 * Seznam definic volitelných parametrů.
 * XSD Type: formItemListType
 */
class FormItemListType
{
    /**
     * @var string $formAgenda
     */
    private $formAgenda = null;

    /**
     * @var \Pohoda\Parameter\CtrlDefType[] $ctrlDef
     */
    private $ctrlDef = [

    ];

    /**
     * Gets as formAgenda
     *
     * @return string
     */
    public function getFormAgenda()
    {
        return $this->formAgenda;
    }

    /**
     * Sets a new formAgenda
     *
     * @param string $formAgenda
     * @return self
     */
    public function setFormAgenda($formAgenda)
    {
        $this->formAgenda = $formAgenda;
        return $this;
    }

    /**
     * Adds as ctrlDef
     *
     * @return self
     * @param \Pohoda\Parameter\CtrlDefType $ctrlDef
     */
    public function addToCtrlDef(\Pohoda\Parameter\CtrlDefType $ctrlDef)
    {
        $this->ctrlDef[] = $ctrlDef;
        return $this;
    }

    /**
     * isset ctrlDef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCtrlDef($index)
    {
        return isset($this->ctrlDef[$index]);
    }

    /**
     * unset ctrlDef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCtrlDef($index)
    {
        unset($this->ctrlDef[$index]);
    }

    /**
     * Gets as ctrlDef
     *
     * @return \Pohoda\Parameter\CtrlDefType[]
     */
    public function getCtrlDef()
    {
        return $this->ctrlDef;
    }

    /**
     * Sets a new ctrlDef
     *
     * @param \Pohoda\Parameter\CtrlDefType[] $ctrlDef
     * @return self
     */
    public function setCtrlDef(array $ctrlDef = null)
    {
        $this->ctrlDef = $ctrlDef;
        return $this;
    }
}
