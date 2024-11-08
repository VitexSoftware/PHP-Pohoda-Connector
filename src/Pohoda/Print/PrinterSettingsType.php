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
 * Class representing PrinterSettingsType.
 *
 * XSD Type: printerSettingsType
 */
class PrinterSettingsType
{
    /**
     * Výběr sestavy.
     */
    private ?\Pohoda\Print\ReportType $report = null;

    /**
     * Název tiskárny. Hodnotu lze zkopírovat z dialogu tisk. Pokud hodnota není uvedena, použije se výchozí tiskárna. Při současném použití elementu "printer" a "PDF" má přednost element "printer".
     */
    private ?string $printer = null;

    /**
     * Uložení tiskové sestavy do PDF souboru.
     */
    private ?\Pohoda\Print\PDFType $pdf = null;
    private ?\Pohoda\Print\ParametersType $parameters = null;

    /**
     * Gets as report.
     *
     * Výběr sestavy.
     *
     * @return \Pohoda\Print\ReportType
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Sets a new report.
     *
     * Výběr sestavy.
     *
     * @return self
     */
    public function setReport(\Pohoda\Print\ReportType $report)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Gets as printer.
     *
     * Název tiskárny. Hodnotu lze zkopírovat z dialogu tisk. Pokud hodnota není uvedena, použije se výchozí tiskárna. Při současném použití elementu "printer" a "PDF" má přednost element "printer".
     *
     * @return string
     */
    public function getPrinter()
    {
        return $this->printer;
    }

    /**
     * Sets a new printer.
     *
     * Název tiskárny. Hodnotu lze zkopírovat z dialogu tisk. Pokud hodnota není uvedena, použije se výchozí tiskárna. Při současném použití elementu "printer" a "PDF" má přednost element "printer".
     *
     * @param string $printer
     *
     * @return self
     */
    public function setPrinter($printer)
    {
        $this->printer = $printer;

        return $this;
    }

    /**
     * Gets as pdf.
     *
     * Uložení tiskové sestavy do PDF souboru.
     *
     * @return \Pohoda\Print\PDFType
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Sets a new pdf.
     *
     * Uložení tiskové sestavy do PDF souboru.
     *
     * @return self
     */
    public function setPdf(?\Pohoda\Print\PDFType $pdf = null)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Gets as parameters.
     *
     * @return \Pohoda\Print\ParametersType
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters.
     *
     * @return self
     */
    public function setParameters(?\Pohoda\Print\ParametersType $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
