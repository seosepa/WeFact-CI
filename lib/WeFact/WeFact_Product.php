<?php

/**
 * Class WeFact_Product
 */
class WeFact_Product extends WeFact_Model
{
    /**
     * The product code
     *
     * @var string
     */
    protected $ProductCode;

    /**
     * The product name
     *
     * @var string
     */
    protected $ProductName;

    /**
     * Product description on an invoice
     *
     * @var string
     */
    protected $ProductKeyPhrase;

    /**
     * Extended product description for internal use.
     *
     * @var string
     */
    protected $ProductDescription;

    /**
     * Price excluding taxes
     *
     * @var float
     */
    protected $PriceExcl;

    /**
     * The price period.
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @var string
     */
    protected $PricePeriod;

    /**
     * The tax percentage
     * Can be 0-100
     *
     * @var float
     */
    protected $TaxPercentage;


    /**
     * An array with ID's of product groups
     *
     * @var array
     */
    protected $Groups = array();

    /**
     * The Cost
     *
     * @var float
     */
    protected $Cost;

    /**
     * The ProductType
     *
     * @var string
     */
    protected $ProductType;

    /**
     * The ProductTld
     *
     * @var string
     */
    protected $ProductTld;

    /**
     * The PackageID
     *
     * @var string
     */
    protected $PackageID;

    /**
     * Does it have a customPrice  'no' or 'period'
     *
     * @var string
     */
    protected $HasCustomPrice;

    /**
     * CustomPrices
     *
     * @var array
     */
    protected $CustomPrices = array();


    /**
     * Gets the The product code.
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }

    /**
     * Sets the The product code.
     *
     * @param string $ProductCode the product code
     *
     * @return WeFact_Product
     */
    public function setProductCode($ProductCode)
    {
        $this->ProductCode = $ProductCode;

        return $this;
    }

    /**
     * Gets the The product name.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->ProductName;
    }

    /**
     * Sets the The product name.
     *
     * @param string $ProductName the product name
     *
     * @return WeFact_Product
     */
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    /**
     * Gets the WeFact_Product description on an invoice.
     *
     * @return string
     */
    public function getProductKeyPhrase()
    {
        return $this->ProductKeyPhrase;
    }

    /**
     * Sets the WeFact_Product description on an invoice.
     *
     * @param string $ProductKeyPhrase the product key phrase
     *
     * @return WeFact_Product
     */
    public function setProductKeyPhrase($ProductKeyPhrase)
    {
        $this->ProductKeyPhrase = $ProductKeyPhrase;

        return $this;
    }

    /**
     * Gets the Extended product description for internal use.
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }

    /**
     * Sets the Extended product description for internal use.
     *
     * @param string $ProductDescription the product description
     *
     * @return WeFact_Product
     */
    public function setProductDescription($ProductDescription)
    {
        $this->ProductDescription = $ProductDescription;

        return $this;
    }

    /**
     * Gets the Price excluding taxes.
     *
     * @return float
     */
    public function getPriceExcl()
    {
        return $this->PriceExcl;
    }

    /**
     * Sets the Price excluding taxes.
     *
     * @param float $PriceExcl the price excl
     *
     * @return WeFact_Product
     */
    public function setPriceExcl($PriceExcl)
    {
        $this->PriceExcl = $PriceExcl;

        return $this;
    }

    /**
     * Gets the The price period
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @return string
     */
    public function getPricePeriod()
    {
        return $this->PricePeriod;
    }

    /**
     * Sets the The price period
     * This can be d for daily, w for week, m for month, k for quarter,
     * h for half a year, j for a year and t for two years.
     *
     * @param string $PricePeriod the price period
     *
     * @return WeFact_Product
     */
    public function setPricePeriod($PricePeriod)
    {
        $this->PricePeriod = $PricePeriod;

        return $this;
    }

    /**
     * Gets the The tax percentage
     * Can be 0-100.
     *
     * @return float
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }

    /**
     * Sets the The tax percentage
     * Can be 0-100.
     *
     * @param float $TaxPercentage the tax percentage
     *
     * @return WeFact_Product
     */
    public function setTaxPercentage($TaxPercentage)
    {
        $this->TaxPercentage = $TaxPercentage;

        return $this;
    }

    /**
     * Gets the An array with ID's of product groups.
     *
     * @return array
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * Sets the An array with ID's of product groups.
     *
     * @param array $Groups the groups
     *
     * @return WeFact_Product
     */
    public function setGroups(array $Groups)
    {
        $this->Groups = $Groups;

        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @return string
     */
    public function getProductTld()
    {
        return $this->ProductTld;
    }

    /**
     * @return string
     */
    public function getPackageID()
    {
        return $this->PackageID;
    }

    /**
     * @return string
     */
    public function getHasCustomPrice()
    {
        return $this->HasCustomPrice;
    }

    /**
     * @param string $HasCustomPrice
     */
    public function setHasCustomPrice($HasCustomPrice)
    {
        $this->HasCustomPrice = $HasCustomPrice;
    }

    /**
     * @return array
     */
    public function getCustomPrices()
    {
        return $this->CustomPrices;
    }

    /**
     * @param array $CustomPrices
     */
    public function setCustomPrices($CustomPrices)
    {
        $this->CustomPrices = $CustomPrices;
    }

    /**
     * Check if there are any errors in the model data
     */
    public function checkForErrors()
    {
        if ($this->getProductName() == '') {
            throw new \InvalidArgumentException(
                sprintf('ProductName must be defined!')
            );
        }
        if ($this->getProductKeyPhrase() == '') {
            throw new \InvalidArgumentException(
                sprintf('ProductKeyPhrase must be defined!')
            );
        }
        if ($this->getPriceExcl() == '') {
            throw new \InvalidArgumentException(
                sprintf('PriceExcl must be defined!')
            );
        }
    }

    /**
     * Search all by string
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @param int $groupId
     * @throws Exception
     * @return WeFact_Product[]
     */
    public static function getByGroupId($groupId)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'group' => $groupId,
        );
        $response   = $api->sendRequest(self::getModelName(), 'list', $parameters);
        $result     = array();
        $modelNames = self::getModelName() . 's';

        if (isset($response[$modelNames])) {
            foreach ($response[$modelNames] as $objectArray) {
                $calledClass = get_called_class();
                $object      = new $calledClass;
                foreach ($objectArray as $field => $value) {
                    $object->$field = $value;
                }
                $result[] = $object;
            }
        }
        return $result;
    }

    /**
     * Returns all ProductType Models with this packageId|SSLTypeID
     *
     * @throws Exception
     * @return WeFact_Model[]
     */
    public function findAllModelsForThisProductTypeAndPackage()
    {
        $class = "WeFact_" . ucfirst($this->getProductType());
        if (!class_exists($class)) {
            throw new Exception("class[={$class}] for productType {$this->getProductType()} does not exist");
        }
        if (!method_exists($class,'findByPackageId')) {
            throw new Exception("class[={$class}] does not have a packageId search function");
        }

        /** @var WeFact_Ssl|WeFact_Hosting $class */
        return $class::findByPackageId($this->getPackageID());
    }
}
