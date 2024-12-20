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

namespace mServer;

/**
 * Address handler.
 *
 * @author vitex
 */
class Addressbook extends Client
{
    /**
     * Current Object's agenda.
     */
    public ?string $agenda = 'addressBook';

    /**
     * AddressBook records name column.
     */
    public ?string $nameColumn = 'address:company';

    /**
     * Create Agenda document using given data.
     *
     * @param array<string, array<string, string>|string> $data
     */
    public function create(array $data): int
    {
        $this->requestXml = $this->pohoda->createAddressbook($data);

        return 1;
    }
}
