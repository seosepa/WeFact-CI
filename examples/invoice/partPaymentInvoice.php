<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$invoice = WeFact_Invoice::getByCode("F0001");

$invoice
    ->setAmountPaid(10.50);

$result = $invoice->partPayment();

var_dump($result);
