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

namespace Pohoda\Print;

/**
 * Class representing ReportType.
 *
 * XSD Type: reportType
 */
class ReportType
{
    /**
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
     */
    private ?int $id = null;

    /**
     * Název sestavy. Pouze export.
     */
    private ?string $name = null;

    /**
     * Popis sestavy. Pouze export.
     */
    private ?string $detail = null;

    /**
     * Gets as id.
     *
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * Identifikátor sestavy. Hodnotu naleznete ve vlastnostech sestavy.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název sestavy. Pouze export.
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
     * Název sestavy. Pouze export.
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
     * Gets as detail.
     *
     * Popis sestavy. Pouze export.
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail.
     *
     * Popis sestavy. Pouze export.
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }
}
