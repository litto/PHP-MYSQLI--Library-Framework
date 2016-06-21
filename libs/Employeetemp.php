<?php
class Employeetemp{

 function listall($inputs){
global $db;
$keyword=$inputs['keyword'];
$start=$inputs['start'];
$limit=$inputs['limit'];
$qry='';
if($keyword!=''){
	$qry.="AND LOWER(`fullname`) LIKE '%$keyword%' OR LOWER(`email`) LIKE '%$keyword%'";
}

$query="SELECT * FROM `cms_employee` WHERE `id`!=''";
$query.=$qry;
$rec=$db->rawQuery($query);
$this->totalRecords	=count($rec);

$query.=' LIMIT '.$start.','.$limit;
$records=$db->rawQuery($query);
return $records;

 } 


}	

	?>