<?php

/**
 * Class WeFact_Domain
 */
class WeFact_Domain extends WeFact_Model
{
    /**
     * @var string $Domain
     */
    protected $Domain = '';

    /**
     * @var string $Tld
     */
    protected $Tld = '';

    /**
     * @var int $Debtor
     */
    protected $Debtor = 0;

    /**
     * @var string $DebtorCode
     */
    protected $DebtorCode = '';

    /**
     * @var int $HostingID
     */
    protected $HostingID = 0;

    /**
     * @var int $Status
     */
    protected $Status = 0;

    /**
     * @var array $Subscription
     */
    protected $Subscription = array();

    /**
     * @var string $RegistrationDate Date
     */
    protected $RegistrationDate = '';

    /**
     * @var string $Registrar
     */
    protected $Registrar = '';

    /**
     * @var string $DNS1
     */
    protected $DNS1 = '';

    /**
     * @var string $DNS2
     */
    protected $DNS2 = '';

    /**
     * @var string $DNS3
     */
    protected $DNS3 = '';

    /**
     * @var int $OwnerHandle
     */
    protected $OwnerHandle = 0;

    /**
     * @var int $AdminHandle
     */
    protected $AdminHandle = 0;

    /**
     * @var int $TechHandle
     */
    protected $TechHandle = 0;

    /**
     * @var string $DirectServerCreation ENUM  'yes' of 'no'
     */
    protected $DirectServerCreation = '';

    /**
     * @var string $ExpirationDate Date
     */
    protected $ExpirationDate = '';

    /**
     * @var string $ExpirationDate
     */
    protected $AuthKey = '';

