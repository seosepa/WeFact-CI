<?php

/**
 * Class WeFact_Debtor
 */
class WeFact_Debtor extends WeFact_Model
{
    /**
     * @var string
     */
    protected $DebtorCode;

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
    protected $LegalForm;

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
    protected $SecondEmailAddress;

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
    protected $Website;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var int
     */
    protected $InvoiceMethod;

    /**
     * @var string
     */
    protected $InvoiceCompanyName;

    /**
     * @var string
     */
    protected $InvoiceSex;

    /**
     * @var string
     */
    protected $InvoiceInitials;

    /**
     * @var string
     */
    protected $InvoiceSurName;

    /**
     * @var string
     */
    protected $InvoiceAddress;

    /**
     * @var string
     */
    protected $InvoiceZipCode;

    /**
     * @var string
     */
    protected $InvoiceCity;

    /**
     * @var string
     */
    protected $InvoiceCountry;

    /**
     * @var string
     */
    protected $InvoiceEmailAddress;

    /**
     * @var string
     */
    protected $InvoiceAuthorisation;

    /**
     * @var string
     */
    protected $InvoiceDataForPriceQuote;

    /**
     * @var string
     */
    protected $AccountNumber;

    /**
     * @var string
     */
    protected $AccountBIC;

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
     * yes or no
     *
     * @var string
     */
    protected $ActiveLogin;

    /**
     * @var string
     */
    protected $Username;

    /**
     * @var string
     */
    protected $Password;

    /**
     * @var string
     */
    protected $Mailing;

    /**
     * @var string
     */
    protected $Taxable;

    /**
     * @var int
     */
    protected $InvoiceTerm;

    /**
     * default -1
     *
     * @var int
     */
    protected $PeriodicInvoiceDays;

    /**
     * @var int
     */
    protected $InvoiceTemplate;

    /**
     * @var int
     */
    protected $PriceQuoteTemplate;

    /**
     * @var int
     */
    protected $ReminderTemplate;

    /**
     * @var int
     */
    protected $SecondReminderTemplate;

    /**
     * @var int
     */
    protected $SummationTemplate;

    /**
     * @var int
     */
    protected $PaymentMail;

    /**
     * @var int
     */
    protected $PaymentMailTemplate;

    /**
     * @var int
     */
    protected $InvoiceCollect;

    /**
     * @var int
     */
    protected $DefaultLanguage;

    /**
     * The preferred ServerId
     *
     * @var int
     */
    protected $Server;

    /**
     * @var string
     */
    protected $DNS1;

    /**
     * @var string
     */
    protected $DNS2;

    /**
     * @var string
     */
    protected $DNS3;

    /**
     * @var array
     */
    protected $Groups;

    /**
     * @var array
     */
    protected $CustomFields;

    /**
     * yes or no send welcome mail
     *
     * @var string
     */
    protected $SendWelcome;

