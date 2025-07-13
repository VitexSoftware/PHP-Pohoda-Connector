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
 * @author vitex
 *
 * @no-named-arguments
 */
interface smart
{
    public function populate(array $data): self;
    public function getPohodaObject(null|array|int $filter = null): mixed;
}
