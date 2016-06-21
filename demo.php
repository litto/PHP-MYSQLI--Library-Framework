<?php
include("db.php");

$obj = new product;
$obj->customerId = 3;
$obj->userId = 3;
$obj->productName = "product20";
$obj->save();
$products = $db->get("products");
print_r($products);

$obd=new Productot();
$customer='3';
$userid='3';
$product2=$obd->getmyall($customer,$userid);

print_r($product2);
?>