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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListPrevodkaType.
 *
 * XSD Type: listPrevodkaType
 */
class ListPrevodkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prevodka\PrevodkaType[]
     */
    private array $prevodka = [
    ];

    /**
     * Adds as prevodka.
     *
     * @return self
     */
    public function addToPrevodka(\Pohoda\Prevodka\PrevodkaType $prevodka)
    {
        $this->prevodka[] = $prevodka;

        return $this;
    }

    /**
     * isset prevodka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrevodka($index)
    {
        return isset($this->prevodka[$index]);
    }

    /**
     * unset prevodka.
     *
     * @param int|string $index
     */
    public function unsetPrevodka($index): void
    {
        unset($this->prevodka[$index]);
    }

    /**
     * Gets as prevodka.
     *
     * @return \Pohoda\Prevodka\PrevodkaType[]
     */
    public function getPrevodka()
    {
        return $this->prevodka;
    }

    /**
     * Sets a new prevodka.
     *
     * @param \Pohoda\Prevodka\PrevodkaType[] $prevodka
     *
     * @return self
     */
    public function setPrevodka(?array $prevodka = null)
    {
        $this->prevodka = $prevodka;

        return $this;
    }
}
