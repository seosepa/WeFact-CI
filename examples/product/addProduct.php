<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Product.php');

$product = new WeFact_Product();

$product
    ->setProductName("Super awesome product")
    ->setProductKeyPhrase("So awesome everyone wants it")
    ->setPriceExcl(13.37)
    ->setTaxPercentage(0);

$result = $product->save();

var_dump($result);
