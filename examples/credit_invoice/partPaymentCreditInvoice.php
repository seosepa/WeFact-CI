<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$creditInvoice = WeFact_CreditInvoice::getByCode("CF0009");

$creditInvoice->setAmountPaid(50);

$result = $creditInvoice->partPayment();

var_dump($result);
