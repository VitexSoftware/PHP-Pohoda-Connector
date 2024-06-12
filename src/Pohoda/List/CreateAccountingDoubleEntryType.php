<?php

namespace Pohoda\List;

/**
 * Class representing CreateAccountingDoubleEntryType
 *
 *
 * XSD Type: createAccountingDoubleEntryType
 */
class CreateAccountingDoubleEntryType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \Pohoda\List\CreateAccountingType[] $createAccounting
     */
    private $createAccounting = [
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
     * Adds as createAccounting
     *
     * @return self
     * @param \Pohoda\List\CreateAccountingType $createAccounting
     */
    public function addToCreateAccounting(\Pohoda\List\CreateAccountingType $createAccounting)
    {
        $this->createAccounting[] = $createAccounting;
        return $this;
    }

    /**
     * isset createAccounting
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreateAccounting($index)
    {
        return isset($this->createAccounting[$index]);
    }

    /**
     * unset createAccounting
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreateAccounting($index)
    {
        unset($this->createAccounting[$index]);
    }

    /**
     * Gets as createAccounting
     *
     * @return \Pohoda\List\CreateAccountingType[]
     */
    public function getCreateAccounting()
    {
        return $this->createAccounting;
    }

    /**
     * Sets a new createAccounting
     *
     * @param \Pohoda\List\CreateAccountingType[] $createAccounting
     * @return self
     */
    public function setCreateAccounting(array $createAccounting)
    {
        $this->createAccounting = $createAccounting;
        return $this;
    }
}
