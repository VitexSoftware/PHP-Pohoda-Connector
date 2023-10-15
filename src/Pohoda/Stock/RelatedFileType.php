<?php

namespace Pohoda\Stock;

/**
 * Class representing RelatedFileType
 *
 *
 * XSD Type: relatedFileType
 */
class RelatedFileType
{
    /**
     * @var string $filepath
     */
    private $filepath = null;

    /**
     * Popis souvisejícího souboru. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Soubor_(1) .. n.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Pořadí (jen pro export).
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Gets as filepath
     *
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Sets a new filepath
     *
     * @param string $filepath
     * @return self
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis souvisejícího souboru. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Soubor_(1) .. n.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Popis souvisejícího souboru. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Soubor_(1) .. n.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as order
     *
     * Pořadí (jen pro export).
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Pořadí (jen pro export).
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}

