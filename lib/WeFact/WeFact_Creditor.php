<?php

/**
 * Class WeFact_Creditor
 */
class WeFact_Creditor extends WeFact_Api
{
    /**
     * @var string
     */
    protected $CreditorCode;

    /**
     * @var string
     */
    protected $MyCustomerCode;

    /**
     * @var string
     */
    protected $CompanyName;

    /**
     * @var string
     */
    protected $CompanyNumber;

    /**
     * @var string
     */
    protected $TaxNumber;

    /**
     * @var string
     */
    protected $Sex;

    /**
     * @var string
     */
    protected $Initials;

    /**
     * @var string
     */
    protected $SurName;

    /**
     * @var string
     */
    protected $Address;

    /**
     * @var string
     */
    protected $ZipCode;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $Country;

    /**
     * @var string
     */
    protected $EmailAddress;

    /**
     * @var string
     */
    protected $PhoneNumber;

    /**
     * @var string
     */
    protected $MobileNumber;

    /**
     * @var string
     */
    protected $FaxNumber;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var string
     */
    protected $AccountNumber;

    /**
     * @var string
     */
    protected $AccountName;

    /**
     * @var string
     */
    protected $AccountBank;

    /**
     * @var string
     */
    protected $AccountCity;

    /**
     * @var string
     */
    protected $AccountBIC;

    /**
     * @var int
     */
    protected $Term;

    /**
     * @var array
     */
    protected $groups = array();

    /**
     * Gets the value of CreditorCode.
     *
     * @return string
     */
    public function getCreditorCode()
    {
        return $this->CreditorCode;
    }

