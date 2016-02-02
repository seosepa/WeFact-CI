<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$creditInvoice = new WeFact_CreditInvoice();

$creditInvoice
    ->setCreditInvoiceCode("CF0009")
    ->setDate("2014-07-03");

$result = $creditInvoice->save();

var_dump($result);
