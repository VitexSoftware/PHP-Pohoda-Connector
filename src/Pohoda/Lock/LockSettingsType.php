<?php

namespace Pohoda\Lock;

/**
 * Class representing LockSettingsType
 *
 *
 * XSD Type: lockSettingsType
 */
class LockSettingsType
{
    /**
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @var string[] $lock1
     */
    private $lock1 = [

    ];

    /**
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @var string[] $lock2
     */
    private $lock2 = [

    ];

    /**
     * Adds as lock1
     *
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @return self
     * @param string $lock1
     */
    public function addToLock1($lock1)
    {
        $this->lock1[] = $lock1;
        return $this;
    }

    /**
     * isset lock1
     *
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLock1($index)
    {
        return isset($this->lock1[$index]);
    }

    /**
     * unset lock1
     *
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLock1($index)
    {
        unset($this->lock1[$index]);
    }

    /**
     * Gets as lock1
     *
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @return string[]
     */
    public function getLock1()
    {
        return $this->lock1;
    }

    /**
     * Sets a new lock1
     *
     * Zámek I, uzamknout (pouze verze E1). Doklady uzamčené prvním stupněm mohou editovat pouze uživatelé, kteří mají v agendě Přístupová práva nastaveno právo Editace záznamů uzamčených I. stupněm.
     *
     * @param string $lock1
     * @return self
     */
    public function setLock1(array $lock1)
    {
        $this->lock1 = $lock1;
        return $this;
    }

    /**
     * Adds as lock2
     *
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @return self
     * @param string $lock2
     */
    public function addToLock2($lock2)
    {
        $this->lock2[] = $lock2;
        return $this;
    }

    /**
     * isset lock2
     *
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLock2($index)
    {
        return isset($this->lock2[$index]);
    }

    /**
     * unset lock2
     *
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLock2($index)
    {
        unset($this->lock2[$index]);
    }

    /**
     * Gets as lock2
     *
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @return string[]
     */
    public function getLock2()
    {
        return $this->lock2;
    }

    /**
     * Sets a new lock2
     *
     * Zámek, uzamknout (v E1 verzi označení Zámek II). Uzamčení dokladů pro uživatele s vyšším oprávněním. Takto uzamčené doklady nelze editovat.
     *
     * @param string $lock2
     * @return self
     */
    public function setLock2(array $lock2)
    {
        $this->lock2 = $lock2;
        return $this;
    }
}
