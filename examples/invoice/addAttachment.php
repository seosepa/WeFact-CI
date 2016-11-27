<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$invoice = WeFact_Invoice::getByCode("F0001");
$base64  = base64_encode('invalidstringfortest');
$result  = $invoice->addAttachment('test.pdf', $base64);

var_dump($result);
