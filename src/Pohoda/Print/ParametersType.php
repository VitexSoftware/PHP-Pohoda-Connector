<?php

namespace Pohoda\Print;

/**
 * Class representing ParametersType
 *
 *
 * XSD Type: parametersType
 */
class ParametersType
{
    /**
     * Počet kopií.
     *
     * @var float $copy
     */
    private $copy = null;

    /**
     * Datum tisku.
     *
     * @var \DateTime $datePrint
     */
    private $datePrint = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox1
     */
    private $checkbox1 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox2
     */
    private $checkbox2 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox3
     */
    private $checkbox3 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox4
     */
    private $checkbox4 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox5
     */
    private $checkbox5 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox6
     */
    private $checkbox6 = null;

    /**
     * @var \Pohoda\Print\CheckboxType $checkbox7
     */
    private $checkbox7 = null;

    /**
     * @var \Pohoda\Print\RadioButtonType $radioButton1
     */
    private $radioButton1 = null;

    /**
     * @var \Pohoda\Print\NumberType $spin1
     */
    private $spin1 = null;

    /**
     * @var \Pohoda\Print\NumberType $currency1
     */
    private $currency1 = null;

    /**
     * @var \Pohoda\Print\NumberType $month1
     */
    private $month1 = null;

    /**
     * @var \Pohoda\Print\NumberType $month2
     */
    private $month2 = null;

    /**
     * @var \Pohoda\Print\NumberType $year1
     */
    private $year1 = null;

    /**
     * @var \Pohoda\Print\DateType $date1
     */
    private $date1 = null;

    /**
     * @var \Pohoda\Print\DateType $date2
     */
    private $date2 = null;

    /**
     * @var \Pohoda\Print\DateType $date3
     */
    private $date3 = null;

    /**
     * @var \Pohoda\Print\DateType $date4
     */
    private $date4 = null;

    /**
     * @var \Pohoda\Print\TextType $text1
     */
    private $text1 = null;

    /**
     * @var \Pohoda\Print\TextType $text2
     */
    private $text2 = null;

    /**
     * @var \Pohoda\Print\TextType $text3
     */
    private $text3 = null;

    /**
     * @var \Pohoda\Print\ComboboxType $combobox1
     */
    private $combobox1 = null;

    /**
     * @var \Pohoda\Print\ComboboxType $combobox2
     */
    private $combobox2 = null;

    /**
     * @var \Pohoda\Print\ComboboxType $combobox3
     */
    private $combobox3 = null;

    /**
     * @var \Pohoda\Print\ComboboxType $comboboxEx1
     */
    private $comboboxEx1 = null;

    /**
     * @var \Pohoda\Print\ComboboxType $comboboxEx2
     */
    private $comboboxEx2 = null;

    /**
     * Gets as copy
     *
     * Počet kopií.
     *
     * @return float
     */
    public function getCopy()
    {
        return $this->copy;
    }

    /**
     * Sets a new copy
     *
     * Počet kopií.
     *
     * @param float $copy
     * @return self
     */
    public function setCopy($copy)
    {
        $this->copy = $copy;
        return $this;
    }

    /**
     * Gets as datePrint
     *
     * Datum tisku.
     *
     * @return \DateTime
     */
    public function getDatePrint()
    {
        return $this->datePrint;
    }

    /**
     * Sets a new datePrint
     *
     * Datum tisku.
     *
     * @param \DateTime $datePrint
     * @return self
     */
    public function setDatePrint(?\DateTime $datePrint = null)
    {
        $this->datePrint = $datePrint;
        return $this;
    }

    /**
     * Gets as checkbox1
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox1()
    {
        return $this->checkbox1;
    }

    /**
     * Sets a new checkbox1
     *
     * @param \Pohoda\Print\CheckboxType $checkbox1
     * @return self
     */
    public function setCheckbox1(?\Pohoda\Print\CheckboxType $checkbox1 = null)
    {
        $this->checkbox1 = $checkbox1;
        return $this;
    }

    /**
     * Gets as checkbox2
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox2()
    {
        return $this->checkbox2;
    }

    /**
     * Sets a new checkbox2
     *
     * @param \Pohoda\Print\CheckboxType $checkbox2
     * @return self
     */
    public function setCheckbox2(?\Pohoda\Print\CheckboxType $checkbox2 = null)
    {
        $this->checkbox2 = $checkbox2;
        return $this;
    }

    /**
     * Gets as checkbox3
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox3()
    {
        return $this->checkbox3;
    }

    /**
     * Sets a new checkbox3
     *
     * @param \Pohoda\Print\CheckboxType $checkbox3
     * @return self
     */
    public function setCheckbox3(?\Pohoda\Print\CheckboxType $checkbox3 = null)
    {
        $this->checkbox3 = $checkbox3;
        return $this;
    }

