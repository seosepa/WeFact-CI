<?php

/**
 * Class WeFact_Handle
 */
class WeFact_Handle extends WeFact_Model
{
    /**
     * @var string $Handle
     */
    protected $Handle = '';

    /**
     * @var int $Registrar
     */
    protected $Registrar = 0;

    /**
     * @var string $RegistrarHandle
     */
    protected $RegistrarHandle = '';

    /**
     * @var int $Debtor
     */
    protected $Debtor = 0;

    /**
     * @var string $DebtorCode
     */
    protected $DebtorCode = '';

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = '';

    /**
     * @var string $CompanyNumber
     */
    protected $CompanyNumber = '';

    /**
     * @see https://www.wefact.nl/wefact-hosting/apiv2/variabelen-lijst/
     *
     * @var string $LegalForm
     */
    protected $LegalForm = '';

    /**
     * @var string $TaxNumber
     */
    protected $TaxNumber = '';

    /**
     * default M
     *
     * @var string $Sex
     */
    protected $Sex = '';

    /**
     * @var string $Initials
     */
    protected $Initials = '';

    /**
     * @var string $SurName
     */
    protected $SurName = '';

    /**
     * @var string $Address
     */
    protected $Address = '';

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = '';

    /**
     * @var string $City
     */
    protected $City = '';

    /**
     * @var string $Country
     */
    protected $Country = '';

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = '';

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = '';

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = '';

    /**
     * yes|no
     *
     * @var string $copyDataFromDebtor
     */
    protected $copyDataFromDebtor = '';

    /**
     * @var string $copyDataFromHandle
     */
    protected $copyDataFromHandle = '';

    /**
     * yes|no
     *
     * @var string $createAtRegistrar
     */
    protected $createAtRegistrar = '';

    /**
     * yes|no
     *
     * @var string $createAtRegistrar
     */
    protected $updateAtRegistrar = '';

    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->Handle;
    }

    /**
     * @param string $Handle
     */
    public function setHandle($Handle)
    {
        $this->Handle = $Handle;
    }

    /**
     * @return int
     */
    public function getRegistrar()
    {
        return $this->Registrar;
    }

    /**
     * @param int $Registrar
     */
    public function setRegistrar($Registrar)
    {
        $this->Registrar = $Registrar;
    }

    /**
     * @return string
     */
    public function getRegistrarHandle()
    {
        return $this->RegistrarHandle;
    }

    /**
     * @param string $RegistrarHandle
     */
    public function setRegistrarHandle($RegistrarHandle)
    {
        $this->RegistrarHandle = $RegistrarHandle;
    }

    /**
     * @return int
     */
    public function getDebtor()
    {
        return $this->Debtor;
    }

    /**
     * @param int $Debtor
     */
    public function setDebtor($Debtor)
    {
        $this->Debtor = $Debtor;
    }

    /**
     * @return string
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }

    /**
     * @param string $DebtorCode
     */
    public function setDebtorCode($DebtorCode)
    {
        $this->DebtorCode = $DebtorCode;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

    /**
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->CompanyNumber;
    }

    /**
     * @param string $CompanyNumber
     */
    public function setCompanyNumber($CompanyNumber)
    {
        $this->CompanyNumber = $CompanyNumber;
    }

    /**
     * @return string
     */
    public function getLegalForm()
    {
        return $this->LegalForm;
    }

    /**
     * @param string $LegalForm
     */
    public function setLegalForm($LegalForm)
    {
        $this->LegalForm = $LegalForm;
    }

    /**
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->TaxNumber;
    }

    /**
     * @param string $TaxNumber
     */
    public function setTaxNumber($TaxNumber)
    {
        $this->TaxNumber = $TaxNumber;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param string $Sex
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param string $Initials
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
        return $this->SurName;
    }

    /**
     * @param string $SurName
     */
    public function setSurName($SurName)
    {
        $this->SurName = $SurName;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     */
    public function setFaxNumber($FaxNumber)
    {
        $this->FaxNumber = $FaxNumber;
    }

    /**
     * @return string
     */
    public function getCopyDataFromDebtor()
    {
        return $this->copyDataFromDebtor;
    }

    /**
     * @param string $copyDataFromDebtor
     */
    public function setCopyDataFromDebtor($copyDataFromDebtor)
    {
        $this->copyDataFromDebtor = $copyDataFromDebtor;
    }

    /**
     * @return string
     */
    public function getCopyDataFromHandle()
    {
        return $this->copyDataFromHandle;
    }

    /**
     * @param string $copyDataFromHandle
     */
    public function setCopyDataFromHandle($copyDataFromHandle)
    {
        $this->copyDataFromHandle = $copyDataFromHandle;
    }

    /**
     * @return string
     */
    public function getCreateAtRegistrar()
    {
        return $this->createAtRegistrar;
    }

    /**
     * @param string $createAtRegistrar
     */
    public function setCreateAtRegistrar($createAtRegistrar)
    {
        $this->createAtRegistrar = $createAtRegistrar;
    }

    /**
     * @return string
     */
    public function getUpdateAtRegistrar()
    {
        return $this->updateAtRegistrar;
    }

    /**
     * @param string $updateAtRegistrar
     */
    public function setUpdateAtRegistrar($updateAtRegistrar)
    {
        $this->updateAtRegistrar = $updateAtRegistrar;
    }

    /**
     * Just "Handle" for this one
     *
     * @return string
     */
    public static function getModelCodeName()
    {
        return 'Handle';
    }

    /**
     * List the domains attached to this handle
     *
     * @throws Exception
     * @return array
     */
    public function listDomains()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'listdomain', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        if (isset($response['handles']) == false) {
            return false;
        }
        return $response['handles'];
    }
}
