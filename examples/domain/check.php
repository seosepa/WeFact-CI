<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Domain.php');

// Available True or False
$available = WeFact_Domain::check('seosepa', 'net');

var_dump($available);
