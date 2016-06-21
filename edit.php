<?php
include("db.php");

/*
 * @category  Database Access
 * @package   MysqliDb
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://github.com/litto/PHP-MYSQLI-Framework/ 
 * @version   2.0-master
 */

if(isset($_POST['submit'])){
    $id=$_POST['id']; 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	    $key    =   rand(0,9999).rand(111,999);
        $crypt  = new Crypt; 
        $crypt->crypt_key($key);                                        // Get encryption key
        $password = $crypt->encrypt($password);

	    if(trim($name)=='' || trim($password)=='' || trim($email)==''){
        $message    =   new Message('Enter mandatory fields','error');
        $message->setMessage();
        
    }else{

    	        $absDirName =   dirname(__FILE__).'/uploads';
            $relDirName =   '../uploads';
        
            $uploader   =   new Uploader($absDirName.'/');
            $uploader->setExtensions(array('jpg','jpeg','png','gif'));
            $uploader->setSequence('banner');
            $uploader->setMaxSize(10);
            if($uploader->uploadFile("txtFile")){

                 $image     =   $uploader->getUploadName(); 
$data=array('image'=>$image);
$obj = employee::byId($id);
$obj->save($data);
                
            } 


$data=array('fullname'=>$name,'email'=>$email,'password'=>$password,'key'=>$key);
$obj = employee::byId($id);
$obj->save($data);

header("Location:index.php");
exit;

    }
}
$id=$_GET['id'];
// $db->where ("id", $id);
// $record = $db->getOne("employee");

 $ct=employee::byId($id);
 $record=$ct->data;

$key    =   $record['key'];
$crypt  = new Crypt; 
$crypt->crypt_key($key);                                        // Get encryption key
$password = $crypt->decrypt($record['password']);

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
<form method="post" enctype="multipart/form-data" action="edit.php?id=<?php echo $_GET['id'];?>">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
<table border="1" cellpadding='1' cellspacing='1' width="100%">
<tr><td></td><td><img src="uploads/<?php echo $record['image']; ?>" width="100px" height="100px"></td></tr>
<tr><td>Full Name:</td><td>  <input type="text" name="name" value="<?php echo $record['fullname']; ?>"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" value="<?php echo $record['email']; ?>"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" value="<?php echo $password; ?>"></td></tr>
<tr><td>Image:</td><td><input type="file" name="txtFile"></td></tr>
<tr><td></td><td><input type="submit" name="submit"/> </td></tr>
</table>
</form>

</body>
</html>
