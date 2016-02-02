<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$invoiceLine = new WeFact_CreditInvoiceLine();

$invoiceLine
    ->setNumber('1')
    ->setDescription('A way more awesome product!')
    ->setPriceExcl('50.13')
    ->setTaxPercentage('21');

$creditInvoice = WeFact_CreditInvoice::getByCode("CF0009");

$result = $creditInvoice->insertCreditInvoiceLine($invoiceLine);

var_dump($result);
