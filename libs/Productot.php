<?php
class Productot{

 function getmyall($customer,$userid){
global $db;
$query="SELECT * FROM `t_products` WHERE `customerId`='$customer' AND `userId`='$userid'";
$product2=$db->rawQuery($query);
return $product2;

 } 


}	

	?>