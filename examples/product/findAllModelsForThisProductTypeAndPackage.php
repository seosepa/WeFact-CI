<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Product.php');

// Get all Hostings/SSLs that use this product

/** @var WeFact_Product $product */
$product = WeFact_Product::getByCode("P007");
$result = $product->findAllModelsForThisProductTypeAndPackage();

var_dump($result);
