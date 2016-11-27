<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Product.php');

$product = WeFact_Product::getByCode("P0007");

$result = $product->remove();

var_dump($result);
