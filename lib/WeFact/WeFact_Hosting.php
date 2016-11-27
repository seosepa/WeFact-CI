<?php

/**
 * Class WeFact_Hosting
 */
class WeFact_Hosting extends WeFact_Model
{
    /**
     * @var string $Username
     */
    protected $Username = '';

    /**
     * @var int $Debtor
     */
    protected $Debtor = 0;

    /**
     * @var string $DebtorCode
     */
    protected $DebtorCode = '';

    /**
     * @var string $Domain
     */
    protected $Domain = '';

    /**
     * @var int $Server
     */
    protected $Server = 0;

    /**
     * @var int $Package
     */
    protected $Package = 0;

    /**
     * @var string $PackageName
     */
    protected $PackageName = '';

    /**
     * @var int $Status
     */
    protected $Status = 0;

    /**
     * @var array $Subscription
     */
    protected $Subscription = array();

    /**
     * @var array $PackageInfo
     */
    protected $PackageInfo = array();

    /**
     * @var array $ServerInfo
     */
    protected $ServerInfo = array();

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
     * @return int
     */
    public function getPackage()
    {
        return $this->Package;
    }

    /**
     * @param int $Package
     */
    public function setPackage($Package)
    {
        $this->Package = $Package;
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
        return $this->PackageName;
    }

    /**
     * @param string $PackageName
     */
    public function setPackageName($PackageName)
    {
        $this->PackageName = $PackageName;
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
     * @return array
     */
    public function getServerInfo()
    {
        return $this->ServerInfo;
    }

    /**
     * @param array $ServerInfo
     */
    public function setServerInfo($ServerInfo)
    {
        $this->ServerInfo = $ServerInfo;
    }

    /**
     * Override this function, hostingObject doesn't have default uniquecode
     *
     * @return string
     */
    public static function getModelCodeName()
    {
        return 'Username';
    }

    /**
     * ListAll overwritten
     * WeFact decided multiple hosting object is not consistently called hostings, like domains etc.
     *
     * @return WeFact_Hosting[]
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
     * override default, because we want to know to password
     *
     * @param  int $objectCode
     * @return WeFact_Hosting
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
            'GetPassword'            => 'yes', // we want the password!
        );
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * @param  string $username
     * @return WeFact_Hosting
     */
    public static function getByUsername($username)
    {
        $api = new WeFact_Api();
        if ($username == '') {
            throw new \InvalidArgumentException(
                sprintf('ObjectCode must be defined!')
            );
        }
        $parameters = array(
            'username'    => $username,
            'GetPassword' => 'yes', // we want the password!
        );
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * @param string $debtorCode
     * @throws Exception
     * @return WeFact_Hosting[]
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

        if (isset($response['hosting'])) {
            foreach ($response['hosting'] as $hostingArray) {
                $hosting = new self();
                foreach ($hostingArray as $field => $value) {
                    $hosting->$field = $value;
                }
                $result[] = $hosting;
            }
        }
        return $result;
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
     * @return bool
     */
    public function suspend()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'suspend', $parameters);

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
    public function unsuspend()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'unsuspend', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Creates hosting account on the server
     * Sends email to customer with credentials
     *
     * @throws Exception
     * @return bool
     */
    public function create()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'create', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Removed hosting user from server
     *
     * @throws Exception
     * @return bool
     */
    public function removeFromServer()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'removefromserver', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        return true;
    }

    /**
     * Removed hosting user from server
     *
     * @throws Exception
     * @return array|bool list of domains
     */
    public function getDomainList()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = self::sendRequest(self::getModelName(), 'getdomainlist', $parameters);

        if (isset($response['status']) == false) {
            return false;
        }
        if ($response['status'] != 'success') {
            return false;
        }
        if (isset($response['hosting']['domainlist']) == false) {
            return false;
        }
        return $response['hosting']['domainlist'];
    }

    /**
     * @return bool
     */
    public function sendAccountInfoByEmail()
    {
        $parameters = array(
            'Identifier' => $this->getIdentifier()
        );
        $response   = self::sendRequest(self::getModelName(), 'sendaccountinfobyemail', $parameters);

        if (isset($response['success']) == false) {
            return false; // Send account info failed
        }
        if (!isset($response['warning'])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @todo
     * @throws Exception
     */
    public function updowngrade()
    {
        throw new Exception('not implemented yet');
    }
}
