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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListEstablishmentType.
 *
 * XSD Type: listEstablishmentType
 */
class ListEstablishmentType extends ListVersionType
{
    /**
     * @var \Pohoda\Establishment\EstablishmentType[]
     */
    private array $establishment = [
    ];

    /**
     * Adds as establishment.
     *
     * @return self
     */
    public function addToEstablishment(\Pohoda\Establishment\EstablishmentType $establishment)
    {
        $this->establishment[] = $establishment;

        return $this;
    }

    /**
     * isset establishment.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEstablishment($index)
    {
        return isset($this->establishment[$index]);
    }

    /**
     * unset establishment.
     *
     * @param int|string $index
     */
    public function unsetEstablishment($index): void
    {
        unset($this->establishment[$index]);
    }

    /**
     * Gets as establishment.
     *
     * @return \Pohoda\Establishment\EstablishmentType[]
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment.
     *
     * @param \Pohoda\Establishment\EstablishmentType[] $establishment
     *
     * @return self
     */
    public function setEstablishment(?array $establishment = null)
    {
        $this->establishment = $establishment;

        return $this;
    }
}
