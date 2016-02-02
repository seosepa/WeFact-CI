<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Creditor.php');


$result = WeFact_Creditor::listAll();

var_dump($result);
