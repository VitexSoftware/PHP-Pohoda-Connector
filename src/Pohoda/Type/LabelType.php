<?php

namespace Pohoda\Type;

/**
 * Class representing LabelType
 *
 * Odkaz na entitu. Vyšší prioritu má element "id".
 * XSD Type: labelType
 */
class LabelType
{
    /**
     * Vytvoření nebo smazání štítku na záznamu. Výchozí hodnota = add. Smazání štítku na záznamu je povoleno pouze v agendách: (Zásoby, Adresář)
     *
     * @var string $actionType
     */
    private $actionType = null;

    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $ids
     */
    private $ids = null;

    /**
     * Gets as actionType
     *
     * Vytvoření nebo smazání štítku na záznamu. Výchozí hodnota = add. Smazání štítku na záznamu je povoleno pouze v agendách: (Zásoby, Adresář)
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Vytvoření nebo smazání štítku na záznamu. Výchozí hodnota = add. Smazání štítku na záznamu je povoleno pouze v agendách: (Zásoby, Adresář)
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

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
