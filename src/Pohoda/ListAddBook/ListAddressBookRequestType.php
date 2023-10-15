<?php

namespace Pohoda\ListAddBook;

/**
 * Class representing ListAddressBookRequestType
 *
 *
 * XSD Type: listAddressBookRequestType
 */
class ListAddressBookRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $addressBookVersion
     */
    private $addressBookVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestAddressBookType[] $requestAddressBook
     */
    private $requestAddressBook = [

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
     * Gets as addressBookVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getAddressBookVersion()
    {
        return $this->addressBookVersion;
    }

    /**
     * Sets a new addressBookVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $addressBookVersion
     * @return self
     */
    public function setAddressBookVersion($addressBookVersion)
    {
        $this->addressBookVersion = $addressBookVersion;
        return $this;
    }

    /**
     * Gets as extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;
        return $this;
    }

    /**
     * Adds as requestAddressBook
     *
     * @return self
     * @param \Pohoda\Filter\RequestAddressBookType $requestAddressBook
     */
    public function addToRequestAddressBook(\Pohoda\Filter\RequestAddressBookType $requestAddressBook)
    {
        $this->requestAddressBook[] = $requestAddressBook;
        return $this;
    }

    /**
     * isset requestAddressBook
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestAddressBook($index)
    {
        return isset($this->requestAddressBook[$index]);
    }

    /**
     * unset requestAddressBook
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestAddressBook($index)
    {
        unset($this->requestAddressBook[$index]);
    }

    /**
     * Gets as requestAddressBook
     *
     * @return \Pohoda\Filter\RequestAddressBookType[]
     */
    public function getRequestAddressBook()
    {
        return $this->requestAddressBook;
    }

    /**
     * Sets a new requestAddressBook
     *
     * @param \Pohoda\Filter\RequestAddressBookType[] $requestAddressBook
     * @return self
     */
    public function setRequestAddressBook(array $requestAddressBook)
    {
        $this->requestAddressBook = $requestAddressBook;
        return $this;
    }
}
