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

namespace Pohoda\Stock;

/**
 * Class representing RelatedLinkType.
 *
 * XSD Type: relatedLinkType
 */
class RelatedLinkType
{
    private ?string $addressURL = null;

    /**
     * Popis souvisejícího odkazu. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Odkaz_(1) .. n.
     */
    private ?string $description = null;

    /**
     * Pořadí (jen pro export).
     */
    private ?int $order = null;

    /**
     * Gets as addressURL.
     *
     * @return string
     */
    public function getAddressURL()
    {
        return $this->addressURL;
    }

    /**
     * Sets a new addressURL.
     *
     * @param string $addressURL
     *
     * @return self
     */
    public function setAddressURL($addressURL)
    {
        $this->addressURL = $addressURL;

        return $this;
    }

    /**
     * Gets as description.
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
     * Sets a new description.
     *
     * Popis souvisejícího odkazu. Povinné pole v programu POHODA. Pokud není zadáno nebo není unikátní, bude programem Pohoda automaticky vygenerován text: Odkaz_(1) .. n.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as order.
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
     * Sets a new order.
     *
     * Pořadí (jen pro export).
     *
     * @param int $order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
