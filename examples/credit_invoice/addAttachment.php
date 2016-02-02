<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$creditInvoice = WeFact_CreditInvoice::getByCode("CF0009");
$base64  = base64_encode('invalidstringfortest');
$result  = $creditInvoice->addAttachment('test.pdf', $base64);

var_dump($result);
