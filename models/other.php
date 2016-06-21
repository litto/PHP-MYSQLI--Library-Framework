<?php
/**
 * To make IDEs autocomplete happy
 *
 * @property int id
 * @property int userid
 * @property int customerId
 * @property string productName
 */
class other extends Mysqlidb{
    protected $dbTable = "";
    protected $primaryKey = "";


    public function getmyall($customer,$userid){

$query="SELECT * FROM `t_products` WHERE `customerId`='$customer' AND `userId`='$userid'";
$product2=$this->rawQuery($query);
return $product2;
    } 


}
?>