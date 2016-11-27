<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Ssl.php');

$ssl = WeFact_Ssl::getByCommonName('foobar.pro');
echo base64_decode($ssl->download());

