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
 * Class representing FormItemListType.
 *
 * Seznam definic volitelných parametrů.
 * XSD Type: formItemListType
 */
class FormItemListType
{
    private ?string $formAgenda = null;

    /**
     * @var \Pohoda\Parameter\CtrlDefType[]
     */
    private array $ctrlDef = [
    ];

    /**
     * Gets as formAgenda.
     *
     * @return string
     */
    public function getFormAgenda()
    {
        return $this->formAgenda;
    }

    /**
     * Sets a new formAgenda.
     *
     * @param string $formAgenda
     *
     * @return self
     */
    public function setFormAgenda($formAgenda)
    {
        $this->formAgenda = $formAgenda;

        return $this;
    }

    /**
     * Adds as ctrlDef.
     *
     * @return self
     */
    public function addToCtrlDef(\Pohoda\Parameter\CtrlDefType $ctrlDef)
    {
        $this->ctrlDef[] = $ctrlDef;

        return $this;
    }

    /**
     * isset ctrlDef.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCtrlDef($index)
    {
        return isset($this->ctrlDef[$index]);
    }

    /**
     * unset ctrlDef.
     *
     * @param int|string $index
     */
    public function unsetCtrlDef($index): void
    {
        unset($this->ctrlDef[$index]);
    }

    /**
     * Gets as ctrlDef.
     *
     * @return \Pohoda\Parameter\CtrlDefType[]
     */
    public function getCtrlDef()
    {
        return $this->ctrlDef;
    }

    /**
     * Sets a new ctrlDef.
     *
     * @param \Pohoda\Parameter\CtrlDefType[] $ctrlDef
     *
     * @return self
     */
    public function setCtrlDef(?array $ctrlDef = null)
    {
        $this->ctrlDef = $ctrlDef;

        return $this;
    }
}
