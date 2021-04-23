<?php
include_once "abstract/paymentAbstract.php";
include_once "classes/BuyProducts.php";

$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();
