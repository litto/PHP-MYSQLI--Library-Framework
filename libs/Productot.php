<?php
class Productot{
/*
 * @category  Database Access
 * @package   MysqliDb
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://github.com/litto/PHP-MYSQLI-Framework/ 
 * @version   2.0-master
 */

 function getmyall($customer,$userid){
global $db;
$query="SELECT * FROM `t_products` WHERE `customerId`='$customer' AND `userId`='$userid'";
$product2=$db->rawQuery($query);
return $product2;

 } 


}	

	?>
