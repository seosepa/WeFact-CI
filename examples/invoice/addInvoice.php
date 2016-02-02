<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Invoice.php');
include_once('../../lib/phpWeFact/WeFact_InvoiceLine.php');

$invoice = new WeFact_Invoice();

$invoiceLine = new WeFact_InvoiceLine();
$invoiceLine2 = new WeFact_InvoiceLine();

$invoiceLine
    ->setNumber('3')
    ->setDescription('An awesome product!')
    ->setProductCode('P0001');

$invoiceLine2
    ->setNumber('5')
    ->setDescription('Another awesome product!')
    ->setPriceExcl(10.95)
    ->setPeriodicType('period')
    ->setPeriods(3)
    ->setPeriodic('d');

$invoice
    ->setDebtorCode('DB0003')
    ->addInvoiceLine($invoiceLine)
    ->addInvoiceLine($invoiceLine2);

$result = $invoice->save();

var_dump($result);