    /**
     * Gets as checkbox4
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox4()
    {
        return $this->checkbox4;
    }

    /**
     * Sets a new checkbox4
     *
     * @param \Pohoda\Print\CheckboxType $checkbox4
     * @return self
     */
    public function setCheckbox4(?\Pohoda\Print\CheckboxType $checkbox4 = null)
    {
        $this->checkbox4 = $checkbox4;
        return $this;
    }

    /**
     * Gets as checkbox5
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox5()
    {
        return $this->checkbox5;
    }

    /**
     * Sets a new checkbox5
     *
     * @param \Pohoda\Print\CheckboxType $checkbox5
     * @return self
     */
    public function setCheckbox5(?\Pohoda\Print\CheckboxType $checkbox5 = null)
    {
        $this->checkbox5 = $checkbox5;
        return $this;
    }

    /**
     * Gets as checkbox6
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox6()
    {
        return $this->checkbox6;
    }

    /**
     * Sets a new checkbox6
     *
     * @param \Pohoda\Print\CheckboxType $checkbox6
     * @return self
     */
    public function setCheckbox6(?\Pohoda\Print\CheckboxType $checkbox6 = null)
    {
        $this->checkbox6 = $checkbox6;
        return $this;
    }

    /**
     * Gets as checkbox7
     *
     * @return \Pohoda\Print\CheckboxType
     */
    public function getCheckbox7()
    {
        return $this->checkbox7;
    }

    /**
     * Sets a new checkbox7
     *
     * @param \Pohoda\Print\CheckboxType $checkbox7
     * @return self
     */
    public function setCheckbox7(?\Pohoda\Print\CheckboxType $checkbox7 = null)
    {
        $this->checkbox7 = $checkbox7;
        return $this;
    }

    /**
     * Gets as radioButton1
     *
     * @return \Pohoda\Print\RadioButtonType
     */
    public function getRadioButton1()
    {
        return $this->radioButton1;
    }

    /**
     * Sets a new radioButton1
     *
     * @param \Pohoda\Print\RadioButtonType $radioButton1
     * @return self
     */
    public function setRadioButton1(?\Pohoda\Print\RadioButtonType $radioButton1 = null)
    {
        $this->radioButton1 = $radioButton1;
        return $this;
    }

    /**
     * Gets as spin1
     *
     * @return \Pohoda\Print\NumberType
     */
    public function getSpin1()
    {
        return $this->spin1;
    }

    /**
     * Sets a new spin1
     *
     * @param \Pohoda\Print\NumberType $spin1
     * @return self
     */
    public function setSpin1(?\Pohoda\Print\NumberType $spin1 = null)
    {
        $this->spin1 = $spin1;
        return $this;
    }

    /**
     * Gets as currency1
     *
     * @return \Pohoda\Print\NumberType
     */
    public function getCurrency1()
    {
        return $this->currency1;
    }

    /**
     * Sets a new currency1
     *
     * @param \Pohoda\Print\NumberType $currency1
     * @return self
     */
    public function setCurrency1(?\Pohoda\Print\NumberType $currency1 = null)
    {
        $this->currency1 = $currency1;
        return $this;
    }

    /**
     * Gets as month1
     *
     * @return \Pohoda\Print\NumberType
     */
    public function getMonth1()
    {
        return $this->month1;
    }

    /**
     * Sets a new month1
     *
     * @param \Pohoda\Print\NumberType $month1
     * @return self
     */
    public function setMonth1(?\Pohoda\Print\NumberType $month1 = null)
    {
        $this->month1 = $month1;
        return $this;
    }

    /**
     * Gets as month2
     *
     * @return \Pohoda\Print\NumberType
     */
    public function getMonth2()
    {
        return $this->month2;
    }

    /**
     * Sets a new month2
     *
     * @param \Pohoda\Print\NumberType $month2
     * @return self
     */
    public function setMonth2(?\Pohoda\Print\NumberType $month2 = null)
    {
        $this->month2 = $month2;
        return $this;
    }

    /**
     * Gets as year1
     *
     * @return \Pohoda\Print\NumberType
     */
    public function getYear1()
    {
        return $this->year1;
    }

    /**
     * Sets a new year1
     *
     * @param \Pohoda\Print\NumberType $year1
     * @return self
     */
    public function setYear1(?\Pohoda\Print\NumberType $year1 = null)
    {
        $this->year1 = $year1;
        return $this;
    }

