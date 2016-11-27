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
     * @var string $Created <mysqldatetime>
     */
    protected $Created = '';

    /**
     * @var string $Modified <mysqldatetime>
     */
    protected $Modified = '';

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
        $response   = $api->sendRequest('hosting', 'list', $parameters);
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
     * @return bool|null
     */
    public function sendAccountInfoByEmail()
    {
        $parameters = array(
            'identifier' => $this->getIdentifier()
        );
        $response = self::sendRequest('hosting', 'sendaccountinfobyemail', $parameters);

        if (isset($response['success']) == false) {
            return null; // Send account info failed
        }
        if (!isset($response['warning'])) {
            return true;
        } else {
            return false;
        }
    }
}
