<?php

namespace Pohoda\MKasa;

/**
 * Class representing KasaInfoType
 *
 *
 * XSD Type: kasaInfoType
 */
class KasaInfoType
{
    /**
     * @var int $id
     */
    private $id = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string $deviceGuid
     */
    private $deviceGuid = null;

    /**
     * @var \Pohoda\MKasa\KasaEstablishmentType $establishment
     */
    private $establishment = null;

    /**
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * @var \Pohoda\Type\RefType $defaultStore
     */
    private $defaultStore = null;

    /**
     * @var \Pohoda\Type\RefType $defaultSellingPrice
     */
    private $defaultSellingPrice = null;

    /**
     * @var \Pohoda\Type\RefType $defaultPaymentType
     */
    private $defaultPaymentType = null;

    /**
     * @var string $text
     */
    private $text = null;

    /**
     * @var string $footer
     */
    private $footer = null;

    /**
     * @var string $payVat
     */
    private $payVat = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as deviceGuid
     *
     * @return string
     */
    public function getDeviceGuid()
    {
        return $this->deviceGuid;
    }

    /**
     * Sets a new deviceGuid
     *
     * @param string $deviceGuid
     * @return self
     */
    public function setDeviceGuid($deviceGuid)
    {
        $this->deviceGuid = $deviceGuid;
        return $this;
    }

    /**
     * Gets as establishment
     *
     * @return \Pohoda\MKasa\KasaEstablishmentType
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment
     *
     * @param \Pohoda\MKasa\KasaEstablishmentType $establishment
     * @return self
     */
    public function setEstablishment(?\Pohoda\MKasa\KasaEstablishmentType $establishment = null)
    {
        $this->establishment = $establishment;
        return $this;
    }

    /**
     * Gets as centre
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre
     *
     * @param \Pohoda\Type\RefType $centre
     * @return self
     */
    public function setCentre(?\Pohoda\Type\RefType $centre = null)
    {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Gets as defaultStore
     *
     * @return \Pohoda\Type\RefType
     */
    public function getDefaultStore()
    {
        return $this->defaultStore;
    }

    /**
     * Sets a new defaultStore
     *
     * @param \Pohoda\Type\RefType $defaultStore
     * @return self
     */
    public function setDefaultStore(?\Pohoda\Type\RefType $defaultStore = null)
    {
        $this->defaultStore = $defaultStore;
        return $this;
    }

    /**
     * Gets as defaultSellingPrice
     *
     * @return \Pohoda\Type\RefType
     */
    public function getDefaultSellingPrice()
    {
        return $this->defaultSellingPrice;
    }

    /**
     * Sets a new defaultSellingPrice
     *
     * @param \Pohoda\Type\RefType $defaultSellingPrice
     * @return self
     */
    public function setDefaultSellingPrice(?\Pohoda\Type\RefType $defaultSellingPrice = null)
    {
        $this->defaultSellingPrice = $defaultSellingPrice;
        return $this;
    }

    /**
     * Gets as defaultPaymentType
     *
     * @return \Pohoda\Type\RefType
     */
    public function getDefaultPaymentType()
    {
        return $this->defaultPaymentType;
    }

    /**
     * Sets a new defaultPaymentType
     *
     * @param \Pohoda\Type\RefType $defaultPaymentType
     * @return self
     */
    public function setDefaultPaymentType(?\Pohoda\Type\RefType $defaultPaymentType = null)
    {
        $this->defaultPaymentType = $defaultPaymentType;
        return $this;
    }

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as footer
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Sets a new footer
     *
     * @param string $footer
     * @return self
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * Gets as payVat
     *
     * @return string
     */
    public function getPayVat()
    {
        return $this->payVat;
    }

    /**
     * Sets a new payVat
     *
     * @param string $payVat
     * @return self
     */
    public function setPayVat($payVat)
    {
        $this->payVat = $payVat;
        return $this;
    }
}

