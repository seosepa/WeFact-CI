<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Creditor.php');

$creditor = WeFact_Creditor::getByCode("CD0001");

/* 
For every setter look into phpWeFact\WeFact_Creditor()
or https://www.wefact.nl/wefact-standard/apiv2/crediteuren/add
*/
$creditor
    ->setSex('f')
    ->setCompanyName('Changed');

$result = $creditor->save();

var_dump($result);
