<?php

namespace Pohoda\Stock;

/**
 * Class representing RelatedLinkType
 *
 *
 * XSD Type: relatedLinkType
 */
class RelatedLinkType
{
    /**
     * @var string $addressURL
     */
    private $addressURL = null;

    /**
     * Popis souvisejícího odkazu. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Odkaz_(1) .. n.
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
     * Gets as addressURL
     *
     * @return string
     */
    public function getAddressURL()
    {
        return $this->addressURL;
    }

    /**
     * Sets a new addressURL
     *
     * @param string $addressURL
     * @return self
     */
    public function setAddressURL($addressURL)
    {
        $this->addressURL = $addressURL;
        return $this;
    }

    /**
     * Gets as description
     *
     * Popis souvisejícího odkazu. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Odkaz_(1) .. n.
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
     * Popis souvisejícího odkazu. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Odkaz_(1) .. n.
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

