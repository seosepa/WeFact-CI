<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$creditInvoice = new WeFact_CreditInvoice();
$invoiceLine   = new WeFact_CreditInvoiceLine();
$invoiceLine2  = new WeFact_CreditInvoiceLine();

$invoiceLine
    ->setNumber('1')
    ->setDescription('An awesome product!')
    ->setPriceExcl('50.13')
    ->setTaxPercentage('21');
$invoiceLine2
    ->setNumber('5')
    ->setDescription('Another awesome product!')
    ->setPriceExcl('10.95')
    ->setTaxPercentage('21');

$creditInvoice
    ->setCreditorCode("CD0020")
    ->addInvoiceLine($invoiceLine)
    ->addInvoiceLine($invoiceLine2);

$result = $creditInvoice->save();

var_dump($result);