    /**
     * Gets as date1
     *
     * @return \Pohoda\Print\DateType
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Sets a new date1
     *
     * @param \Pohoda\Print\DateType $date1
     * @return self
     */
    public function setDate1(?\Pohoda\Print\DateType $date1 = null)
    {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Gets as date2
     *
     * @return \Pohoda\Print\DateType
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Sets a new date2
     *
     * @param \Pohoda\Print\DateType $date2
     * @return self
     */
    public function setDate2(?\Pohoda\Print\DateType $date2 = null)
    {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Gets as date3
     *
     * @return \Pohoda\Print\DateType
     */
    public function getDate3()
    {
        return $this->date3;
    }

    /**
     * Sets a new date3
     *
     * @param \Pohoda\Print\DateType $date3
     * @return self
     */
    public function setDate3(?\Pohoda\Print\DateType $date3 = null)
    {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Gets as date4
     *
     * @return \Pohoda\Print\DateType
     */
    public function getDate4()
    {
        return $this->date4;
    }

    /**
     * Sets a new date4
     *
     * @param \Pohoda\Print\DateType $date4
     * @return self
     */
    public function setDate4(?\Pohoda\Print\DateType $date4 = null)
    {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Gets as text1
     *
     * @return \Pohoda\Print\TextType
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * Sets a new text1
     *
     * @param \Pohoda\Print\TextType $text1
     * @return self
     */
    public function setText1(?\Pohoda\Print\TextType $text1 = null)
    {
        $this->text1 = $text1;
        return $this;
    }

    /**
     * Gets as text2
     *
     * @return \Pohoda\Print\TextType
     */
    public function getText2()
    {
        return $this->text2;
    }

    /**
     * Sets a new text2
     *
     * @param \Pohoda\Print\TextType $text2
     * @return self
     */
    public function setText2(?\Pohoda\Print\TextType $text2 = null)
    {
        $this->text2 = $text2;
        return $this;
    }

    /**
     * Gets as text3
     *
     * @return \Pohoda\Print\TextType
     */
    public function getText3()
    {
        return $this->text3;
    }

    /**
     * Sets a new text3
     *
     * @param \Pohoda\Print\TextType $text3
     * @return self
     */
    public function setText3(?\Pohoda\Print\TextType $text3 = null)
    {
        $this->text3 = $text3;
        return $this;
    }

    /**
     * Gets as combobox1
     *
     * @return \Pohoda\Print\ComboboxType
     */
    public function getCombobox1()
    {
        return $this->combobox1;
    }

    /**
     * Sets a new combobox1
     *
     * @param \Pohoda\Print\ComboboxType $combobox1
     * @return self
     */
    public function setCombobox1(?\Pohoda\Print\ComboboxType $combobox1 = null)
    {
        $this->combobox1 = $combobox1;
        return $this;
    }

    /**
     * Gets as combobox2
     *
     * @return \Pohoda\Print\ComboboxType
     */
    public function getCombobox2()
    {
        return $this->combobox2;
    }

    /**
     * Sets a new combobox2
     *
     * @param \Pohoda\Print\ComboboxType $combobox2
     * @return self
     */
    public function setCombobox2(?\Pohoda\Print\ComboboxType $combobox2 = null)
    {
        $this->combobox2 = $combobox2;
        return $this;
    }

    /**
     * Gets as combobox3
     *
     * @return \Pohoda\Print\ComboboxType
     */
    public function getCombobox3()
    {
        return $this->combobox3;
    }

    /**
     * Sets a new combobox3
     *
     * @param \Pohoda\Print\ComboboxType $combobox3
     * @return self
     */
    public function setCombobox3(?\Pohoda\Print\ComboboxType $combobox3 = null)
    {
        $this->combobox3 = $combobox3;
        return $this;
    }

    /**
     * Gets as comboboxEx1
     *
     * @return \Pohoda\Print\ComboboxType
     */
    public function getComboboxEx1()
    {
        return $this->comboboxEx1;
    }

    /**
     * Sets a new comboboxEx1
     *
     * @param \Pohoda\Print\ComboboxType $comboboxEx1
     * @return self
     */
    public function setComboboxEx1(?\Pohoda\Print\ComboboxType $comboboxEx1 = null)
    {
        $this->comboboxEx1 = $comboboxEx1;
        return $this;
    }

    /**
     * Gets as comboboxEx2
     *
     * @return \Pohoda\Print\ComboboxType
     */
    public function getComboboxEx2()
    {
        return $this->comboboxEx2;
    }

    /**
     * Sets a new comboboxEx2
     *
     * @param \Pohoda\Print\ComboboxType $comboboxEx2
     * @return self
     */
    public function setComboboxEx2(?\Pohoda\Print\ComboboxType $comboboxEx2 = null)
    {
        $this->comboboxEx2 = $comboboxEx2;
        return $this;
    }
}

