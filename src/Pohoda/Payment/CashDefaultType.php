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

namespace Pohoda\Payment;

/**
 * Class representing CashDefaultType.
 *
 * XSD Type: cashDefaultType
 */
class CashDefaultType
{
    /**
     * Úhrada je automaticky nabízena při vytváření nových dokladů v agendě Prodejky. Volba se nabízí pouze u Formy úhrady Hotovost.
     */
    private ?string $default = null;

    /**
     * Gets as default.
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
     * Sets a new default.
     *
     * Úhrada je automaticky nabízena při vytváření nových dokladů v agendě Prodejky. Volba se nabízí pouze u Formy úhrady Hotovost.
     *
     * @param string $default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }
}
