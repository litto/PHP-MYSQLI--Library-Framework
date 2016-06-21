<?php
/*
 * @category  Database Access
 * @package   MysqliDb
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://github.com/litto/PHP-MYSQLI-Framework/ 
 * @version   2.0-master
 */
	
	class Message{

		private $message;
		private $type;		
		
		function __construct($message,$type){
			$this->message	=	$message;
			$this->type			=	$type;
		}
		
		function setMessage(){
			$_SESSION["message"]			=	$this->message;
			$_SESSION["messageType"]	=	$this->type;
			$_SESSION["messageView"]	=	0;
		}
		
		
		function showMessage(){
			$view			=	$_SESSION["messageView"];
			$message	=	$_SESSION["message"];
			$type			=	$_SESSION["messageType"];
			if($view=="0" && !empty($message) && !empty($type)){
				switch($type){
					// case 'error':
					// 	echo '<div class="alert alert-danger">'.$message.'</div>';
					// 	break;
					// case 'message':
					// 	echo '<div class="alert alert-block alert-success">'.$message.'</div>';
					// 	break;
					// case 'warning':
					// 	echo '<div class="alert alert-block alert">'.$message.'</div>';
					// 	break;
					
					// default:
					// 	echo '<div class="alert alert-block alert-success">'.$message.'</div>';
					// 	break;
				}
			}			
			unset($_SESSION["messageView"]);
			unset($_SESSION["message"]);
			unset($_SESSION["messageType"]);
		}
			
		
	}
	
	

?>
