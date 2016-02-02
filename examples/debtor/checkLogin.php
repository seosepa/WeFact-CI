<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Debtor.php');


$result = WeFact_Debtor::checkLogin("DB0003","Password");

var_dump($result);

