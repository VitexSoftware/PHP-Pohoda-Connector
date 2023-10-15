<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListUserCodePackType
 *
 *
 * XSD Type: listUserCodePackType
 */
class ListUserCodePackType extends ListVersionType
{
    /**
     * @var \Pohoda\List\ListUserCodeType[] $listUserCode
     */
    private $listUserCode = [
        
    ];

    /**
     * Adds as listUserCode
     *
     * @return self
     * @param \Pohoda\List\ListUserCodeType $listUserCode
     */
    public function addToListUserCode(\Pohoda\List\ListUserCodeType $listUserCode)
    {
        $this->listUserCode[] = $listUserCode;
        return $this;
    }

    /**
     * isset listUserCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListUserCode($index)
    {
        return isset($this->listUserCode[$index]);
    }

    /**
     * unset listUserCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListUserCode($index)
    {
        unset($this->listUserCode[$index]);
    }

    /**
     * Gets as listUserCode
     *
     * @return \Pohoda\List\ListUserCodeType[]
     */
    public function getListUserCode()
    {
        return $this->listUserCode;
    }

    /**
     * Sets a new listUserCode
     *
     * @param \Pohoda\List\ListUserCodeType[] $listUserCode
     * @return self
     */
    public function setListUserCode(array $listUserCode = null)
    {
        $this->listUserCode = $listUserCode;
        return $this;
    }
}

