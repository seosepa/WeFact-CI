<?php

/**
 * Class WeFact_Api
 */
class WeFact_Api
{
    /**
     * sendRequest sends the request to the WeFact API
     *
     * @param  string $controller
     * @param  string $action
     * @param  array  $params
     * @throws Exception on Api Error
     * @return array
     */
    protected static function sendRequest($controller, $action, array $params)
    {
        $url    = '';
        $apiKey = '';

        if (is_array($params)) {
            $params['api_key']    = $apiKey;
            $params['controller'] = $controller;
            $params['action']     = $action;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, '10');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        $curlResp  = curl_exec($ch);
        $curlError = curl_error($ch);

        // Throw exception on error
        if ($curlError != '') {
            throw new Exception('WeFact ApiCall went wrong: ' . print_r($curlError,true));
        }

        $result = json_decode($curlResp, true);
        return $result;
    }
}
