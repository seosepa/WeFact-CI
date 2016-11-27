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
     * @var string $DNS1IP
     */
    protected $DNS1IP = '';

    /**
     * @var string $DNS2IP
     */
    protected $DNS2IP = '';

    /**
     * @var string $DNS3IP
     */
    protected $DNS3IP = '';

    /**
     * @var int $DNSTemplate
     */
    protected $DNSTemplate = 0;

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
     * on|off
     *
     * @var string $DomainAutoRenew
     */
    protected $DomainAutoRenew = '';

    /**
     * @var string $Comment
     */
    protected $Comment = '';

    /**
     * @var array $RegistrarInfo
     */
    protected $RegistrarInfo = array();

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
     * @var array $Subscription
     */
    protected $Subscription = array();

    /**
     * @var array $NameserversManager
     */
    protected $NameserversManager = array();


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
     * @return string
     */
    public function getDNS1IP()
    {
        return $this->DNS1IP;
    }

    /**
     * @param string $DNS1IP
     */
    public function setDNS1IP($DNS1IP)
    {
        $this->DNS1IP = $DNS1IP;
    }

    /**
     * @return string
     */
    public function getDNS2IP()
    {
        return $this->DNS2IP;
    }

    /**
     * @param string $DNS2IP
     */
    public function setDNS2IP($DNS2IP)
    {
        $this->DNS2IP = $DNS2IP;
    }

    /**
     * @return string
     */
    public function getDNS3IP()
    {
        return $this->DNS3IP;
    }

    /**
     * @param string $DNS3IP
     */
    public function setDNS3IP($DNS3IP)
    {
        $this->DNS3IP = $DNS3IP;
    }

    /**
     * @return int
     */
    public function getDNSTemplate()
    {
        return $this->DNSTemplate;
    }

    /**
     * @param int $DNSTemplate
     */
    public function setDNSTemplate($DNSTemplate)
    {
        $this->DNSTemplate = $DNSTemplate;
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
    public function getDomainAutoRenew()
    {
        return $this->DomainAutoRenew;
    }

    /**
     * @param string $DomainAutoRenew
     */
    public function setDomainAutoRenew($DomainAutoRenew)
    {
        $this->DomainAutoRenew = $DomainAutoRenew;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
    }

    /**
     * @return array
     */
    public function getRegistrarInfo()
    {
        return $this->RegistrarInfo;
    }

    /**
     * @return string
     */
    public function getDirectServerCreation()
    {
        return $this->DirectServerCreation;
    }

    /**
     * yes|no
     *
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
     * @return array
     */
    public function getNameserversManager()
    {
        return $this->NameserversManager;
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
     * @param string $date   2016-09-01 <optional>
     * @param string $reason <optional>
     * @throws Exception
     * @return bool
     */
    public function terminate($date = '', $reason = '')
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        if ($date != '') {
            $parameters['Date'] = $date;
        }
        if ($reason != '') {
            $parameters['Reason'] = $reason;
        }

        $response = self::sendRequest(self::getModelName(), 'terminate', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Also set the authKey in object
     *
     * @throws Exception
     * @return string
     */
    public function getToken()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        $response = self::sendRequest(self::getModelName(), 'gettoken', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        if (isset($response['domain']['AuthKey']) == false) {
            return false;
        }
        $this->setAuthKey($response['domain']['AuthKey']);
        return $response['domain']['AuthKey'];
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function lock()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        $response = self::sendRequest(self::getModelName(), 'lock', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * @throws Exception
     * @return bool
     */
    public function unlock()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        $response = self::sendRequest(self::getModelName(), 'unlock', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Change the nameservers of this domain
     *
     * @param string $dns1
     * @param string $dns2
     * @param string $dns3 <optional>
     * @param string $dns1Ip <optional>
     * @param string $dns2Ip <optional>
     * @param string $dns3Ip <optional>
     * @param int    $dnsTemplate <optional>
     * @throws Exception
     * @return bool
     */
    public function changeNameserver(
        $dns1,
        $dns2,
        $dns3 = '',
        $dns1Ip = '',
        $dns2Ip = '',
        $dns3Ip = '',
        $dnsTemplate = 0
    ) {
        $identifier = $this->getIdentifier();
        $dnsParams  = array(
            'Identifier' => $identifier,
            'DNS1'       => $dns1,
            'DNS2'       => $dns2,
        );

        if ($dns3 != '') {
            $dnsParams['DNS3'] = $dns3;
        }
        if ($dns1Ip != '') {
            $dnsParams['DNS1IP'] = $dns1Ip;
        }
        if ($dns2Ip != '') {
            $dnsParams['DNS2IP'] = $dns2Ip;
        }
        if ($dns3Ip != '') {
            $dnsParams['DNS3IP'] = $dns3Ip;
        }
        if ($dnsTemplate != '') {
            $dnsParams['DNSTemplate'] = $dnsTemplate;
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

    /**
     * Choose if costs should be charged to debtor yes|no. when no input given, the default for TLD applies
     *
     * @param string $chargeCosts
     * @throws Exception
     * @return bool
     */
    public function syncWhois($chargeCosts = '')
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        if ($chargeCosts != '') {
            $parameters['ChargeCosts'] = $chargeCosts;
        }

        $response = self::sendRequest(self::getModelName(), 'syncwhois', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Choose if costs should be charged to debtor yes|no. when no input given, the default for TLD applies
     *
     * @param string $chargeCosts
     * @throws Exception
     * @return bool
     */
    public function editWhois($chargeCosts = '')
    {
        throw new Exception("Not yet implemented");
    }

    /**
     * transfer a domain, uses authkey in object
     *
     * @throws Exception
     * @return bool
     */
    public function transfer()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        if ($this->getAuthKey() != '') {
            $parameters['AuthKey'] = $this->getAuthKey();
        }

        $response = self::sendRequest(self::getModelName(), 'transfer', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Register this domain
     *
     * @throws Exception
     * @return bool
     */
    public function register()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );

        if ($this->getAuthKey() != '') {
            $parameters['AuthKey'] = $this->getAuthKey();
        }

        $response = self::sendRequest(self::getModelName(), 'register', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * @throws Exception
     * @return array
     */
    public function listdnstemplates()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'listdnstemplates', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        if (isset($response['dnstemplates']) == false) {
            return false;
        }
        return $response['dnstemplates'];
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
     * @throws Exception
     */
    public function getdnszone()
    {
        throw new Exception("Not yet implemented");
    }

    /**
     * @throws Exception
     */
    public function editdnszone()
    {
        throw new Exception("Not yet implemented");
    }

}
