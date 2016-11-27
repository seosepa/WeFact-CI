<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Debtor.php');


$debtor = new WeFact_Debtor();

$debtor
    ->setSex('m')
    ->setCompanyName('Pannekoek B.V.');

$result = $debtor->save();

var_dump($result);
