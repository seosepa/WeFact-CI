<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Debtor.php');


$result = WeFact_Debtor::getByCode("DB0003");

var_dump($result);

