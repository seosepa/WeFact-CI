<?php

/**
 * Class WeFact_InvoiceLine
 */
class WeFact_InvoiceLine
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $Identifier;

    /**
     * The date
     *
     * @var string
     */
    protected $Date;

    /**
     * Quantity
     *
     * @var float
     */
    protected $Number;

    /**
     * The code of the product
     *
     * @var string
     */
    protected $ProductCode;

    /**
     * The description
     *
     * @var string
     */
    protected $Description;

    /**
     * The price excluding Taxes
     *
     * @var float
     */
    protected $PriceExcl;

    /**
     * The discount percentage (1-100)
     *
     * @var float
     */
    protected $DiscountPercentage;

    /**
     * The DiscountPercentageType
     * 'line' of 'subscription'
     * This one InvoiceLine or the whole subscription
     *
     * @var string
     */
    protected $DiscountPercentageType;

    /**
     * The tax percentage (1-100)
     *
     * @var float
     */
    protected $TaxPercentage;

    /**
     * The periodic type. ('once' or 'period')
     *
     * @var string
     */
    protected $PeriodicType;

    /**
     * The number of periods
     *
     * @var int
     */
    protected $Periods;

    /**
     * The period
     *
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @var string
     */
    protected $Periodic;

    /**
     * The starting date of the period.
     *
     * @var string
     */
    protected $StartPeriod;

    /**
     * Gets the The date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Sets the The date.
     *
     * @param string $Date the date
     *
     * @return WeFact_InvoiceLine
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Gets the Quantity.
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Sets the Quantity.
     *
     * @param float $Number the number
     *
     * @return WeFact_InvoiceLine
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;

        return $this;
    }

    /**
     * Gets the The code of the product.
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * Sets the The code of the product.
     *
     * @param string $ProductCode the product code
     *
     * @return WeFact_InvoiceLine
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    /**
     * Gets the The description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the The description.
     *
     * @param string $Description the description
     *
     * @return WeFact_InvoiceLine
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Gets the The price excluding Taxes.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }

    /**
     * Sets the The price excluding Taxes.
     *
     * @param float $PriceExcl the price excl
     *
     * @return WeFact_InvoiceLine
     */
    public function setPriceExcl($PriceExcl)
    {
        $this->PriceExcl = $PriceExcl;

        return $this;
    }

    /**
     * Gets the The discount percentage (1-100).
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }

    /**
     * Sets the The discount percentage (1-100).
     *
     * @param float $DiscountPercentage the discount percentage
     *
     * @return WeFact_InvoiceLine
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
        $this->DiscountPercentage = $DiscountPercentage;

        return $this;
    }

    /**
     * Gets the The tax percentage (1-100).
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }

    /**
     * Sets the The tax percentage (1-100).
     *
     * @param float $TaxPercentage the tax percentage
     *
     * @return WeFact_InvoiceLine
     */
    public function setTaxPercentage($TaxPercentage)
    {
        $this->TaxPercentage = $TaxPercentage;

        return $this;
    }

    /**
     * 'line' or 'subscription', this invoice line or whole subscription
     *
     * @return string
     */
    public function getDiscountPercentageType()
    {
        return $this->DiscountPercentageType;
    }

    /**
     * 'line' or 'subscription', this invoice line or whole subscription
     *
     * @param string $DiscountPercentageType
     */
    public function setDiscountPercentageType($DiscountPercentageType)
    {
        $this->DiscountPercentageType = $DiscountPercentageType;
    }

    /**
     * Gets the The periodic type. ('once' or 'period').
     *
     * @return string
     */
    public function getPeriodicType()
    {
        return $this->PeriodicType;
    }

    /**
     * Sets the The periodic type. ('once' or 'period').
     *
     * @param string $PeriodicType the periodic type
     *
     * @return WeFact_InvoiceLine
     */
    public function setPeriodicType($PeriodicType)
    {
        $this->PeriodicType = $PeriodicType;

        return $this;
    }

    /**
     * Gets the The number of periods.
     *
     * @return int
     */
    public function getPeriods()
    {
        return $this->Periods;
    }

    /**
     * Sets the The number of periods.
     *
     * @param int $Periods the periods
     *
     * @return WeFact_InvoiceLine
     */
    public function setPeriods($Periods)
    {
        $this->Periods = $Periods;

        return $this;
    }

    /**
     * Gets the The period
     *
     * @return string
     */
    public function getPeriodic()
    {
        return $this->Periodic;
    }

    /**
     * Sets the The period
     *
     * @param string $Periodic the periodic
     *
     * @return WeFact_InvoiceLine
     */
    public function setPeriodic($Periodic)
    {
        $this->Periodic = $Periodic;

        return $this;
    }

    /**
     * Gets the The starting date of the period.
     *
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->StartPeriod;
    }

    /**
     * Sets the The starting date of the period.
     *
     * @param string $StartPeriod the start period
     *
     * @return WeFact_InvoiceLine
     */
    public function setStartPeriod($StartPeriod)
    {
        $this->StartPeriod = $StartPeriod;

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
     * @return WeFact_InvoiceLine
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;

        return $this;
    }
}
