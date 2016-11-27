<?php

/**
 * Class WeFact_Ssl
 */
class WeFact_Ssl extends WeFact_Model
{
    /**
     * @var string $CommonName
     */
    protected $CommonName = '';

    /**
     * @var int $Debtor
     */
    protected $Debtor = '';

    /**
     * @var string $DebtorCode
     */
    protected $DebtorCode = '';

    /**
     * @var int $Registrar
     */
    protected $Registrar = 0;

    /**
     * @var int $SSLTypeID
     */
    protected $SSLTypeID = 0;

    /**
     * @var int $ownerHandle
     */
    protected $ownerHandle = 0;

    /**
     * @var int $adminHandle
     */
    protected $adminHandle = 0;

    /**
     * @var int $techHandle
     */
    protected $techHandle = 0;

    /**
     * domain|extended|organization
     *
     * @var string $Type
     */
    protected $Type = '';

    /**
     * yes|no
     *
     * @var string $Wildcard
     */
    protected $Wildcard = '';

    /**
     * yes|no
     *
     * @var string $MultiDomain
     */
    protected $MultiDomain = '';

    /**
     * @var array $MultiDomainRecords
     */
    protected $MultiDomainRecords = array();

    /**
     * @var string $ApproverEmail
     */
    protected $ApproverEmail= '';

    /**
     * @var string $CSR
     */
    protected $CSR = '';

    /**
     * linux|windows (default linux)
     *
     * @var string $ServerSoftware
     */
    protected $ServerSoftware = '';

    /**
     * @var int $Period in years
     */
    protected $Period = 0;

    /**
     * @var string $RequestDate 2016-01-04
     */
    protected $RequestDate = 0;

    /**
     * @var string $RenewDate 2017-01-03
     */
    protected $RenewDate = 0;

    /**
     * @var int $RegistrarReference
     */
    protected $RegistrarReference = 0;

    /**
     * @var string $Comment
     */
    protected $Comment = '';

    /**
     * inorder|waiting|inrequest|install|active|expired|uninstalled|error|removed
     *
     * @var string $Status
     */
    protected $Status = '';

    /**
     * @var string $Created
     */
    protected $Created = '';

    /**
     * @var string $Modified
     */
    protected $Modified = '';

    /**
     * yes|no
     *
     * @var string $HasSubscription
     */
    protected $HasSubscription = '';

    /**
     * @var array $Subscription
     */
    protected $Subscription= array();

    /**
     * @var array $SSLProductInfo
     */
    protected $SSLProductInfo= array();

