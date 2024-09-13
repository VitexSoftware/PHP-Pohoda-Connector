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
 * Class representing ListRegistrationNumberType.
 *
 * XSD Type: listRegistrationNumberType
 */
class ListRegistrationNumberType extends ListVersionType
{
    /**
     * @var \Pohoda\RegistrationNumber\RegistrationNumberType[]
     */
    private array $registrationNumber = [
    ];

    /**
     * Adds as registrationNumber.
     *
     * @return self
     */
    public function addToRegistrationNumber(\Pohoda\RegistrationNumber\RegistrationNumberType $registrationNumber)
    {
        $this->registrationNumber[] = $registrationNumber;

        return $this;
    }

    /**
     * isset registrationNumber.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRegistrationNumber($index)
    {
        return isset($this->registrationNumber[$index]);
    }

    /**
     * unset registrationNumber.
     *
     * @param int|string $index
     */
    public function unsetRegistrationNumber($index): void
    {
        unset($this->registrationNumber[$index]);
    }

    /**
     * Gets as registrationNumber.
     *
     * @return \Pohoda\RegistrationNumber\RegistrationNumberType[]
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Sets a new registrationNumber.
     *
     * @param \Pohoda\RegistrationNumber\RegistrationNumberType[] $registrationNumber
     *
     * @return self
     */
    public function setRegistrationNumber(?array $registrationNumber = null)
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }
}
