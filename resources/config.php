<?php
ob_start();
session_start();
//session_destroy();
defined("DS")?null:define("DS",DIRECTORY_SEPARATOR);

defined("TAMPLATE_FRONT")? null:define("TAMPLATE_FRONT",__DIR__.DS."templates/front");

defined("TAMPLATE_BACK")? null:define("TAMPLATE_BACK",__DIR__.DS."templates/back");

defined("DB_HOST")? null:define("DB_HOST","localhost");

defined("DB_USER")? null:define("DB_USER","root");

defined("DB_PASS")? null:define("DB_PASS","");

defined("DB_NAME")? null:define("DB_NAME","ecom_db");

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once("functions.php");
