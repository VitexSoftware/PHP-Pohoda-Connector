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

namespace Pohoda\Type;

/**
 * Class representing SettingsSourceDocumentType.
 *
 * XSD Type: settingsSourceDocumentType
 */
class SettingsSourceDocumentType
{
    /**
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     */
    private string $linkOrderToAdvanceInvoice = null;

    /**
     * Gets as linkOrderToAdvanceInvoice.
     *
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     *
     * @return string
     */
    public function getLinkOrderToAdvanceInvoice()
    {
        return $this->linkOrderToAdvanceInvoice;
    }

    /**
     * Sets a new linkOrderToAdvanceInvoice.
     *
     * Nastavení parametrů na zdrojové dokladu Objednávka při vazbě: Objednávka -> Zálohová faktura.
     *
     * @param string $linkOrderToAdvanceInvoice
     *
     * @return self
     */
    public function setLinkOrderToAdvanceInvoice($linkOrderToAdvanceInvoice)
    {
        $this->linkOrderToAdvanceInvoice = $linkOrderToAdvanceInvoice;

        return $this;
    }
}
