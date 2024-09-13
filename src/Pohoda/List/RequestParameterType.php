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

/**
 * Class representing RequestParameterType.
 *
 * XSD Type: requestParameterType
 */
class RequestParameterType
{
    private string $idsAgenda = null;
    private string $idsUserAgenda = null;

    /**
     * Gets as idsAgenda.
     *
     * @return string
     */
    public function getIdsAgenda()
    {
        return $this->idsAgenda;
    }

    /**
     * Sets a new idsAgenda.
     *
     * @param string $idsAgenda
     *
     * @return self
     */
    public function setIdsAgenda($idsAgenda)
    {
        $this->idsAgenda = $idsAgenda;

        return $this;
    }

    /**
     * Gets as idsUserAgenda.
     *
     * @return string
     */
    public function getIdsUserAgenda()
    {
        return $this->idsUserAgenda;
    }

    /**
     * Sets a new idsUserAgenda.
     *
     * @param string $idsUserAgenda
     *
     * @return self
     */
    public function setIdsUserAgenda($idsUserAgenda)
    {
        $this->idsUserAgenda = $idsUserAgenda;

        return $this;
    }
}
