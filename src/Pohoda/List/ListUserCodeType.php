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

namespace Pohoda\List;

/**
 * Class representing ListUserCodeType.
 *
 * Definice uživatelského seznamu.
 * XSD Type: listUserCodeType
 */
class ListUserCodeType
{
    private ?string $version = null;
    private ?\DateTime $dateTimeStamp = null;
    private ?\DateTime $dateValidFrom = null;
    private ?string $state = null;
    private ?int $id = null;
    private ?string $code = null;
    private ?string $name = null;
    private ?string $constants = null;

    /**
     * @var \Pohoda\List\ItemUserCodeType[]
     */
    private array $itemUserCode = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as dateTimeStamp.
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp.
     *
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;

        return $this;
    }

    /**
     * Gets as dateValidFrom.
     *
     * @return \DateTime
     */
    public function getDateValidFrom()
    {
        return $this->dateValidFrom;
    }

    /**
     * Sets a new dateValidFrom.
     *
     * @return self
     */
    public function setDateValidFrom(\DateTime $dateValidFrom)
    {
        $this->dateValidFrom = $dateValidFrom;

        return $this;
    }

    /**
     * Gets as state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

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
     * Gets as constants.
     *
     * @return string
     */
    public function getConstants()
    {
        return $this->constants;
    }

    /**
     * Sets a new constants.
     *
     * @param string $constants
     *
     * @return self
     */
    public function setConstants($constants)
    {
        $this->constants = $constants;

        return $this;
    }

    /**
     * Adds as itemUserCode.
     *
     * @return self
     */
    public function addToItemUserCode(\Pohoda\List\ItemUserCodeType $itemUserCode)
    {
        $this->itemUserCode[] = $itemUserCode;

        return $this;
    }

    /**
     * isset itemUserCode.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetItemUserCode($index)
    {
        return isset($this->itemUserCode[$index]);
    }

    /**
     * unset itemUserCode.
     *
     * @param int|string $index
     */
    public function unsetItemUserCode($index): void
    {
        unset($this->itemUserCode[$index]);
    }

    /**
     * Gets as itemUserCode.
     *
     * @return \Pohoda\List\ItemUserCodeType[]
     */
    public function getItemUserCode()
    {
        return $this->itemUserCode;
    }

    /**
     * Sets a new itemUserCode.
     *
     * @param \Pohoda\List\ItemUserCodeType[] $itemUserCode
     *
     * @return self
     */
    public function setItemUserCode(?array $itemUserCode = null)
    {
        $this->itemUserCode = $itemUserCode;

        return $this;
    }
}
