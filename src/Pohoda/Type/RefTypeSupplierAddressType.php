<?php

namespace Pohoda\Type;

/**
 * Class representing RefTypeSupplierAddressType
 *
 * Odkaz na entitu. Vyšší prioritu má element "id".
 * XSD Type: refTypeSupplierAddress
 */
class RefTypeSupplierAddressType
{
    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $ids
     */
    private $ids = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ids
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids
     *
     * @param string $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }
}

