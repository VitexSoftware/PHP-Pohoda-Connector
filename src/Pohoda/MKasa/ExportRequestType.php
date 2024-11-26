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

namespace Pohoda\MKasa;

/**
 * Class representing ExportRequestType.
 *
 * XSD Type: exportRequestType
 */
class ExportRequestType
{
    private ?string $name = null;
    private ?string $deviceGuid = null;

    /**
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Guid se aktualizuje jen pokud je agenda Kasa.
     *  Pokud se Guid liší a element je false nebo agenda není Kasa, vrací se chyba.
     */
    private ?string $overwriteDeviceGuid = null;
    private ?string $agenda = null;

    /**
     * Nejvyšší ID, které mKasa obdržela za danou agendu. Nenulová hodnota má význam jen u agend AD, SKz, SkzVC.
     *  Používá se pro stránkovaní. Poslední stránka neobsahuje žádné záznamy z požadované agendy.
     */
    private ?int $myLastId = null;

    /**
     * Exportovat jen změněné záznamy, má význam jen u agend SKz, SkzVC.
     */
    private ?string $diffExport = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as deviceGuid.
     *
     * @return string
     */
    public function getDeviceGuid()
    {
        return $this->deviceGuid;
    }

    /**
     * Sets a new deviceGuid.
     *
     * @param string $deviceGuid
     *
     * @return self
     */
    public function setDeviceGuid($deviceGuid)
    {
        $this->deviceGuid = $deviceGuid;

        return $this;
    }

    /**
     * Gets as overwriteDeviceGuid.
     *
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Guid se aktualizuje jen pokud je agenda Kasa.
     *  Pokud se Guid liší a element je false nebo agenda není Kasa, vrací se chyba.
     *
     * @return string
     */
    public function getOverwriteDeviceGuid()
    {
        return $this->overwriteDeviceGuid;
    }

    /**
     * Sets a new overwriteDeviceGuid.
     *
     * Má se aktualizovat Guid zařížení, na kterém se používá mKasa.
     *  Guid se aktualizuje jen pokud je agenda Kasa.
     *  Pokud se Guid liší a element je false nebo agenda není Kasa, vrací se chyba.
     *
     * @param string $overwriteDeviceGuid
     *
     * @return self
     */
    public function setOverwriteDeviceGuid($overwriteDeviceGuid)
    {
        $this->overwriteDeviceGuid = $overwriteDeviceGuid;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as myLastId.
     *
     * Nejvyšší ID, které mKasa obdržela za danou agendu. Nenulová hodnota má význam jen u agend AD, SKz, SkzVC.
     *  Používá se pro stránkovaní. Poslední stránka neobsahuje žádné záznamy z požadované agendy.
     *
     * @return int
     */
    public function getMyLastId()
    {
        return $this->myLastId;
    }

    /**
     * Sets a new myLastId.
     *
     * Nejvyšší ID, které mKasa obdržela za danou agendu. Nenulová hodnota má význam jen u agend AD, SKz, SkzVC.
     *  Používá se pro stránkovaní. Poslední stránka neobsahuje žádné záznamy z požadované agendy.
     *
     * @param int $myLastId
     *
     * @return self
     */
    public function setMyLastId($myLastId)
    {
        $this->myLastId = $myLastId;

        return $this;
    }

    /**
     * Gets as diffExport.
     *
     * Exportovat jen změněné záznamy, má význam jen u agend SKz, SkzVC.
     *
     * @return string
     */
    public function getDiffExport()
    {
        return $this->diffExport;
    }

    /**
     * Sets a new diffExport.
     *
     * Exportovat jen změněné záznamy, má význam jen u agend SKz, SkzVC.
     *
     * @param string $diffExport
     *
     * @return self
     */
    public function setDiffExport($diffExport)
    {
        $this->diffExport = $diffExport;

        return $this;
    }
}