    /**
     * @var array $RegistrarInfo
     */
    protected $RegistrarInfo = array();

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->CommonName;
    }

    /**
     * @param string $CommonName
     */
    public function setCommonName($CommonName)
    {
        $this->CommonName = $CommonName;
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
     * @return int
     */
    public function getSSLTypeID()
    {
        return $this->SSLTypeID;
    }

    /**
     * @param int $SSLTypeID
     */
    public function setSSLTypeID($SSLTypeID)
    {
        $this->SSLTypeID = $SSLTypeID;
    }

    /**
     * @return int
     */
    public function getOwnerHandleId()
    {
        return $this->ownerHandle;
    }

    /**
     * @param int $OwnerHandle
     */
    public function setOwnerHandleId($OwnerHandle)
    {
        $this->ownerHandle = $OwnerHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getOwnerHandle()
    {
        return WeFact_Handle::getByIdentifier($this->ownerHandle);
    }

    /**
     * @param WeFact_Handle $OwnerHandle
     */
    public function setOwnerHandle(WeFact_Handle $OwnerHandle)
    {
        $this->ownerHandle = $OwnerHandle->getIdentifier();
    }

    /**
     * @return int
     */
    public function getAdminHandleId()
    {
        return $this->adminHandle;
    }

    /**
     * @param int $AdminHandle
     */
    public function setAdminHandleId($AdminHandle)
    {
        $this->adminHandle = $AdminHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getAdminHandle()
    {
        return WeFact_Handle::getByIdentifier($this->adminHandle);
    }

    /**
     * @param WeFact_Handle $AdminHandle
     */
    public function setAdminHandle(WeFact_Handle $AdminHandle)
    {
        $this->adminHandle = $AdminHandle->getIdentifier();
    }

    /**
     * @return int
     */
    public function getTechHandleId()
    {
        return $this->techHandle;
    }

    /**
     * @param int $TechHandle
     */
    public function setTechHandleId($TechHandle)
    {
        $this->techHandle = $TechHandle;
    }

    /**
     * @return WeFact_Handle
     */
    public function getTechHandle()
    {
        return WeFact_Handle::getByIdentifier($this->techHandle);
    }

    /**
     * @param WeFact_Handle $TechHandle
     */
    public function setTechHandle(WeFact_Handle $TechHandle)
    {
        $this->techHandle = $TechHandle->getIdentifier();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getWildcard()
    {
        return $this->Wildcard;
    }

    /**
     * @param string $Wildcard
     */
    public function setWildcard($Wildcard)
    {
        $this->Wildcard = $Wildcard;
    }

    /**
     * @return string
     */
    public function getMultiDomain()
    {
        return $this->MultiDomain;
    }

    /**
     * @param string $MultiDomain
     */
    public function setMultiDomain($MultiDomain)
    {
        $this->MultiDomain = $MultiDomain;
    }

    /**
     * @return array
     */
    public function getMultiDomainRecords()
    {
        return $this->MultiDomainRecords;
    }

    /**
     * @param array $MultiDomainRecords
     */
    public function setMultiDomainRecords($MultiDomainRecords)
    {
        $this->MultiDomainRecords = $MultiDomainRecords;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
        return $this->ApproverEmail;
    }

    /**
     * @param string $ApproverEmail
     */
    public function setApproverEmail($ApproverEmail)
    {
        $this->ApproverEmail = $ApproverEmail;
    }

    /**
     * @return string
     */
    public function getCSR()
    {
        return $this->CSR;
    }

    /**
     * @param string $CSR
     */
    public function setCSR($CSR)
    {
        $this->CSR = $CSR;
    }

    /**
     * @return string
     */
    public function getServerSoftware()
    {
        return $this->ServerSoftware;
    }

    /**
     * @param string $ServerSoftware
     */
    public function setServerSoftware($ServerSoftware)
    {
        $this->ServerSoftware = $ServerSoftware;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
        return $this->Period;
    }

    /**
     * @param int $Period
     */
    public function setPeriod($Period)
    {
        $this->Period = $Period;
    }

    /**
     * @return string
     */
    public function getRequestDate()
    {
        return $this->RequestDate;
    }

    /**
     * @param string $RequestDate
     */
    public function setRequestDate($RequestDate)
    {
        $this->RequestDate = $RequestDate;
    }

    /**
     * @return string
     */
    public function getRenewDate()
    {
        return $this->RenewDate;
    }

    /**
     * @param string $RenewDate
     */
    public function setRenewDate($RenewDate)
    {
        $this->RenewDate = $RenewDate;
    }

    /**
     * @return int
     */
    public function getRegistrarReference()
    {
        return $this->RegistrarReference;
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
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->Created;
    }

    /**
     * @return string
     */
    public function getModified()
    {
        return $this->Modified;
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
    public function getSSLProductInfo()
    {
        return $this->SSLProductInfo;
    }

    /**
     * @return array
     */
    public function getRegistrarInfo()
    {
        return $this->RegistrarInfo;
    }

    /**
     * Override this function, sslObject doesn't have default uniquecode
     *
     * @return string
     */
    public static function getModelCodeName()
    {
        return 'CommonName';
    }

    /**
     * ListAll overwritten
     * WeFact decided multiple ssl objects is not consistently called ssls, like domains etc.
     *
     * @return WeFact_Ssl[]
     */
    public static function listAll()
    {
        $api        = new WeFact_Api();
        $parameters = array();
        $response   = $api->sendRequest(self::getModelName(), 'list', $parameters);
        $result     = array();
        $modelNames = self::getModelName();
        if (isset($response[$modelNames])) {
            foreach ($response[$modelNames] as $objectArray) {
                $result[] = self::arrayToObject($objectArray);
            }
        }
        return $result;
    }

    /**
     * @param string $debtorCode
     * @throws Exception
     * @return WeFact_Ssl[]
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

        if (isset($response['ssl'])) {
            foreach ($response['ssl'] as $sslArray) {
                $ssl = new self();
                foreach ($sslArray as $field => $value) {
                    $ssl->$field = $value;
                }
                $result[] = $ssl;
            }
        }
        return $result;
    }

    /**
     * @param string $commonName
     * @return WeFact_Ssl
     */
    public static function getByCommonName($commonName)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'CommonName' => $commonName,
        );

        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);
        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * @param string $date 2016-09-01T12:00:00+02:00 <optional>
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

        $response   = self::sendRequest(self::getModelName(), 'terminate', $parameters);

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
     * @return WeFact_Ssl
     */
    public function request()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'request', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }

    /**
     * Give notice the certificate has been installed, this will put the certificate to status "Active" in WeFact
     *
     * @throws Exception
     * @return WeFact_Ssl
     */
    public function installed()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'request', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }

    /**
     * Download base64encoded SSL cert
     *
     * @throws Exception
     * @return string base64encoded SSL cert
     */
    public function download()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'request', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        if (isset($response['ssl']['Base64']) == false) {
            return false;
        }
        return $response['ssl']['Base64'];
    }

    /**
     * Reissue this SSL Certificate
     *
     * @throws Exception
     * @return WeFact_Ssl
     */
    public function reissue()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'reissue', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }

    /**
     * should be getStatus, but that method is already in use as property of this object
     *
     * @throws Exception
     * @return WeFact_Ssl
     */
    public function fetchStatus()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'getstatus', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }

    /**
     * @throws Exception
     * @return Bool
     */
    public function resendApproverMail()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'resendapprovermail', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Revoke this SSL Certificate
     *
     * @throws Exception
     * @return WeFact_Ssl
     */
    public function revoke()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'revoke', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }

    /**
     * Set this SSL Certificate to status "uninstalled", so it will disappear from the expired list
     *
     * @throws Exception
     * @return WeFact_Ssl
     */
    public function uninstalled()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'uninstalled', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return $this->responseToObject($response);
    }
}
