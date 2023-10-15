<?php

namespace Pohoda\Type;

/**
 * Class representing CompanyType
 *
 *
 * XSD Type: companyType
 */
class CompanyType
{
    /**
     * Odkaz na adresu. Vyšší prioritu má element "id".
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Gets as id
     *
     * Odkaz na adresu. Vyšší prioritu má element "id".
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
     * Odkaz na adresu. Vyšší prioritu má element "id".
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
