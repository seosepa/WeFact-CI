<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Hosting.php');

$hostings = WeFact_Hosting::findByDebtorCode('DB0003');
$hosting = $hostings[0];
$hosting->sendAccountInfoByEmail();

var_dump($success);
