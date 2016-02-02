<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Product.php');

/**
 * Unfortunately WeFact API doesn't provide all the information foreach object in this call
 * Something you want to keep in mind.
 *
 * call the renew() method to get all the latest information of the object
 */

$result = WeFact_Product::listAll();


var_dump($result);
