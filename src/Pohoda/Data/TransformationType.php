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

namespace Pohoda\Data;

/**
 * Class representing TransformationType.
 *
 * XSD Type: transformationType
 */
class TransformationType
{
    /**
     * Cesta k vstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_i2.xml", který se použije pro zpracování.
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl").".
     */
    private ?string $input = null;

    /**
     * Cesta k výstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_o2.xml".
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl").".
     */
    private ?string $output = null;

    /**
     * Gets as input.
     *
     * Cesta k vstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_i2.xml", který se použije pro zpracování.
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl")."
     *
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input.
     *
     * Cesta k vstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_i2.xml", který se použije pro zpracování.
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl")."
     *
     * @param string $input
     *
     * @return self
     */
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Gets as output.
     *
     * Cesta k výstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_o2.xml".
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl")."
     *
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Sets a new output.
     *
     * Cesta k výstupní transformaci. Výsledkem bude nový soubor s koncovkou "_trn_o2.xml".
     *  Název je zadán včetně cesty, buď absolutně (např: "C:\Program Files\Stormware\Pohoda\Info\XSL\export.xsl")
     *  nebo relativně - vztaženo k adresáři Pohody (např: "Info/XSL/export.xsl")."
     *
     * @param string $output
     *
     * @return self
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }
}
