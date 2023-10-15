<?php

namespace Pohoda\Print;

/**
 * Class representing ReportType
 *
 *
 * XSD Type: reportType
 */
class ReportType
{
    /**
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Název sestavy. Pouze export.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Popis sestavy. Pouze export.
     *
     * @var string $detail
     */
    private $detail = null;

    /**
     * Gets as id
     *
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
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
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
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
     * Gets as name
     *
     * Název sestavy. Pouze export.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Název sestavy. Pouze export.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Popis sestavy. Pouze export.
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Popis sestavy. Pouze export.
     *
     * @param string $detail
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }
}

