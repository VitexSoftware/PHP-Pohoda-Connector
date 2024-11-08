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

namespace Pohoda\ListAddBook;

/**
 * Class representing ListAddressBookRequestType.
 *
 * XSD Type: listAddressBookRequestType
 */
class ListAddressBookRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze dokladu.
     */
    private ?string $addressBookVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     */
    private ?string $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestAddressBookType[]
     */
    private array $requestAddressBook = [
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
     * Gets as addressBookVersion.
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
     * Sets a new addressBookVersion.
     *
     * Požadovaná verze dokladu.
     *
     * @param string $addressBookVersion
     *
     * @return self
     */
    public function setAddressBookVersion($addressBookVersion)
    {
        $this->addressBookVersion = $addressBookVersion;

        return $this;
    }

    /**
     * Gets as extSystem.
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
     * Sets a new extSystem.
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     *
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;

        return $this;
    }

    /**
     * Adds as requestAddressBook.
     *
     * @return self
     */
    public function addToRequestAddressBook(\Pohoda\Filter\RequestAddressBookType $requestAddressBook)
    {
        $this->requestAddressBook[] = $requestAddressBook;

        return $this;
    }

    /**
     * isset requestAddressBook.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestAddressBook($index)
    {
        return isset($this->requestAddressBook[$index]);
    }

    /**
     * unset requestAddressBook.
     *
     * @param int|string $index
     */
    public function unsetRequestAddressBook($index): void
    {
        unset($this->requestAddressBook[$index]);
    }

    /**
     * Gets as requestAddressBook.
     *
     * @return \Pohoda\Filter\RequestAddressBookType[]
     */
    public function getRequestAddressBook()
    {
        return $this->requestAddressBook;
    }

    /**
     * Sets a new requestAddressBook.
     *
     * @param \Pohoda\Filter\RequestAddressBookType[] $requestAddressBook
     *
     * @return self
     */
    public function setRequestAddressBook(array $requestAddressBook)
    {
        $this->requestAddressBook = $requestAddressBook;

        return $this;
    }
}
