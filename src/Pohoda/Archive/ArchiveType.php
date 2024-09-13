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

namespace Pohoda\Archive;

/**
 * Class representing ArchiveType.
 *
 * XSD Type: archiveType
 */
class ArchiveType
{
    private string $version = null;

    /**
     * @var \Pohoda\Archive\VariableType[]
     */
    private array $variable = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as variable.
     *
     * @return self
     */
    public function addToVariable(\Pohoda\Archive\VariableType $variable)
    {
        $this->variable[] = $variable;

        return $this;
    }

    /**
     * isset variable.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVariable($index)
    {
        return isset($this->variable[$index]);
    }

    /**
     * unset variable.
     *
     * @param int|string $index
     */
    public function unsetVariable($index): void
    {
        unset($this->variable[$index]);
    }

    /**
     * Gets as variable.
     *
     * @return \Pohoda\Archive\VariableType[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable.
     *
     * @param \Pohoda\Archive\VariableType[] $variable
     *
     * @return self
     */
    public function setVariable(?array $variable = null)
    {
        $this->variable = $variable;

        return $this;
    }
}
