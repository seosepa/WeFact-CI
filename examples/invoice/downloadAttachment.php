<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$invoice = WeFact_Invoice::getByCode("F0001");
$result  = $invoice->downloadAttachment('test.pdf');

var_dump($result);
