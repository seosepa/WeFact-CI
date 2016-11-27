<?php
/**
 * WeFact_Model.php
 *
 * Abstracted some common logic like ListAll function
 *
 * @author  Stefan Konig <stefan@seosepa.net>
 */

/**
 * Class WeFact_Model
 */
class WeFact_Model extends WeFact_Api
{
    /**
     * Common for all Objects;
     *
     * @var $Identifier int
     */
    protected $Identifier = 0;

    /**
     * @var string $Created
     */
    protected $Created = '';

    /**
     * @var string $Modified
     */
    protected $Modified = '';

    /**
     * The Translations for a object
     *
     * @var array
     */
    protected $Translations = array();

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
    public function getTranslations()
    {
        return $this->Translations;
    }

    /**
     * @return string
     */
    public static function getModelName()
    {
        $calledClass = strtolower(get_called_class());
        return str_replace('wefact_', '', $calledClass);
    }

    /**
     * @return string
     */
    public static function getModelCodeName()
    {
        $modelCodeName = ucfirst(self::getModelName()) . 'Code';
        return $modelCodeName;
    }

    /**
     * Creates a WeFact_Product
     *
     * @return array
     */
    protected function insert()
    {
        $this->checkForErrors();
        $parameters = $this->objectToArray($this); // lame but quick way to recursive cast to array

        return $this->sendRequest($this->getModelName(), 'add', $parameters);
    }

    /**
     * Edit a model
     *
     * @return array
     */
    protected function update()
    {
        $this->checkForErrors();
        $modelCodeName = self::getModelCodeName();

        // WeFact has the tendency to return wrong data, which give errors when you try to save it again.
        // so only save the diffs

        $objectClone = clone $this;
        $objectClone->renew();

        $currentData = $this->objectToArray($this);
        $savedData   = $this->objectToArray($objectClone);

        $parameters                 = self::arrayDiffAssocMulti($currentData, $savedData);
        $parameters[$modelCodeName] = $this->$modelCodeName;

        return $this->sendRequest($this->getModelName(), 'edit', $parameters);
    }

    /**
     * got this from php.net comment
     *
     * @param $object
     * @return mixed
     */
    private function objectToArray($object)
    {
        $arr  = array();
        $_arr = is_object($object) ? (array)$object : $object;
        foreach ($_arr as $key => $val) {
            $val = (is_array($val) || is_object($val)) ? $this->objectToArray($val) : $val;
            $key = trim(str_replace('*', '', $key));
            if ($val != '') {
                $arr[$key] = $val;
            }
        }
        return $arr;
    }

    /**
     * Save a model (insert or update)
     *
     * @throws Exception
     * @return array
     */
    public function save()
    {
        // Check if update or insert
        if ($this->getIdentifier() == '') {
            $response = $this->insert();
        } else {
            $response = $this->update();
        }

        if (!isset($response['status']) || $response['status'] == 'error') {
            $calledClass = get_called_class();
            Throw new Exception("Unable to save {$calledClass} : " . print_r($response['errors'], true));
        }

        // update own model parameters with response from weFact
        if (isset($response[$this->getModelName()])) {
            foreach ($response[$this->getModelName()] as $key => $value) {
                $this->$key = $value;
            }
        }

        return $response;
    }

    /**
     * Delete a model
     *
     * @throws Exception
     * @return array
     */
    public function remove()
    {
        if ($this->getIdentifier() == '') {
            throw new \InvalidArgumentException(
                sprintf('Identifier must be defined!')
            );
        }

        $parameters = array(
            'Identifier' => $this->getIdentifier(),
        );
        $response   = $this->sendRequest($this->getModelName(), 'delete', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            $calledClass = get_called_class();
            Throw new Exception("Unable to remove {$calledClass}: " . print_r($response['errors'], true));
        }

        return $response;
    }


    /**
     * List all ModelObjects
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @return WeFact_Model[]
     */
    public static function listAll()
    {
        $api        = new WeFact_Api();
        $parameters = array();
        $response   = $api->sendRequest(self::getModelName(), 'list', $parameters);
        $result     = array();
        $modelNames = self::getModelName() . 's';
        if (isset($response[$modelNames])) {
            foreach ($response[$modelNames] as $objectArray) {
                $result[] = self::arrayToObject($objectArray);
            }
        }
        return $result;
    }

    /**
     * Search all by string
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @param string $searchString
     * @throws Exception
     * @return WeFact_Model[]
     */
    public static function searchFor($searchString)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'searchfor' => $searchString,
        );
        $response   = $api->sendRequest(self::getModelName(), 'list', $parameters);
        $result     = array();
        $modelNames = self::getModelName() . 's';

        if (isset($response[$modelNames])) {
            foreach ($response[$modelNames] as $objectArray) {
                $result[] = self::arrayToObject($objectArray);
            }
        }
        return $result;
    }


    /**
     * get the Object info by Identifier
     *
     * @param  int $objectIdentifier
     * @return WeFact_Model
     */
    public static function getByIdentifier($objectIdentifier)
    {
        $api = new WeFact_Api();
        if ($objectIdentifier == '') {
            throw new \InvalidArgumentException(
                sprintf('ObjectIdentifier must be defined!')
            );
        }
        $parameters = array('Identifier' => $objectIdentifier);
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * get the Object info by Code
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
        $parameters = array(self::getModelCodeName() => $objectCode);
        $response   = $api->sendRequest(self::getModelName(), 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        return self::responseToObject($response);
    }

    /**
     * Renew the variable information in this object from the WeFactApi
     *
     * @throws Exception
     * @return WeFact_Model
     */
    public function renew()
    {
        $newObject = $this->getByIdentifier($this->getIdentifier());

        if ($newObject == null) {
            $calledClass = get_called_class();
            Throw new Exception("{$calledClass}[Identifier={$this->getIdentifier()}] does not exists in WeFact");
        }

        $newInformation = get_object_vars($newObject);
        foreach ($newInformation as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * to be overwritten by specific models
     */
    public function checkForErrors()
    {

    }

    /**
     * map the response to the proper objects
     */
    protected static function responseToObject($response)
    {
        /** @var WeFact_Model $object */
        $calledClass = get_called_class();
        $object      = new $calledClass;

        if (isset($response[self::getModelName()])) {
            return $object->arrayToObject($response[self::getModelName()]);
        }
        return null;
    }

    /**
     * default mapping array to object.
     * can be overwritten by specific functions in case of objects in objects response.
     * e.g. WeFact_Order has one or more WeFact_OrderLines. which also need to be mapped.
     *
     * @param array $array
     * @return WeFact_Model|null
     */
    protected static function arrayToObject($array)
    {
        /** @var WeFact_Model $calledClass */
        $calledClass = get_called_class();
        $object      = new $calledClass;

        foreach ($array as $field => $value) {
            if ($value != '') {
                $object->$field = $value;
            }
        }

        return $object;
    }

    /**
     * workAround to diff multidimensional arrays
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    protected static function arrayDiffAssocMulti($array1, $array2)
    {
        foreach ($array1 as $key => $value) {
            if (is_array($value)) {
                $array1[$key] = serialize($value);
            }
        }
        foreach ($array2 as $key => $value) {
            if (is_array($value)) {
                $array2[$key] = serialize($value);
            }
        }

        $resultArray = array_diff_assoc($array1, $array2);


        foreach ($resultArray as $key => $value) {
            if (@unserialize($value) !== false) {
                $resultArray[$key] = unserialize($value);
            }
        }

        return $resultArray;
    }
}
