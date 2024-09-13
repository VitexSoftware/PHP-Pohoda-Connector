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

namespace Pohoda\Isdoc;

/**
 * Class representing SecureHashAlgorithmType.
 *
 * XSD Type: secureHashAlgorithmType
 */
class SecureHashAlgorithmType
{
    /**
     * Způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy.
     */
    private string $hashAlgorithm = null;

    /**
     * Gets as hashAlgorithm.
     *
     * Způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy.
     *
     * @return string
     */
    public function getHashAlgorithm()
    {
        return $this->hashAlgorithm;
    }

    /**
     * Sets a new hashAlgorithm.
     *
     * Způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy.
     *
     * @param string $hashAlgorithm
     *
     * @return self
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->hashAlgorithm = $hashAlgorithm;

        return $this;
    }
}
