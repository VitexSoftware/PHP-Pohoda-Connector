<?php

namespace Pohoda\Isdoc;

/**
 * Class representing SecureHashAlgorithmType
 *
 *
 * XSD Type: secureHashAlgorithmType
 */
class SecureHashAlgorithmType
{
    /**
     * Způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy.
     *
     * @var string $hashAlgorithm
     */
    private $hashAlgorithm = null;

    /**
     * Gets as hashAlgorithm
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
     * Sets a new hashAlgorithm
     *
     * Způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy.
     *
     * @param string $hashAlgorithm
     * @return self
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->hashAlgorithm = $hashAlgorithm;
        return $this;
    }
}

