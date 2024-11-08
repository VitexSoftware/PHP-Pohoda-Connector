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

namespace Pohoda\MKasa;

/**
 * Class representing NonVatPayerWholePeriodType.
 *
 * XSD Type: nonVatPayerWholePeriodType
 */
class NonVatPayerWholePeriodType
{
    private ?string $identifiedPerson = null;

    /**
     * Gets as identifiedPerson.
     *
     * @return string
     */
    public function getIdentifiedPerson()
    {
        return $this->identifiedPerson;
    }

    /**
     * Sets a new identifiedPerson.
     *
     * @param string $identifiedPerson
     *
     * @return self
     */
    public function setIdentifiedPerson($identifiedPerson)
    {
        $this->identifiedPerson = $identifiedPerson;

        return $this;
    }
}
