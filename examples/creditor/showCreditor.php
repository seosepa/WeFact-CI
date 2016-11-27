<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Creditor.php');


$result = WeFact_Creditor::getByCode("CD0020");

var_dump($result);
