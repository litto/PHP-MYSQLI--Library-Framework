<?php
include("db.php");
/* * @category  Database Access
 * @package   MysqliDb
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://github.com/litto/PHP-MYSQLI-Framework/ 
 * @version   2.0-master
 */
$keyword='';
if(isset($_GET['keyword'])){
	$keyword=$_GET['keyword'];
}else if(isset($_POST['keyword'])){
$keyword=$_POST['keyword'];
}

$start  =   $_GET['start'];
$limit  =   20;
if(empty($start)){
    $start  =   0;
}

$inputs=array('start'=>$start,'limit'=>$limit,'keyword'=>$keyword);

$obj=new Employeetemp();
$records=$obj->listall($inputs);
 $totalRecords  = $obj->totalRecords;
$cnt    =   $totalRecords/$limit;
$cnt    =   ceil($cnt);
$current    =   ($start/$limit)+1;  
 $count=round($totalRecords/$limit);
$pagenum=$start;
$pg =   new Pages();
$pages  =   $pg->getPages($current,$cnt,$limit);                    
$first  =   $pg->getFirst($cnt,$limit);
$last   =   $pg->getLast($cnt,$limit);
$prev   =   $pg->getPrev($current,$cnt,$limit);
$next   =   $pg->getNext($current,$cnt,$limit);

?>
<html>
<head>
	<title>CRUD FRAMEWORK</title>

</head>
<body>
<div>
<ul>
<li><a href="index.php">List</a></li>
<li><a href="add.php">Create</a></li>
</ul>
</div>
<form method="post" enctype="multipart/form-data" action="index.php">
Keyword search:<input type="text" name="keyword" />
<input type="submit" name="search"/>

</form>
<?php
if(count($records)>0){
?>
<table border="1" cellpadding='1' cellspacing='1' width="100%">
<tr> <td>Sl.No.</td><td>Full Name</td><td>Email</td><td>Password</td><td>Image</td> <td>Action</td> </tr>
<?php  for($i=0;$i<count($records);$i++){
$key    =   $records[$i]['key'];
$crypt  = new Crypt; 
$crypt->crypt_key($key);                                        // Get encryption key
$password = $crypt->decrypt($records[$i]['password']);
 ?>

<tr><td><?php echo $i+1; ?></td> <td><?php echo $records[$i]['fullname']; ?></td><td><?php echo $records[$i]['email']; ?></td><td><?php echo $password; ?></td><td><img src="uploads/<?php echo $records[$i]['image']; ?>" width="50px" height="50px"></td> <td><a href="edit.php?id=<?php echo $records[$i]['id']; ?>">Edit</a>/<a href="delete.php?id=<?php echo $records[$i]['id']; ?>">Delete</a></td> </tr>
<?php } ?>
</table>

<?php }else{ ?>

<p> No records found!!! </p>

	<?php } ?>

</body>
</html>
