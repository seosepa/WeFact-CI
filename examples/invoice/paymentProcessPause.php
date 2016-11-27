<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

/** @var WeFact_Invoice $invoice */
$invoice = WeFact_Invoice::getByCode("F0001");
$result  = $invoice->paymentProcessPause();

var_dump($result);
