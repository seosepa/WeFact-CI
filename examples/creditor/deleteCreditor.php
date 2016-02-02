<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Creditor.php');

$creditor = WeFact_Creditor::getByCode("CD0001");

/*
Removing a creditor can also remove all the CreditInvoices when first parameter is set to true
 */
$result = $creditor->remove(false);

var_dump($result);
