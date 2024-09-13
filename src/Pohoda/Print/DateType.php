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

namespace Pohoda\Print;

/**
 * Class representing DateType.
 *
 * XSD Type: dateType
 */
class DateType
{
    /**
     * Datum.
     */
    private \DateTime $value = null;

    /**
     * Pouze export.
     */
    private string $name = null;

    /**
     * Gets as value.
     *
     * Datum.
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value.
     *
     * Datum.
     *
     * @return self
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Pouze export.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * Pouze export.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
