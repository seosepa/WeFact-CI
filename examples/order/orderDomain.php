<?php
include_once('../../lib/phpWeFact/WeFact_Api.php');
include_once('../../lib/phpWeFact/WeFact_Model.php');
include_once('../../lib/phpWeFact/WeFact_Domain.php');
include_once('../../lib/phpWeFact/WeFact_Order.php');
include_once('../../lib/phpWeFact/WeFact_OrderLine.php');

$debtorCode = 'DB0003';

$weFactDomain = new WeFact_Domain();
$weFactDomain->setDebtorCode($debtorCode);
$weFactDomain->setDomain('foobar');
$weFactDomain->setTld('pro');
$weFactDomain->setAuthKey(''); // transfer key if any
$weFactDomain->setStatus(-1); // status "in bestelling"
$weFactDomain->save();
$referenceObject = $weFactDomain;

$orderLine = new WeFact_OrderLine();
$orderLine->setProductCode('P001');
$orderLine->setDescription('Domain foobar.pro');
$orderLine->setNumber(1);
$orderLine->addReferencedObjectToOrderLine($weFactDomain);

$weFactOrder = new WeFact_Order();
$weFactOrder->setDebtorCode($debtorCode);
$weFactOrder->addOrderLine($orderLine);
$weFactOrder->save();
