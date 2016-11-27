<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoiceLine.php');

$creditInvoice = WeFact_CreditInvoice::getByCode("CF0009");

$result = $creditInvoice->markAsPaid();

var_dump($result);
