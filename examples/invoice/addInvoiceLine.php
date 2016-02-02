<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$invoice = WeFact_Invoice::getByCode("F0001");

$invoiceLine = new WeFact_InvoiceLine();

$invoiceLine
    ->setNumber('1')
    ->setDescription('A way more awesome product!')
    ->setPriceExcl('50.13')
    ->setTaxPercentage('21');

$result = $invoice->insertInvoiceLine($invoiceLine);

var_dump($result);
