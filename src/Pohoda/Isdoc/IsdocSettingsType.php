<?php

namespace Pohoda\Isdoc;

/**
 * Class representing IsdocSettingsType
 *
 *
 * XSD Type: isdocSettingsType
 */
class IsdocSettingsType
{
    /**
     * Název a umístění ISDOC souboru (např. "C:\isdoc\faktura_c_FV160006.isdoc").
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * Verze ISDOC dokumentu.
     *
     * @var string $versionIsdocDocument
     */
    private $versionIsdocDocument = null;

    /**
     * Podpisový certifikát pro podepsání ISDOC dokumentu.
     *
     * @var \Pohoda\Isdoc\SignatureCertificateType $signatureCertificate
     */
    private $signatureCertificate = null;

    /**
     * Hash algoritmu pro způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy pro vytvořený ISDOC dokument.
     *
     * @var \Pohoda\Isdoc\SecureHashAlgorithmType $secureHashAlgorithm
     */
    private $secureHashAlgorithm = null;

    /**
     * Identifikace zboží dle kupujícího načíst z pole.
     *
     * @var string $identificationOfStockitem
     */
    private $identificationOfStockitem = null;

    /**
     * Přílohy ISDOC dokumentu.
     *
     * @var \Pohoda\Isdoc\AttachmentType[] $attachments
     */
    private $attachments = null;

    /**
     * Gets as fileName
     *
     * Název a umístění ISDOC souboru (např. "C:\isdoc\faktura_c_FV160006.isdoc").
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * Název a umístění ISDOC souboru (např. "C:\isdoc\faktura_c_FV160006.isdoc").
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as versionIsdocDocument
     *
     * Verze ISDOC dokumentu.
     *
     * @return string
     */
    public function getVersionIsdocDocument()
    {
        return $this->versionIsdocDocument;
    }

    /**
     * Sets a new versionIsdocDocument
     *
     * Verze ISDOC dokumentu.
     *
     * @param string $versionIsdocDocument
     * @return self
     */
    public function setVersionIsdocDocument($versionIsdocDocument)
    {
        $this->versionIsdocDocument = $versionIsdocDocument;
        return $this;
    }

    /**
     * Gets as signatureCertificate
     *
     * Podpisový certifikát pro podepsání ISDOC dokumentu.
     *
     * @return \Pohoda\Isdoc\SignatureCertificateType
     */
    public function getSignatureCertificate()
    {
        return $this->signatureCertificate;
    }

    /**
     * Sets a new signatureCertificate
     *
     * Podpisový certifikát pro podepsání ISDOC dokumentu.
     *
     * @param \Pohoda\Isdoc\SignatureCertificateType $signatureCertificate
     * @return self
     */
    public function setSignatureCertificate(?\Pohoda\Isdoc\SignatureCertificateType $signatureCertificate = null)
    {
        $this->signatureCertificate = $signatureCertificate;
        return $this;
    }

    /**
     * Gets as secureHashAlgorithm
     *
     * Hash algoritmu pro způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy pro vytvořený ISDOC dokument.
     *
     * @return \Pohoda\Isdoc\SecureHashAlgorithmType
     */
    public function getSecureHashAlgorithm()
    {
        return $this->secureHashAlgorithm;
    }

    /**
     * Sets a new secureHashAlgorithm
     *
     * Hash algoritmu pro způsob výpočtu hashe XML dokumentu a případných souborů označených jako přílohy pro vytvořený ISDOC dokument.
     *
     * @param \Pohoda\Isdoc\SecureHashAlgorithmType $secureHashAlgorithm
     * @return self
     */
    public function setSecureHashAlgorithm(?\Pohoda\Isdoc\SecureHashAlgorithmType $secureHashAlgorithm = null)
    {
        $this->secureHashAlgorithm = $secureHashAlgorithm;
        return $this;
    }

    /**
     * Gets as identificationOfStockitem
     *
     * Identifikace zboží dle kupujícího načíst z pole.
     *
     * @return string
     */
    public function getIdentificationOfStockitem()
    {
        return $this->identificationOfStockitem;
    }

    /**
     * Sets a new identificationOfStockitem
     *
     * Identifikace zboží dle kupujícího načíst z pole.
     *
     * @param string $identificationOfStockitem
     * @return self
     */
    public function setIdentificationOfStockitem($identificationOfStockitem)
    {
        $this->identificationOfStockitem = $identificationOfStockitem;
        return $this;
    }

    /**
     * Adds as attachment
     *
     * Přílohy ISDOC dokumentu.
     *
     * @return self
     * @param \Pohoda\Isdoc\AttachmentType $attachment
     */
    public function addToAttachments(\Pohoda\Isdoc\AttachmentType $attachment)
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     * isset attachments
     *
     * Přílohy ISDOC dokumentu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttachments($index)
    {
        return isset($this->attachments[$index]);
    }

    /**
     * unset attachments
     *
     * Přílohy ISDOC dokumentu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttachments($index)
    {
        unset($this->attachments[$index]);
    }

    /**
     * Gets as attachments
     *
     * Přílohy ISDOC dokumentu.
     *
     * @return \Pohoda\Isdoc\AttachmentType[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets a new attachments
     *
     * Přílohy ISDOC dokumentu.
     *
     * @param \Pohoda\Isdoc\AttachmentType[] $attachments
     * @return self
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;
        return $this;
    }
}

