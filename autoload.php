<?php
*
 * @category  Database Access
 * @package   MysqliDb
 * @author    Litto chacko <littochackomp@gmail.com>
 * @copyright Copyright (c) 2010-2016
 * @link      https://github.com/litto/PHP-MYSQLI-Framework/ 
 * @version   2.0-master
 */
	define("CONST_BASEDIR",dirname(__FILE__));
	define('CONST_LIBRARY_FOLDER',CONST_BASEDIR.'/libs');
	$_SESSION['CONST_BASEDIR']=CONST_BASEDIR;
error_reporting(E_ALL & ~ E_NOTICE);
spl_autoload_register(function ($class_name) {
    include 'libs/'.$class_name . '.php';
});
?>