    /**
     * Gets the value of DebtorCode.
     *
     * @return string
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }

    /**
     * Sets the value of DebtorCode.
     *
     * @param string $DebtorCode the debtor code
     *
     * @return WeFact_Debtor
     */
    public function setDebtorCode($DebtorCode)
    {
        $this->DebtorCode = $DebtorCode;

        return $this;
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
     */
    public function setCompanyNumber($CompanyNumber)
    {
        $this->CompanyNumber = $CompanyNumber;

        return $this;
    }

    /**
     * Gets the value of LegalForm.
     *
     * @return string
     */
    public function getLegalForm()
    {
        return $this->LegalForm;
    }

    /**
     * Sets the value of LegalForm.
     *
     * @param string $LegalForm the legal form
     *
     * @return WeFact_Debtor
     */
    public function setLegalForm($LegalForm)
    {
        $this->LegalForm = $LegalForm;

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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    /**
     * Gets the value of SecondEmailAddress.
     *
     * @return string
     */
    public function getSecondEmailAddress()
    {
        return $this->SecondEmailAddress;
    }

    /**
     * Sets the value of SecondEmailAddress.
     *
     * @param string $SecondEmailAddress the second email address
     *
     * @return WeFact_Debtor
     */
    public function setSecondEmailAddress($SecondEmailAddress)
    {
        $this->SecondEmailAddress = $SecondEmailAddress;

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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
     */
    public function setFaxNumber($FaxNumber)
    {
        $this->FaxNumber = $FaxNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param string $Website
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;
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
     * @return WeFact_Debtor
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;

        return $this;
    }

    /**
     * Gets the value of InvoiceMethod.
     *
     * @return int
     */
    public function getInvoiceMethod()
    {
        return $this->InvoiceMethod;
    }

    /**
     * Sets the value of InvoiceMethod.
     *
     * @param int $InvoiceMethod the invoice method
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceMethod($InvoiceMethod)
    {
        $this->InvoiceMethod = $InvoiceMethod;

        return $this;
    }

    /**
     * Gets the value of InvoiceCompanyName.
     *
     * @return string
     */
    public function getInvoiceCompanyName()
    {
        return $this->InvoiceCompanyName;
    }

    /**
     * Sets the value of InvoiceCompanyName.
     *
     * @param string $InvoiceCompanyName the invoice company name
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceCompanyName($InvoiceCompanyName)
    {
        $this->InvoiceCompanyName = $InvoiceCompanyName;

        return $this;
    }

    /**
     * Gets the value of InvoiceSex.
     *
     * @return string
     */
    public function getInvoiceSex()
    {
        return $this->InvoiceSex;
    }

    /**
     * Sets the value of InvoiceSex.
     *
     * @param string $InvoiceSex the invoice sex
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceSex($InvoiceSex)
    {
        $this->InvoiceSex = $InvoiceSex;

        return $this;
    }

    /**
     * Gets the value of InvoiceInitials.
     *
     * @return string
     */
    public function getInvoiceInitials()
    {
        return $this->InvoiceInitials;
    }

    /**
     * Sets the value of InvoiceInitials.
     *
     * @param string $InvoiceInitials the invoice initials
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceInitials($InvoiceInitials)
    {
        $this->InvoiceInitials = $InvoiceInitials;

        return $this;
    }

    /**
     * Gets the value of InvoiceSurName.
     *
     * @return string
     */
    public function getInvoiceSurName()
    {
        return $this->InvoiceSurName;
    }

    /**
     * Sets the value of InvoiceSurName.
     *
     * @param string $InvoiceSurName the invoice sur name
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceSurName($InvoiceSurName)
    {
        $this->InvoiceSurName = $InvoiceSurName;

        return $this;
    }

    /**
     * Gets the value of InvoiceAddress.
     *
     * @return string
     */
    public function getInvoiceAddress()
    {
        return $this->InvoiceAddress;
    }

    /**
     * Sets the value of InvoiceAddress.
     *
     * @param string $InvoiceAddress the invoice address
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceAddress($InvoiceAddress)
    {
        $this->InvoiceAddress = $InvoiceAddress;

        return $this;
    }

    /**
     * Gets the value of InvoiceZipCode.
     *
     * @return string
     */
    public function getInvoiceZipCode()
    {
        return $this->InvoiceZipCode;
    }

    /**
     * Sets the value of InvoiceZipCode.
     *
     * @param string $InvoiceZipCode the invoice zip code
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceZipCode($InvoiceZipCode)
    {
        $this->InvoiceZipCode = $InvoiceZipCode;

        return $this;
    }

    /**
     * Gets the value of InvoiceCity.
     *
     * @return string
     */
    public function getInvoiceCity()
    {
        return $this->InvoiceCity;
    }

    /**
     * Sets the value of InvoiceCity.
     *
     * @param string $InvoiceCity the invoice city
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceCity($InvoiceCity)
    {
        $this->InvoiceCity = $InvoiceCity;

        return $this;
    }

    /**
     * Gets the value of InvoiceCountry.
     *
     * @return string
     */
    public function getInvoiceCountry()
    {
        return $this->InvoiceCountry;
    }

    /**
     * Sets the value of InvoiceCountry.
     *
     * @param string $InvoiceCountry the invoice country
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceCountry($InvoiceCountry)
    {
        $this->InvoiceCountry = $InvoiceCountry;

        return $this;
    }

    /**
     * Gets the value of InvoiceEmailAddress.
     *
     * @return string
     */
    public function getInvoiceEmailAddress()
    {
        return $this->InvoiceEmailAddress;
    }

    /**
     * Sets the value of InvoiceEmailAddress.
     *
     * @param string $InvoiceEmailAddress the invoice email address
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceEmailAddress($InvoiceEmailAddress)
    {
        $this->InvoiceEmailAddress = $InvoiceEmailAddress;

        return $this;
    }

    /**
     * Gets the value of InvoiceDataForPriceQuote.
     *
     * @return string
     */
    public function getInvoiceDataForPriceQuote()
    {
        return $this->InvoiceDataForPriceQuote;
    }

    /**
     * Sets the value of InvoiceDataForPriceQuote.
     *
     * @param string $InvoiceDataForPriceQuote the invoice data for price quote
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceDataForPriceQuote($InvoiceDataForPriceQuote)
    {
        $this->InvoiceDataForPriceQuote = $InvoiceDataForPriceQuote;

        return $this;
    }

    /**
     * Gets the value of InvoiceAuthorisation.
     *
     * @return string
     */
    public function getInvoiceAuthorisation()
    {
        return $this->InvoiceAuthorisation;
    }

    /**
     * Sets the value of InvoiceAuthorisation.
     *
     * @param string $InvoiceAuthorisation the invoice authorisation
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceAuthorisation($InvoiceAuthorisation)
    {
        $this->InvoiceAuthorisation = $InvoiceAuthorisation;

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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
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
     * @return WeFact_Debtor
     */
    public function setAccountBIC($AccountBIC)
    {
        $this->AccountBIC = $AccountBIC;

        return $this;
    }

    /**
     * @return string
     */
    public function getMailing()
    {
        return $this->Mailing;
    }

    /**
     * @param string $Mailing
     */
    public function setMailing($Mailing)
    {
        $this->Mailing = $Mailing;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }

    /**
     * @return string
     */
    public function getActiveLogin()
    {
        return $this->ActiveLogin;
    }

    /**
     * @param string $ActiveLogin
     */
    public function setActiveLogin($ActiveLogin)
    {
        $this->ActiveLogin = $ActiveLogin;
    }

    /**
     * Gets the value of Taxable.
     *
     * @return string
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * Sets the value of Taxable.
     *
     * @param string $Taxable the taxable
     *
     * @return WeFact_Debtor
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;

        return $this;
    }

    /**
     * Gets the value of InvoiceTerm.
     *
     * @return int
     */
    public function getInvoiceTerm()
    {
        return $this->InvoiceTerm;
    }

    /**
     * Sets the value of InvoiceTerm.
     *
     * @param int $InvoiceTerm the invoice term
     *
     * @return WeFact_Debtor
     */
    public function setInvoiceTerm($InvoiceTerm)
    {
        $this->InvoiceTerm = $InvoiceTerm;

        return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicInvoiceDays()
    {
        return $this->PeriodicInvoiceDays;
    }

    /**
     * default -1
     *
     * @param int $PeriodicInvoiceDays
     */
    public function setPeriodicInvoiceDays($PeriodicInvoiceDays)
    {
        $this->PeriodicInvoiceDays = $PeriodicInvoiceDays;
    }

    /**
     * @return int
     */
    public function getInvoiceTemplate()
    {
        return $this->InvoiceTemplate;
    }

    /**
     * @param int $InvoiceTemplate
     */
    public function setInvoiceTemplate($InvoiceTemplate)
    {
        $this->InvoiceTemplate = $InvoiceTemplate;
    }

    /**
     * @return int
     */
    public function getPriceQuoteTemplate()
    {
        return $this->PriceQuoteTemplate;
    }

    /**
     * @param int $PriceQuoteTemplate
     */
    public function setPriceQuoteTemplate($PriceQuoteTemplate)
    {
        $this->PriceQuoteTemplate = $PriceQuoteTemplate;
    }

    /**
     * Gets the value of ReminderTemplate.
     *
     * @return int
     */
    public function getReminderTemplate()
    {
        return $this->ReminderTemplate;
    }

    /**
     * Sets the value of ReminderTemplate.
     *
     * @param int $ReminderTemplate the reminder template
     *
     * @return WeFact_Debtor
     */
    public function setReminderTemplate($ReminderTemplate)
    {
        $this->ReminderTemplate = $ReminderTemplate;

        return $this;
    }

    /**
     * @return int
     */
    public function getSecondReminderTemplate()
    {
        return $this->SecondReminderTemplate;
    }

    /**
     * @param int $SecondReminderTemplate
     */
    public function setSecondReminderTemplate($SecondReminderTemplate)
    {
        $this->SecondReminderTemplate = $SecondReminderTemplate;
    }

    /**
     * Gets the value of SummationTemplate.
     *
     * @return int
     */
    public function getSummationTemplate()
    {
        return $this->SummationTemplate;
    }

    /**
     * Sets the value of SummationTemplate.
     *
     * @param int $SummationTemplate the summation template
     *
     * @return WeFact_Debtor
     */
    public function setSummationTemplate($SummationTemplate)
    {
        $this->SummationTemplate = $SummationTemplate;

        return $this;
    }

    /**
     * Gets the value of PaymentMail.
     *
     * @return int
     */
    public function getPaymentMail()
    {
        return $this->PaymentMail;
    }

    /**
     * Sets the value of PaymentMail.
     *
     * @param int $PaymentMail the payment mail
     *
     * @return WeFact_Debtor
     */
    public function setPaymentMail($PaymentMail)
    {
        $this->PaymentMail = $PaymentMail;

        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMailTemplate()
    {
        return $this->PaymentMailTemplate;
    }

    /**
     * @param int $PaymentMailTemplate
     */
    public function setPaymentMailTemplate($PaymentMailTemplate)
    {
        $this->PaymentMailTemplate = $PaymentMailTemplate;
    }

    /**
     * @return int
     */
    public function getInvoiceCollect()
    {
        return $this->InvoiceCollect;
    }

    /**
     * @param int $InvoiceCollect
     */
    public function setInvoiceCollect($InvoiceCollect)
    {
        $this->InvoiceCollect = $InvoiceCollect;
    }

    /**
     * @return int
     */
    public function getDefaultLanguage()
    {
        return $this->DefaultLanguage;
    }

    /**
     * @param int $DefaultLanguage
     */
    public function setDefaultLanguage($DefaultLanguage)
    {
        $this->DefaultLanguage = $DefaultLanguage;
    }

    /**
     * @return int
     */
    public function getServer()
    {
        return $this->Server;
    }

    /**
     * @param int $Server
     */
    public function setServer($Server)
    {
        $this->Server = $Server;
    }

    /**
     * @return string
     */
    public function getDNS1()
    {
        return $this->DNS1;
    }

    /**
     * @param string $DNS1
     */
    public function setDNS1($DNS1)
    {
        $this->DNS1 = $DNS1;
    }

    /**
     * @return string
     */
    public function getDNS2()
    {
        return $this->DNS2;
    }

    /**
     * @param string $DNS2
     */
    public function setDNS2($DNS2)
    {
        $this->DNS2 = $DNS2;
    }

    /**
     * @return string
     */
    public function getDNS3()
    {
        return $this->DNS3;
    }

    /**
     * @param string $DNS3
     */
    public function setDNS3($DNS3)
    {
        $this->DNS3 = $DNS3;
    }

    /**
     * Gets the value of Groups.
     *
     * @return array
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * Sets the value of Groups.
     *
     * @param array $Groups the groups
     *
     * @return WeFact_Debtor
     */
    public function setGroups(array $Groups)
    {
        $this->Groups = $Groups;

        return $this;
    }

    /**
     * Gets the value of CustomFields.
     *
     * @return array
     */
    public function getCustomFields()
    {
        return $this->CustomFields;
    }

    /**
     * Sets the value of CustomFields.
     *
     * @param array $CustomFields the custom fields
     *
     * @return WeFact_Debtor
     */
    public function setCustomFields(array $CustomFields)
    {
        $this->CustomFields = $CustomFields;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendWelcome()
    {
        return $this->SendWelcome;
    }

    /**
     * @param string $SendWelcome
     */
    public function setSendWelcome($SendWelcome)
    {
        $this->SendWelcome = $SendWelcome;
    }

    /**
     * Delete a Debtor (Not Implemented)
     *
     * @throws Exception
     * @return array
     */
    public function remove()
    {
        throw new Exception('Function not implemented by WeFact API');
    }

    /**
     * override default, because we want to know to password in order to check it against self bcrypt encrypted hash
     *
     * @param  int $objectCode
     * @return WeFact_Model
     */
    public static function getByCode($objectCode)
    {
        $api = new WeFact_Api();
        if ($objectCode == '') {
            throw new \InvalidArgumentException(
                sprintf('ObjectCode must be defined!')
            );
        }
        $parameters = array(
            self::getModelCodeName() => $objectCode,
            'GetPassword' => 'yes', // we want the password!
        );
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * get debtor by login
     * beware this is an expensive function
     *
     * @param  string $debtorLogin
     * @return WeFact_Debtor
     */
    public static function getByLogin($debtorLogin)
    {
        $api = new WeFact_Api();
        if ($debtorLogin == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorLogin must be defined!')
            );
        }
        $parameters = array(
            'searchat'  => 'Username',
            'searchfor' => $debtorLogin,
        );
        $response   = $api->sendRequest('debtor', 'list', $parameters);
        $debtor     = new self();

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }
        $hit = false;
        if (isset($response['debtors'])) {
            foreach ($response['debtors'] as $simpleDebtor) {
                /** @var WeFact_Debtor $fullDebtor */
                $fullDebtor = self::getByCode($simpleDebtor['DebtorCode']);
                if ($fullDebtor->getUsername() == $debtorLogin) {
                    $hit    = true;
                    $debtor = $fullDebtor;
                }
            }
        }

        if (!$hit) {
            return null;
        }

        return $debtor;
    }

    /**
     * get debtor by EmailAddress
     * beware this is an expensive function
     *
     * @param  string $debtorEmailAddress
     * @return WeFact_Debtor
     */
    public static function getByEmailAddress($debtorEmailAddress)
    {
        $api = new WeFact_Api();
        if ($debtorEmailAddress == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorEmail must be defined!')
            );
        }
        $parameters = array(
            'searchat'  => 'EmailAddress',
            'searchfor' => $debtorEmailAddress,
        );
        $response   = $api->sendRequest('debtor', 'list', $parameters);
        $debtor     = new self();

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }
        $hit = false;
        if (isset($response['debtors'])) {
            foreach ($response['debtors'] as $simpleDebtor) {
                /** @var WeFact_Debtor $fullDebtor */
                $fullDebtor = self::getByCode($simpleDebtor['DebtorCode']);
                if ($fullDebtor->getEmailAddress() == $debtorEmailAddress) {
                    $hit    = true;
                    $debtor = $fullDebtor;
                }
            }
        }

        if (!$hit) {
            return null;
        }

        return $debtor;
    }

    /**
     * Check login credentials and get a Debtor on success
     *
     * @param string $username DebtorCode
     * @param string $password
     * @throws Exception on fail
     * @return WeFact_Debtor
     */
    public static function checkLogin($username, $password)
    {
        $api = new WeFact_Api();
        if ($username == '') {
            throw new \InvalidArgumentException(
                sprintf('Username must be defined!')
            );
        }
        if ($password == '') {
            throw new \InvalidArgumentException(
                sprintf('Password must be defined!')
            );
        }
        $parameters = array(
            'Username' => $username,
            'Password' => $password,
        );
        $response   = $api->sendRequest('debtor', 'checklogin', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        $debtor = new self();

        if (isset($response['debtor'])) {
            foreach ($response['debtor'] as $field => $value) {
                $debtor->$field = $value;
            }
        }
        return $debtor;
    }

    /**
     * Specific checks for debtor
     */
    public function checkForErrors()
    {
        if (strlen($this->getUsername()) < 4) {
            throw new Exception("Username[={$this->$this->getUsername()}] is to short");
        }
    }
}