    /**
     * @var string $HasSubscription yes | no
     */
    protected $HasSubscription = '';

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param string $Domain
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;
    }

    /**
     * @return string
     */
    public function getTld()
    {
        return $this->Tld;
    }

    /**
     * @param string $Tld
     */
    public function setTld($Tld)
    {
        $this->Tld = $Tld;
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
     * @return int
     */
    public function getHostingID()
    {
        return $this->HostingID;
    }

    /**
     * @param int $HostingID
     */
    public function setHostingID($HostingID)
    {
        $this->HostingID = $HostingID;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param int $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return array
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }

    /**
     * @param array $Subscription
     */
    public function setSubscription($Subscription)
    {
        $this->Subscription = $Subscription;
    }

    /**
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }

    /**
     * @param string $RegistrationDate
     */
    public function setRegistrationDate($RegistrationDate)
    {
        $this->RegistrationDate = $RegistrationDate;
    }

    /**
     * @return string
     */
    public function getRegistrar()
    {
        return $this->Registrar;
    }

    /**
     * @param string $Registrar
     */
    public function setRegistrar($Registrar)
    {
        $this->Registrar = $Registrar;
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
     * @return int
     */
    public function getOwnerHandleId()
    {
        return $this->OwnerHandle;
    }

    /**
     * @param int $OwnerHandle
     */
    public function setOwnerHandleId($OwnerHandle)
    {
        $this->OwnerHandle = $OwnerHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getOwnerHandle()
    {
        return WeFact_Handle::getByIdentifier($this->OwnerHandle);
    }

    /**
     * @param WeFact_Handle $OwnerHandle
     */
    public function setOwnerHandle(WeFact_Handle $OwnerHandle)
    {
        $this->OwnerHandle = $OwnerHandle->getIdentifier();
    }

    /**
     * @return int
     */
    public function getAdminHandleId()
    {
        return $this->AdminHandle;
    }

    /**
     * @param int $AdminHandle
     */
    public function setAdminHandleId($AdminHandle)
    {
        $this->AdminHandle = $AdminHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getAdminHandle()
    {
        return WeFact_Handle::getByIdentifier($this->AdminHandle);
    }

    /**
     * @param WeFact_Handle $AdminHandle
     */
    public function setAdminHandle(WeFact_Handle $AdminHandle)
    {
        $this->AdminHandle = $AdminHandle->getIdentifier();
    }

    /**
     * @return int
     */
    public function getTechHandleId()
    {
        return $this->TechHandle;
    }

    /**
     * @param int $TechHandle
     */
    public function setTechHandleId($TechHandle)
    {
        $this->TechHandle = $TechHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getTechHandle()
    {
        return WeFact_Handle::getByIdentifier($this->TechHandle);
    }

    /**
     * @param WeFact_Handle $TechHandle
     */
    public function setTechHandle(WeFact_Handle $TechHandle)
    {
        $this->TechHandle = $TechHandle->getIdentifier();
    }

    /**
     * @return string
     */
    public function getDirectServerCreation()
    {
        return $this->DirectServerCreation;
    }

    /**
     * @param string $DirectServerCreation
     */
    public function setDirectServerCreation($DirectServerCreation)
    {
        $this->DirectServerCreation = $DirectServerCreation;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     */
    public function setExpirationDate($ExpirationDate)
    {
        $this->ExpirationDate = $ExpirationDate;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->AuthKey;
    }

    /**
     * @param string $AuthKey
     */
    public function setAuthKey($AuthKey)
    {
        $this->AuthKey = $AuthKey;
    }

    /**
     * @return string
     */
    public function getHasSubscription()
    {
        return $this->HasSubscription;
    }

    /**
     * @param string $HasSubscription
     */
    public function setHasSubscription($HasSubscription)
    {
        $this->HasSubscription = $HasSubscription;
    }

    /**
     * Override this function, domainObject does not have a DomainCode
     *
     * @return string
     */
    public static function getModelCodeName()
    {
        return 'Identifier'; // just use the plain old identifier
    }

    /**
     * @param string $debtorCode
     * @throws Exception
     * @return WeFact_Domain[]
     */
    public static function findByDebtorCode($debtorCode)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'searchat'  => 'DebtorCode',
            'searchfor' => $debtorCode
        );
        $response   = $api->sendRequest(self::getModelName(), 'list', $parameters);
        $result     = array();

        if (isset($response['domains'])) {
            foreach ($response['domains'] as $domainArray) {
                $domain = new self();
                foreach ($domainArray as $field => $value) {
                    $domain->$field = $value;
                }
                $result[] = $domain;
            }
        }
        return $result;
    }

    /**
     * @param string $domain
     * @param string $tld
     * @return WeFact_Domain
     */
    public static function getByDomainTld($domain, $tld)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'Domain' => $domain,
            'Tld'    => $tld
        );
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * Check whether a domainName is available for registration
     * Null when check failed
     *
     * @param string $domain
     * @param string $tld
     * @throws Exception
     * @return bool|null
     */
    public static function check($domain, $tld)
    {
        $domainParams = array(
            'Domain' => $domain,
            'Tld'    => $tld
        );

        $response = self::sendRequest(self::getModelName(), 'check', $domainParams);

        if (isset($response['domains'][0]['Available']) == false) {
            return null; // Domain check failed
        }
        $available = $response['domains'][0]['Available'];
        if ($available == 'yes') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Change the nameservers of this domain
     *
     * @param string $dns1
     * @param string $dns2
     * @param string $dns3 <optional>
     * @return bool
     */
    public function changeNameserver($dns1, $dns2, $dns3 = '')
    {
        $identifier = $this->getIdentifier();
        $dnsParams = array(
            'Identifier'=> $identifier,
            'DNS1'      => $dns1,
            'DNS2'      => $dns2,
        );

        if ($dns3 != '') {
            $dnsParams['DNS3'] = $dns3;
        }

        $response = self::sendRequest(self::getModelName(), 'changenameserver', $dnsParams);

        if (isset($response['success']) == false) {
            return false;
        }
        if (isset($response['warning']) == false) {
            return true;
        }
        return false;
    }

}
