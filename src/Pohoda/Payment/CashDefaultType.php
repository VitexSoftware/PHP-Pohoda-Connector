<?php

namespace Pohoda\Payment;

/**
 * Class representing CashDefaultType
 *
 *
 * XSD Type: cashDefaultType
 */
class CashDefaultType
{
    /**
     * Úhrada je automaticky nabízena při vytváření nových dokladů v agendě Prodejky. Volba se nabízí pouze u Formy úhrady Hotovost.
     *
     * @var string $default
     */
    private $default = null;

    /**
     * Gets as default
     *
     * Úhrada je automaticky nabízena při vytváření nových dokladů v agendě Prodejky. Volba se nabízí pouze u Formy úhrady Hotovost.
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * Úhrada je automaticky nabízena při vytváření nových dokladů v agendě Prodejky. Volba se nabízí pouze u Formy úhrady Hotovost.
     *
     * @param string $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }
}
