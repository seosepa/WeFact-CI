<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Creditor.php');

$creditor = new WeFact_Creditor();

$creditor
    ->setSex('m')
    ->setCompanyName('Pannekoek B.V.');

$result = $creditor->save();

var_dump($result);
