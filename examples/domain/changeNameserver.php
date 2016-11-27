<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Domain.php');

$domain = WeFact_Domain::getByDomainTld('seosepa', 'net');
$success = $domain->changeNameserver('ns1.foobar.pro', 'ns2.foobar.pro');

var_dump($success);
