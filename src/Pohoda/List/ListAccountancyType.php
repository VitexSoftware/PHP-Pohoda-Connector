<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListAccountancyType
 *
 *
 * XSD Type: listAccountancyType
 */
class ListAccountancyType extends ListVersionType
{
    /**
     * @var \Pohoda\Accountancy\AccountancyType[] $accountancy
     */
    private $accountancy = [
        
    ];

    /**
     * Adds as accountancy
     *
     * @return self
     * @param \Pohoda\Accountancy\AccountancyType $accountancy
     */
    public function addToAccountancy(\Pohoda\Accountancy\AccountancyType $accountancy)
    {
        $this->accountancy[] = $accountancy;
        return $this;
    }

    /**
     * isset accountancy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountancy($index)
    {
        return isset($this->accountancy[$index]);
    }

    /**
     * unset accountancy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountancy($index)
    {
        unset($this->accountancy[$index]);
    }

    /**
     * Gets as accountancy
     *
     * @return \Pohoda\Accountancy\AccountancyType[]
     */
    public function getAccountancy()
    {
        return $this->accountancy;
    }

    /**
     * Sets a new accountancy
     *
     * @param \Pohoda\Accountancy\AccountancyType[] $accountancy
     * @return self
     */
    public function setAccountancy(array $accountancy = null)
    {
        $this->accountancy = $accountancy;
        return $this;
    }
}

