<?php

namespace Pohoda\List;

/**
 * Class representing RequestBalanceType
 *
 *
 * XSD Type: requestBalanceType
 */
class RequestBalanceType
{
    /**
     * Datum ke kterému je saldo sestaveno. Pokud není zadáno je použit aktuální datum.
     *
     * @var \DateTime $dateTo
     */
    private $dateTo = null;

    /**
     * Hodnota, ke které je saldo vyrovnáno.
     *
     * @var float $adjustTo
     */
    private $adjustTo = null;

    /**
     * Sestavit salda s kumulováním po dokladech.
     *
     * @var string $groupByDoc
     */
    private $groupByDoc = null;

    /**
     * Odstranit záznamy vyrovnaného salda.
     *
     * @var string $removeBalancedRec
     */
    private $removeBalancedRec = null;

    /**
     * Způsob párování.
     *
     * @var string $pairing
     */
    private $pairing = null;

    /**
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @var string $userFilterName
     */
    private $userFilterName = null;

    /**
     * Gets as dateTo
     *
     * Datum ke kterému je saldo sestaveno. Pokud není zadáno je použit aktuální datum.
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * Datum ke kterému je saldo sestaveno. Pokud není zadáno je použit aktuální datum.
     *
     * @param \DateTime $dateTo
     * @return self
     */
    public function setDateTo(?\DateTime $dateTo = null)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as adjustTo
     *
     * Hodnota, ke které je saldo vyrovnáno.
     *
     * @return float
     */
    public function getAdjustTo()
    {
        return $this->adjustTo;
    }

    /**
     * Sets a new adjustTo
     *
     * Hodnota, ke které je saldo vyrovnáno.
     *
     * @param float $adjustTo
     * @return self
     */
    public function setAdjustTo($adjustTo)
    {
        $this->adjustTo = $adjustTo;
        return $this;
    }

    /**
     * Gets as groupByDoc
     *
     * Sestavit salda s kumulováním po dokladech.
     *
     * @return string
     */
    public function getGroupByDoc()
    {
        return $this->groupByDoc;
    }

    /**
     * Sets a new groupByDoc
     *
     * Sestavit salda s kumulováním po dokladech.
     *
     * @param string $groupByDoc
     * @return self
     */
    public function setGroupByDoc($groupByDoc)
    {
        $this->groupByDoc = $groupByDoc;
        return $this;
    }

    /**
     * Gets as removeBalancedRec
     *
     * Odstranit záznamy vyrovnaného salda.
     *
     * @return string
     */
    public function getRemoveBalancedRec()
    {
        return $this->removeBalancedRec;
    }

    /**
     * Sets a new removeBalancedRec
     *
     * Odstranit záznamy vyrovnaného salda.
     *
     * @param string $removeBalancedRec
     * @return self
     */
    public function setRemoveBalancedRec($removeBalancedRec)
    {
        $this->removeBalancedRec = $removeBalancedRec;
        return $this;
    }

    /**
     * Gets as pairing
     *
     * Způsob párování.
     *
     * @return string
     */
    public function getPairing()
    {
        return $this->pairing;
    }

    /**
     * Sets a new pairing
     *
     * Způsob párování.
     *
     * @param string $pairing
     * @return self
     */
    public function setPairing($pairing)
    {
        $this->pairing = $pairing;
        return $this;
    }

    /**
     * Gets as userFilterName
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @return string
     */
    public function getUserFilterName()
    {
        return $this->userFilterName;
    }

    /**
     * Sets a new userFilterName
     *
     * Identifikátor uživatelského filtru v požadované agendě, který má být použit pro filtraci záznamů.
     *
     * @param string $userFilterName
     * @return self
     */
    public function setUserFilterName($userFilterName)
    {
        $this->userFilterName = $userFilterName;
        return $this;
    }
}
