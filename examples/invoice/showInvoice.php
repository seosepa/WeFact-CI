<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$result = WeFact_Invoice::getByCode("F0001");

var_dump($result);
