<?php

/**
 * Class WeFact_OrderLine
 */
class WeFact_OrderLine
{
    /**
     * Identifier
     *
     * @var int
     */
    protected $Identifier;

    /**
     * DateTime (default today)
     *
     * @var string
     */
    protected $Date;

    /**
     * Amount (default 1)
     *
     * @var float
     */
    protected $Number;

    /**
     * Product Code
     *
     * @var string
     */
    protected $ProductCode;

    /**
     * Description
     *
     * @var string
     */
    protected $Description;

    /**
     * Price excluding tax
     *
     * @var float
     */
    protected $PriceExcl;

    /**
     * 0 - 100
     *
     * @var float
     */
    protected $DiscountPercentage;

    /**
     * VAT Percent 0 - 100
     *
     * @var float
     */
    protected $TaxPercentage;

    /**
     * PeriodicType, once or period
     *
     * @var string
     */
    protected $PeriodicType;

    /**
     * amount of "Periodic" times, like 4x 1 month, see Periodic
     *
     * @var int
     */
    protected $Periods;

    /**
     * leeg    once
     * d       Day
     * w       Week
     * m       Month
     * k       Quarterly
     * h       6 months
     * j       year
     * t       two years
     *
     * @var string
     */
    protected $Periodic;

    /**
     * Date
     *
     * @var string
     */
    protected $StartPeriod;

    /**
     * the type of the linked product, domain, hosting, SSL (default empty)
     *
     * @var string
     */
    protected $ProductType;

    /**
     * the reference of the linked product
     *
     * @var int
     */
    protected $Reference;

    /**
     * @return int
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param float $Number
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }

    /**
     * @param float $PriceExcl
     */
    public function setPriceExcl($PriceExcl)
    {
        $this->PriceExcl = $PriceExcl;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->DiscountPercentage;
    }

    /**
     * @param float $DiscountPercentage
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
        $this->DiscountPercentage = $DiscountPercentage;
    }

    /**
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }

    /**
     * @param float $TaxPercentage
     */
    public function setTaxPercentage($TaxPercentage)
    {
        $this->TaxPercentage = $TaxPercentage;
    }

    /**
     * @return string
     */
    public function getPeriodicType()
    {
        return $this->PeriodicType;
    }

    /**
     * @param string $PeriodicType
     */
    public function setPeriodicType($PeriodicType)
    {
        $this->PeriodicType = $PeriodicType;
    }

    /**
     * @return int
     */
    public function getPeriods()
    {
        return $this->Periods;
    }

    /**
     * @param int $Periods
     */
    public function setPeriods($Periods)
    {
        $this->Periods = $Periods;
    }

    /**
     * @return string
     */
    public function getPeriodic()
    {
        return $this->Periodic;
    }

    /**
     * @param string $Periodic
     */
    public function setPeriodic($Periodic)
    {
        $this->Periodic = $Periodic;
    }

    /**
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->StartPeriod;
    }

    /**
     * @param string $StartPeriod
     */
    public function setStartPeriod($StartPeriod)
    {
        $this->StartPeriod = $StartPeriod;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @param string $ProductType
     */
    public function setProductType($ProductType)
    {
        $this->ProductType = $ProductType;
    }

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param int $Reference
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
    }

    /**
     * Couple the orderline to a Product
     *
     * Add a WefactModel to your orderline (which must be created and status set to "in bestelling")
     * e.g. create a order with a domainname that has to be transferred with a AuthKey
     *
     * @param WeFact_Model $weFactModel
     * @throws Exception
     */
    public function addReferencedObjectToOrderLine($weFactModel)
    {
        if (!method_exists($weFactModel, 'getModelName')) {
            throw new Exception('given reference model does not appear to be a valid WeFact object');
        }
        if ($weFactModel->getIdentifier() == 0) {
            throw new Exception('given reference model has not been saved yet');
        }

        $productType = $weFactModel->getModelName();
        $this->setProductType($productType);
        $this->setReference($weFactModel->getIdentifier());
    }

    /**
     * @param array $array
     * @return WeFact_OrderLine|null
     */
    public static function arrayToObject($array)
    {
        $calledClass = get_called_class();
        $object      = new $calledClass;

        foreach ($array as $field => $value) {
            $object->$field = $value;
        }

        return $object;
    }
}
