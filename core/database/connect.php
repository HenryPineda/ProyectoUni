<?php 

/*$connect_error = 'Lo sentimos, estamos experimentando problemas de conexion!';*/


/**
* 
*/
 class Conn extends PDO
{
	
	function __construct()
	{
		try {
			parent::__construct('mysql:host=127.0.0.1;dbname=proyectowebuni','root', '');

		parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		} catch (Exception $e) {


			echo $e->getMessage();
			
		}

		
	}
}
/*
try {
	


 $handler = new PDO('mysql:host=127.0.0.1;dbname=proyectowebuni','root', ''); /*or die($connect_error);*/
/*
$handler -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




} catch (PDOException $e) {
	echo $e->getMessage();

}

*/


?>