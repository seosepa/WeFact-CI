<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_CreditInvoice.php');

$creditInvoice = WeFact_CreditInvoice::getByCode("CF0001");

$result = $creditInvoice->remove();

var_dump($result);