    /**
     * Sets the value of CreditorCode.
     *
     * @param string $CreditorCode the creditor code
     *
     * @return WeFact_Creditor
     */
    public function setCreditorCode($CreditorCode)
    {
        $this->CreditorCode = $CreditorCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMyCustomerCode()
    {
        return $this->MyCustomerCode;
    }

    /**
     * @param string $MyCustomerCode
     */
    public function setMyCustomerCode($MyCustomerCode)
    {
        $this->MyCustomerCode = $MyCustomerCode;
    }

    /**
     * Gets the value of CompanyName.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets the value of CompanyName.
     *
     * @param string $CompanyName the company name
     *
     * @return WeFact_Creditor
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * Gets the value of CompanyNumber.
     *
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->CompanyNumber;
    }

    /**
     * Sets the value of CompanyNumber.
     *
     * @param string $CompanyNumber the company number
     *
     * @return WeFact_Creditor
     */
    public function setCompanyNumber($CompanyNumber)
    {
        $this->CompanyNumber = $CompanyNumber;

        return $this;
    }

    /**
     * Gets the value of TaxNumber.
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->TaxNumber;
    }

    /**
     * Sets the value of TaxNumber.
     *
     * @param string $TaxNumber the tax number
     *
     * @return WeFact_Creditor
     */
    public function setTaxNumber($TaxNumber)
    {
        $this->TaxNumber = $TaxNumber;

        return $this;
    }

    /**
     * Gets the value of Sex.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Sets the value of Sex.
     *
     * @param string $Sex the sex
     *
     * @return WeFact_Creditor
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    /**
     * Gets the value of Initials.
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * Sets the value of Initials.
     *
     * @param string $Initials the initials
     *
     * @return WeFact_Creditor
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;

        return $this;
    }

    /**
     * Gets the value of SurName.
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->SurName;
    }

    /**
     * Sets the value of SurName.
     *
     * @param string $SurName the sur name
     *
     * @return WeFact_Creditor
     */
    public function setSurName($SurName)
    {
        $this->SurName = $SurName;

        return $this;
    }

    /**
     * Gets the value of Address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Sets the value of Address.
     *
     * @param string $Address the address
     *
     * @return WeFact_Creditor
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Gets the value of ZipCode.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Sets the value of ZipCode.
     *
     * @param string $ZipCode the zip code
     *
     * @return WeFact_Creditor
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    /**
     * Gets the value of City.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the value of City.
     *
     * @param string $City the city
     *
     * @return WeFact_Creditor
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Gets the value of Country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets the value of Country.
     *
     * @param string $Country the country
     *
     * @return WeFact_Creditor
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Gets the value of EmailAddress.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * Sets the value of EmailAddress.
     *
     * @param string $EmailAddress the email address
     *
     * @return WeFact_Creditor
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    /**
     * Gets the value of PhoneNumber.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets the value of PhoneNumber.
     *
     * @param string $PhoneNumber the phone number
     *
     * @return WeFact_Creditor
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    /**
     * Gets the value of MobileNumber.
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->MobileNumber;
    }

    /**
     * Sets the value of MobileNumber.
     *
     * @param string $MobileNumber the mobile number
     *
     * @return WeFact_Creditor
     */
    public function setMobileNumber($MobileNumber)
    {
        $this->MobileNumber = $MobileNumber;

        return $this;
    }

    /**
     * Gets the value of FaxNumber.
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * Sets the value of FaxNumber.
     *
     * @param string $FaxNumber the fax number
     *
     * @return WeFact_Creditor
     */
    public function setFaxNumber($FaxNumber)
    {
        $this->FaxNumber = $FaxNumber;

        return $this;
    }

    /**
     * Gets the value of Comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Sets the value of Comment.
     *
     * @param string $Comment the comment
     *
     * @return WeFact_Creditor
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;

        return $this;
    }

    /**
     * Gets the value of AccountNumber.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * Sets the value of AccountNumber.
     *
     * @param string $AccountNumber the account number
     *
     * @return WeFact_Creditor
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;

        return $this;
    }

    /**
     * Gets the value of AccountName.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * Sets the value of AccountName.
     *
     * @param string $AccountName the account name
     *
     * @return WeFact_Creditor
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;

        return $this;
    }

    /**
     * Gets the value of AccountBank.
     *
     * @return string
     */
    public function getAccountBank()
    {
        return $this->AccountBank;
    }

    /**
     * Sets the value of AccountBank.
     *
     * @param string $AccountBank the account bank
     *
     * @return WeFact_Creditor
     */
    public function setAccountBank($AccountBank)
    {
        $this->AccountBank = $AccountBank;

        return $this;
    }

    /**
     * Gets the value of AccountCity.
     *
     * @return string
     */
    public function getAccountCity()
    {
        return $this->AccountCity;
    }

    /**
     * Sets the value of AccountCity.
     *
     * @param string $AccountCity the account city
     *
     * @return WeFact_Creditor
     */
    public function setAccountCity($AccountCity)
    {
        $this->AccountCity = $AccountCity;

        return $this;
    }

    /**
     * Gets the value of AccountBIC.
     *
     * @return string
     */
    public function getAccountBIC()
    {
        return $this->AccountBIC;
    }

    /**
     * Sets the value of AccountBIC.
     *
     * @param string $AccountBIC the account bi c
     *
     * @return WeFact_Creditor
     */
    public function setAccountBIC($AccountBIC)
    {
        $this->AccountBIC = $AccountBIC;

        return $this;
    }

    /**
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }

    /**
     * @param int $Term
     */
    public function setTerm($Term)
    {
        $this->Term = $Term;
    }

    /**
     * Gets the value of groups.
     *
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets the value of groups.
     *
     * @param array $groups the groups
     *
     * @return WeFact_Creditor
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Creates a WeFact_Creditor
     *
     * @return array
     */
    protected function insert()
    {
        $parameters = get_object_vars($this);
        if ($parameters['Sex'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Sex must be defined!')
            );
        }
        if ($parameters['Sex'] != "m" && $parameters['Sex'] != "f") {
            throw new \InvalidArgumentException(
                sprintf('Sex should either be \'m\' or \'f\' not ' . $parameters['Sex'] . '!')
            );
        }
        if ($parameters['CompanyName'] == '' && $parameters['SurName'] == '') {
            throw new \InvalidArgumentException(
                sprintf('Either companyName or surName must be defined!')
            );
        }
        return $this->sendRequest('creditor', 'add', $parameters);
    }

    /**
     * Edit a creditor
     *
     * @return array
     */
    protected function update()
    {
        if ($this->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('creditor', 'edit', $parameters);
    }

    /**
     * Save a creditor (insert or update)
     *
     * @throws Exception
     * @return array
     */
    public function save()
    {
        // Check if update or insert
        if ($this->getCreditorCode() == '') {
            $response = $this->insert();
        } else {
            $response = $this->update();
        }

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to save WeFact_Creditor: ' . print_r($response['errors'],true) );
        }
        return $response;
    }

    /**
     * Delete a creditor
     *
     * @param  bool $removeCreditInvoice
     * @throws Exception
     * @return array
     */
    public function remove($removeCreditInvoice = false)
    {
        if ($this->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $withCreditInvoice = "no";

        if ($removeCreditInvoice) {
            $withCreditInvoice = "yes";
        }

        $parameters = array(
            'CreditorCode'      => $this->getCreditorCode(),
            'withcreditinvoice' => $withCreditInvoice,
        );
        $response = $this->sendRequest('creditor', 'delete', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to remove WeFact_Creditor: ' . print_r($response['errors'],true) );
        }

        return $response;
    }

    /**
     * List all Creditors
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @return WeFact_Creditor[]
     */
    public static function listAll()
    {
        $api        = new WeFact_Api();
        $parameters = array();
        $response   = $api->sendRequest('creditor', 'list', $parameters);
        $result     = array();

        if (isset($response['creditors'])) {
            foreach ($response['creditors'] as $creditorArray) {
                $creditor = new self();
                foreach ($creditorArray as $field => $value) {
                    $creditor->$field = $value;
                }
                $result[] = $creditor;
            }
        }
        return $result;
    }


    /**
     * get's the creditor info by its code
     *
     * @param  int $creditorCode
     * @throws Exception
     * @return WeFact_Creditor
     */
    public static function getByCode($creditorCode)
    {
        $api        = new WeFact_Api();
        if ($creditorCode == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }
        $parameters = array('CreditorCode' => $creditorCode);
        $response   = $api->sendRequest('creditor', 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        $creditor = new self();

        if (isset($response['creditor'])) {
            foreach ($response['creditor'] as $field => $value) {
                $creditor->$field = $value;
            }
        }
        return $creditor;
    }

    /**
     * Renew the variable information in this object from the WeFactApi
     *
     * @throws Exception
     * @return WeFact_Creditor
     */
    public function renew()
    {
        $newObject = $this->getByCode($this->getCreditorCode());

        if ($newObject == null) {
            Throw new Exception("WeFact_Creditor[Code={$this->getCreditorCode()}] does not exists in WeFact");
        }

        $newInformation = get_object_vars($newObject);
        foreach ($newInformation as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }
}
