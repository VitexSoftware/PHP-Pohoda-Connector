<?php

namespace Pohoda\Bank;

/**
 * Class representing BankHeaderType
 *
 *
 * XSD Type: bankHeaderType
 */
class BankHeaderType
{
    /**
     * ID záznamu (pouze pro export).
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Typ bankovního dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @var string $bankType
     */
    private $bankType = null;

    /**
     * Bankovní účet. Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @var \Pohoda\Type\RefType $account
     */
    private $account = null;

    /**
     * Evidenční číslo dokladu (pouze pro export).
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Číslo bankovního výpisu.
     *
     * @var \Pohoda\Bank\StatementNumberType $statementNumber
     */
    private $statementNumber = null;

    /**
     * Variabilní symbol.
     *
     * @var string $symVar
     */
    private $symVar = null;

    /**
     * Datum bankovního výpisu.
     *
     * @var \DateTime $dateStatement
     */
    private $dateStatement = null;

    /**
     * Datum platby.
     *
     * @var \DateTime $datePayment
     */
    private $datePayment = null;

    /**
     * Předkontace. Pokud není uvedena, POHODA použije předkontaci uvedenou v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @var \Pohoda\Type\AccountingType $accounting
     */
    private $accounting = null;

    /**
     * Členění DPH, přednastavená hodnota je "inland"
     *
     * @var \Pohoda\Type\ClassificationVATType $classificationVAT
     */
    private $classificationVAT = null;

    /**
     * Členění KV DPH (pouze SK verze).
     *
     * @var \Pohoda\Type\RefType $classificationKVDPH
     */
    private $classificationKVDPH = null;

    /**
     * Text dokladu.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Adresa zákazníka
     *
     * @var \Pohoda\Type\AddressType $partnerIdentity
     */
    private $partnerIdentity = null;

    /**
     * Osobní adresa
     *
     * @var \Pohoda\Type\MyAddressType $myIdentity
     */
    private $myIdentity = null;

    /**
     * Číslo bankovního Protiúčtu.
     *
     * @var \Pohoda\Bank\BankHeaderType\PaymentAccountAType $paymentAccount
     */
    private $paymentAccount = null;

    /**
     * Konstantní symbol.
     *
     * @var string $symConst
     */
    private $symConst = null;

    /**
     * Specifický symbol. Používá se jen u závazků.
     *
     * @var string $symSpec
     */
    private $symSpec = null;

    /**
     * Párovací symbol (pouze JU nebo DE).
     *
     * @var string $symPar
     */
    private $symPar = null;

    /**
     * Středisko
     *
     * @var \Pohoda\Type\RefType $centre
     */
    private $centre = null;

    /**
     * Činnost
     *
     * @var \Pohoda\Type\RefType $activity
     */
    private $activity = null;

    /**
     * Zakázka
     *
     * @var \Pohoda\Type\RefType $contract
     */
    private $contract = null;

    /**
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @var \Pohoda\Type\MOSStypeType $mOSS
     */
    private $mOSS = null;

    /**
     * Důkazní prostředky (OSS).
     *
     * @var string[] $evidentiaryResourcesMOSS
     */
    private $evidentiaryResourcesMOSS = null;

    /**
     * Účetní období (OSS).
     *
     * @var string $accountingPeriodMOSS
     */
    private $accountingPeriodMOSS = null;

    /**
     * Poznámka
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Interní poznámka.
     *
     * @var string $intNote
     */
    private $intNote = null;

    /**
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @var string $histRate
     */
    private $histRate = null;

    /**
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @var string $lock1
     */
    private $lock1 = null;

    /**
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @var string $lock2
     */
    private $lock2 = null;

    /**
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @var string $markRecord
     */
    private $markRecord = null;

    /**
     * Štítky záznamu.
     *
     * @var \Pohoda\Type\LabelType[] $labels
     */
    private $labels = null;

    /**
     * Volitelný parametr.
     *
     * @var \Pohoda\Type\ParameterDocType[] $parameters
     */
    private $parameters = null;

    /**
     * Gets as id
     *
     * ID záznamu (pouze pro export).
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
     * ID záznamu (pouze pro export).
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
     * Gets as bankType
     *
     * Typ bankovního dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @return string
     */
    public function getBankType()
    {
        return $this->bankType;
    }

    /**
     * Sets a new bankType
     *
     * Typ bankovního dokladu. Tento element je vyžadován při vytvoření dokladu.
     *
     * @param string $bankType
     * @return self
     */
    public function setBankType($bankType)
    {
        $this->bankType = $bankType;
        return $this;
    }

