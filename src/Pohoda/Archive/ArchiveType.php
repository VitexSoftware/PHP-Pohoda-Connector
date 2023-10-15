<?php

namespace Pohoda\Archive;

/**
 * Class representing ArchiveType
 *
 *
 * XSD Type: archiveType
 */
class ArchiveType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\Archive\VariableType[] $variable
     */
    private $variable = [
        
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as variable
     *
     * @return self
     * @param \Pohoda\Archive\VariableType $variable
     */
    public function addToVariable(\Pohoda\Archive\VariableType $variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * isset variable
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariable($index)
    {
        return isset($this->variable[$index]);
    }

    /**
     * unset variable
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariable($index)
    {
        unset($this->variable[$index]);
    }

    /**
     * Gets as variable
     *
     * @return \Pohoda\Archive\VariableType[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * @param \Pohoda\Archive\VariableType[] $variable
     * @return self
     */
    public function setVariable(array $variable = null)
    {
        $this->variable = $variable;
        return $this;
    }
}

