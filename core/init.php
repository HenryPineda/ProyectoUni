<?php


try {
	session_start();

error_reporting(1);

require 'database/connect.php';

$ConnObj = new Conn();


/*require 'functions/general.php';*/
require 'functions/users.php';

$errors = array();


} catch (Exception $e) {

echo $e->getMessage();
	
}




?>