    /**
     * Gets as account
     *
     * Bankovní účet. Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Bankovní účet. Pokud není účet uveden, POHODA použije účet uvedený v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @param \Pohoda\Type\RefType $account
     * @return self
     */
    public function setAccount(?\Pohoda\Type\RefType $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as number
     *
     * Evidenční číslo dokladu (pouze pro export).
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Evidenční číslo dokladu (pouze pro export).
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as statementNumber
     *
     * Číslo bankovního výpisu.
     *
     * @return \Pohoda\Bank\StatementNumberType
     */
    public function getStatementNumber()
    {
        return $this->statementNumber;
    }

    /**
     * Sets a new statementNumber
     *
     * Číslo bankovního výpisu.
     *
     * @param \Pohoda\Bank\StatementNumberType $statementNumber
     * @return self
     */
    public function setStatementNumber(?\Pohoda\Bank\StatementNumberType $statementNumber = null)
    {
        $this->statementNumber = $statementNumber;
        return $this;
    }

    /**
     * Gets as symVar
     *
     * Variabilní symbol.
     *
     * @return string
     */
    public function getSymVar()
    {
        return $this->symVar;
    }

    /**
     * Sets a new symVar
     *
     * Variabilní symbol.
     *
     * @param string $symVar
     * @return self
     */
    public function setSymVar($symVar)
    {
        $this->symVar = $symVar;
        return $this;
    }

    /**
     * Gets as dateStatement
     *
     * Datum bankovního výpisu.
     *
     * @return \DateTime
     */
    public function getDateStatement()
    {
        return $this->dateStatement;
    }

    /**
     * Sets a new dateStatement
     *
     * Datum bankovního výpisu.
     *
     * @param \DateTime $dateStatement
     * @return self
     */
    public function setDateStatement(?\DateTime $dateStatement = null)
    {
        $this->dateStatement = $dateStatement;
        return $this;
    }

    /**
     * Gets as datePayment
     *
     * Datum platby.
     *
     * @return \DateTime
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Sets a new datePayment
     *
     * Datum platby.
     *
     * @param \DateTime $datePayment
     * @return self
     */
    public function setDatePayment(?\DateTime $datePayment = null)
    {
        $this->datePayment = $datePayment;
        return $this;
    }

    /**
     * Gets as accounting
     *
     * Předkontace. Pokud není uvedena, POHODA použije předkontaci uvedenou v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @return \Pohoda\Type\AccountingType
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting
     *
     * Předkontace. Pokud není uvedena, POHODA použije předkontaci uvedenou v uživatelském nastavení
     *  uživatele (pod kterým je spuštěn XML import).
     *
     * @param \Pohoda\Type\AccountingType $accounting
     * @return self
     */
    public function setAccounting(?\Pohoda\Type\AccountingType $accounting = null)
    {
        $this->accounting = $accounting;
        return $this;
    }

    /**
     * Gets as classificationVAT
     *
     * Členění DPH, přednastavená hodnota je "inland"
     *
     * @return \Pohoda\Type\ClassificationVATType
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT
     *
     * Členění DPH, přednastavená hodnota je "inland"
     *
     * @param \Pohoda\Type\ClassificationVATType $classificationVAT
     * @return self
     */
    public function setClassificationVAT(?\Pohoda\Type\ClassificationVATType $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;
        return $this;
    }

    /**
     * Gets as classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @return \Pohoda\Type\RefType
     */
    public function getClassificationKVDPH()
    {
        return $this->classificationKVDPH;
    }

    /**
     * Sets a new classificationKVDPH
     *
     * Členění KV DPH (pouze SK verze).
     *
     * @param \Pohoda\Type\RefType $classificationKVDPH
     * @return self
     */
    public function setClassificationKVDPH(?\Pohoda\Type\RefType $classificationKVDPH = null)
    {
        $this->classificationKVDPH = $classificationKVDPH;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text dokladu.
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
     * Text dokladu.
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
     * Gets as partnerIdentity
     *
     * Adresa zákazníka
     *
     * @return \Pohoda\Type\AddressType
     */
    public function getPartnerIdentity()
    {
        return $this->partnerIdentity;
    }

    /**
     * Sets a new partnerIdentity
     *
     * Adresa zákazníka
     *
     * @param \Pohoda\Type\AddressType $partnerIdentity
     * @return self
     */
    public function setPartnerIdentity(?\Pohoda\Type\AddressType $partnerIdentity = null)
    {
        $this->partnerIdentity = $partnerIdentity;
        return $this;
    }

    /**
     * Gets as myIdentity
     *
     * Osobní adresa
     *
     * @return \Pohoda\Type\MyAddressType
     */
    public function getMyIdentity()
    {
        return $this->myIdentity;
    }

    /**
     * Sets a new myIdentity
     *
     * Osobní adresa
     *
     * @param \Pohoda\Type\MyAddressType $myIdentity
     * @return self
     */
    public function setMyIdentity(?\Pohoda\Type\MyAddressType $myIdentity = null)
    {
        $this->myIdentity = $myIdentity;
        return $this;
    }

    /**
     * Gets as paymentAccount
     *
     * Číslo bankovního Protiúčtu.
     *
     * @return \Pohoda\Bank\BankHeaderType\PaymentAccountAType
     */
    public function getPaymentAccount()
    {
        return $this->paymentAccount;
    }

    /**
     * Sets a new paymentAccount
     *
     * Číslo bankovního Protiúčtu.
     *
     * @param \Pohoda\Bank\BankHeaderType\PaymentAccountAType $paymentAccount
     * @return self
     */
    public function setPaymentAccount(?\Pohoda\Bank\BankHeaderType\PaymentAccountAType $paymentAccount = null)
    {
        $this->paymentAccount = $paymentAccount;
        return $this;
    }

    /**
     * Gets as symConst
     *
     * Konstantní symbol.
     *
     * @return string
     */
    public function getSymConst()
    {
        return $this->symConst;
    }

    /**
     * Sets a new symConst
     *
     * Konstantní symbol.
     *
     * @param string $symConst
     * @return self
     */
    public function setSymConst($symConst)
    {
        $this->symConst = $symConst;
        return $this;
    }

    /**
     * Gets as symSpec
     *
     * Specifický symbol. Používá se jen u závazků.
     *
     * @return string
     */
    public function getSymSpec()
    {
        return $this->symSpec;
    }

    /**
     * Sets a new symSpec
     *
     * Specifický symbol. Používá se jen u závazků.
     *
     * @param string $symSpec
     * @return self
     */
    public function setSymSpec($symSpec)
    {
        $this->symSpec = $symSpec;
        return $this;
    }

    /**
     * Gets as symPar
     *
     * Párovací symbol (pouze JU nebo DE).
     *
     * @return string
     */
    public function getSymPar()
    {
        return $this->symPar;
    }

    /**
     * Sets a new symPar
     *
     * Párovací symbol (pouze JU nebo DE).
     *
     * @param string $symPar
     * @return self
     */
    public function setSymPar($symPar)
    {
        $this->symPar = $symPar;
        return $this;
    }

    /**
     * Gets as centre
     *
     * Středisko
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
     * Středisko
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
     * Gets as activity
     *
     * Činnost
     *
     * @return \Pohoda\Type\RefType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * Činnost
     *
     * @param \Pohoda\Type\RefType $activity
     * @return self
     */
    public function setActivity(?\Pohoda\Type\RefType $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * Zakázka
     *
     * @return \Pohoda\Type\RefType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * Zakázka
     *
     * @param \Pohoda\Type\RefType $contract
     * @return self
     */
    public function setContract(?\Pohoda\Type\RefType $contract = null)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @return \Pohoda\Type\MOSStypeType
     */
    public function getMOSS()
    {
        return $this->mOSS;
    }

    /**
     * Sets a new mOSS
     *
     * Speciální režim registrace DPH v EU, režim One Stop Shop (OSS).
     *
     * @param \Pohoda\Type\MOSStypeType $mOSS
     * @return self
     */
    public function setMOSS(?\Pohoda\Type\MOSStypeType $mOSS = null)
    {
        $this->mOSS = $mOSS;
        return $this;
    }

    /**
     * Adds as ids
     *
     * Důkazní prostředky (OSS).
     *
     * @return self
     * @param string $ids
     */
    public function addToEvidentiaryResourcesMOSS($ids)
    {
        $this->evidentiaryResourcesMOSS[] = $ids;
        return $this;
    }

    /**
     * isset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidentiaryResourcesMOSS($index)
    {
        return isset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * unset evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidentiaryResourcesMOSS($index)
    {
        unset($this->evidentiaryResourcesMOSS[$index]);
    }

    /**
     * Gets as evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @return string[]
     */
    public function getEvidentiaryResourcesMOSS()
    {
        return $this->evidentiaryResourcesMOSS;
    }

    /**
     * Sets a new evidentiaryResourcesMOSS
     *
     * Důkazní prostředky (OSS).
     *
     * @param string[] $evidentiaryResourcesMOSS
     * @return self
     */
    public function setEvidentiaryResourcesMOSS(array $evidentiaryResourcesMOSS = null)
    {
        $this->evidentiaryResourcesMOSS = $evidentiaryResourcesMOSS;
        return $this;
    }

    /**
     * Gets as accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @return string
     */
    public function getAccountingPeriodMOSS()
    {
        return $this->accountingPeriodMOSS;
    }

    /**
     * Sets a new accountingPeriodMOSS
     *
     * Účetní období (OSS).
     *
     * @param string $accountingPeriodMOSS
     * @return self
     */
    public function setAccountingPeriodMOSS($accountingPeriodMOSS)
    {
        $this->accountingPeriodMOSS = $accountingPeriodMOSS;
        return $this;
    }

    /**
     * Gets as note
     *
     * Poznámka
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Poznámka
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as intNote
     *
     * Interní poznámka.
     *
     * @return string
     */
    public function getIntNote()
    {
        return $this->intNote;
    }

    /**
     * Sets a new intNote
     *
     * Interní poznámka.
     *
     * @param string $intNote
     * @return self
     */
    public function setIntNote($intNote)
    {
        $this->intNote = $intNote;
        return $this;
    }

    /**
     * Gets as histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @return string
     */
    public function getHistRate()
    {
        return $this->histRate;
    }

    /**
     * Sets a new histRate
     *
     * Doklad má položky obsahující historickou sazbu DPH. Jen pro export.
     *
     * @param string $histRate
     * @return self
     */
    public function setHistRate($histRate)
    {
        $this->histRate = $histRate;
        return $this;
    }

    /**
     * Gets as lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @return string
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1
     *
     * Zámek I (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm. Pouze pro export.
     *
     * @param string $lock1
     * @return self
     */
    public function setLock1($lock1)
    {
        $this->lock1 = $lock1;
        return $this;
    }

    /**
     * Gets as lock2
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @return string
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2
     *
     * Zámek (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat. Pouze pro export.
     *
     * @param string $lock2
     * @return self
     */
    public function setLock2($lock2)
    {
        $this->lock2 = $lock2;
        return $this;
    }

    /**
     * Gets as markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @return string
     */
    public function getMarkRecord()
    {
        return $this->markRecord;
    }

    /**
     * Sets a new markRecord
     *
     * Označení záznamu v programu POHODA, sloupec "X". Výchozí hodnota je "označený záznam".
     *
     * @param string $markRecord
     * @return self
     */
    public function setMarkRecord($markRecord)
    {
        $this->markRecord = $markRecord;
        return $this;
    }

    /**
     * Adds as label
     *
     * Štítky záznamu.
     *
     * @return self
     * @param \Pohoda\Type\LabelType $label
     */
    public function addToLabels(\Pohoda\Type\LabelType $label)
    {
        $this->labels[] = $label;
        return $this;
    }

    /**
     * isset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabels($index)
    {
        return isset($this->labels[$index]);
    }

    /**
     * unset labels
     *
     * Štítky záznamu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabels($index)
    {
        unset($this->labels[$index]);
    }

    /**
     * Gets as labels
     *
     * Štítky záznamu.
     *
     * @return \Pohoda\Type\LabelType[]
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets a new labels
     *
     * Štítky záznamu.
     *
     * @param \Pohoda\Type\LabelType[] $labels
     * @return self
     */
    public function setLabels(array $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Volitelný parametr.
     *
     * @return self
     * @param \Pohoda\Type\ParameterDocType $parameter
     */
    public function addToParameters(\Pohoda\Type\ParameterDocType $parameter)
    {
        $this->parameters[] = $parameter;
        return $this;
    }

    /**
     * isset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameters($index)
    {
        return isset($this->parameters[$index]);
    }

    /**
     * unset parameters
     *
     * Volitelný parametr.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameters($index)
    {
        unset($this->parameters[$index]);
    }

    /**
     * Gets as parameters
     *
     * Volitelný parametr.
     *
     * @return \Pohoda\Type\ParameterDocType[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * Volitelný parametr.
     *
     * @param \Pohoda\Type\ParameterDocType[] $parameters
     * @return self
     */
    public function setParameters(array $parameters = null)
    {
        $this->parameters = $parameters;
        return $this;
    }
}

