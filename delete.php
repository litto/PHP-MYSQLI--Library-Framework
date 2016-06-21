<?php
include("db.php");
$id=$_GET['id'];
$user = employee::byId($id);
$user->delete();
header("Location:index.php");
exit;

?>