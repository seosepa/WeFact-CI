<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Product.php');

$product = WeFact_Product::getByCode("P0007");

$product
    ->setProductKeyPhrase('Let\'s change this up!');

$result = $product->save();

var_dump($result);
