<?php

/**
 * Class WeFact_CreditInvoiceLine
 */
class WeFact_CreditInvoiceLine
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $Identifier;

    /**
     * Quantity
     *
     * @var float
     */
    protected $Number;

    /**
     * invoice description
     *
     * @var string
     */
    protected $Description;

    /**
     * Price excluding Tax
     *
     * @var float
     */
    protected $PriceExcl;

    /**
     * Tax percentage 0-100
     *
     * @var float
     */
    protected $TaxPercentage;

    /**
     * Gets the value of Number.
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Sets the value of Number.
     *
     * @param float $Number the number
     *
     * @return WeFact_CreditInvoiceLine
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * Gets the value of Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the value of Description.
     *
     * @param string $Description the description
     *
     * @return WeFact_CreditInvoiceLine
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Gets the value of PriceExcl.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }

    /**
     * Sets the value of PriceExcl.
     *
     * @param float $PriceExcl the price excl
     *
     * @return WeFact_CreditInvoiceLine
     */
    public function setPriceExcl($PriceExcl)
    {
        $this->PriceExcl = $PriceExcl;

        return $this;
    }

    /**
     * Gets the value of TaxPercentage.
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }

    /**
     * Sets the value of TaxPercentage.
     *
     * @param float $TaxPercentage the tax percentage
     *
     * @return WeFact_CreditInvoiceLine
     */
    public function setTaxPercentage($TaxPercentage)
    {
        $this->TaxPercentage = $TaxPercentage;

        return $this;
    }

    /**
     * Gets the Identifier.
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }

    /**
     * Sets the Identifier.
     *
     * @param int $Identifier the identifier
     *
     * @return WeFact_CreditInvoiceLine
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;

        return $this;
    }
}
