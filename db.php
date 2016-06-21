<?php
ob_start();
require_once("config.php");
error_reporting (E_ALL|E_STRICT);
require_once ("core/MysqliDb.php");
require_once ("core/dbObject.php");
$db = new Mysqlidb($config["databaseHost"],$config["databaseUser"],$config["databasePass"],$config["databaseName"]);
$prefix =$config["databasePrefix"];
$db->setPrefix($prefix);
dbObject::autoload ("models");
require_once("autoload.php");
?>