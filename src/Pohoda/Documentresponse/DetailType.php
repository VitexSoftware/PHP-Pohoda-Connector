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

namespace Pohoda\Documentresponse;

/**
 * Class representing DetailType.
 *
 * XSD Type: detailType
 */
class DetailType
{
    /**
     * Typ problému při zpracování (ok, warning nebo error).
     */
    private ?string $state = null;

    /**
     * Unikátní číslo chyby.
     */
    private ?int $errno = null;

    /**
     * Komentář.
     */
    private ?string $note = null;

    /**
     * XPath - cesta.
     */
    private ?string $xPath = null;

    /**
     * Požadovaná hodnota.
     */
    private ?string $valueRequested = null;

    /**
     * Vytvořená hodnota.
     */
    private ?string $valueProduced = null;

    /**
     * Gets as state.
     *
     * Typ problému při zpracování (ok, warning nebo error).
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * Typ problému při zpracování (ok, warning nebo error).
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as errno.
     *
     * Unikátní číslo chyby.
     *
     * @return int
     */
    public function getErrno()
    {
        return $this->errno;
    }

    /**
     * Sets a new errno.
     *
     * Unikátní číslo chyby.
     *
     * @param int $errno
     *
     * @return self
     */
    public function setErrno($errno)
    {
        $this->errno = $errno;

        return $this;
    }

    /**
     * Gets as note.
     *
     * Komentář.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * Komentář.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as xPath.
     *
     * XPath - cesta.
     *
     * @return string
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath.
     *
     * XPath - cesta.
     *
     * @param string $xPath
     *
     * @return self
     */
    public function setXPath($xPath)
    {
        $this->xPath = $xPath;

        return $this;
    }

    /**
     * Gets as valueRequested.
     *
     * Požadovaná hodnota.
     *
     * @return string
     */
    public function getValueRequested()
    {
        return $this->valueRequested;
    }

    /**
     * Sets a new valueRequested.
     *
     * Požadovaná hodnota.
     *
     * @param string $valueRequested
     *
     * @return self
     */
    public function setValueRequested($valueRequested)
    {
        $this->valueRequested = $valueRequested;

        return $this;
    }

    /**
     * Gets as valueProduced.
     *
     * Vytvořená hodnota.
     *
     * @return string
     */
    public function getValueProduced()
    {
        return $this->valueProduced;
    }

    /**
     * Sets a new valueProduced.
     *
     * Vytvořená hodnota.
     *
     * @param string $valueProduced
     *
     * @return self
     */
    public function setValueProduced($valueProduced)
    {
        $this->valueProduced = $valueProduced;

        return $this;
    }
}
