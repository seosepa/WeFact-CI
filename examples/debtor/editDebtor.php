<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Debtor.php');

/** @var WeFact_Debtor $debtor */
$debtor = WeFact_Debtor::getByCode("DB0003");

$debtor
    ->setSex('f')
    ->setCompanyName('Changed');

$result = $debtor->save();

var_dump($result);
