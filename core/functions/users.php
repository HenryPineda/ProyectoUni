<?php

/*
function logged(){




if (isset($_SESSION['user_id'])){


	

	return true;

} else{




	return false;
	
}


}
*/

function user_exists($username){


/*$username = sanitize($username);*/


$ConnObj = new Conn();

try {
	$query = $ConnObj->prepare('SELECT username FROM persona WHERE username = :username');


		$query -> bindParam(':username', $username);
		$query->execute();
		$result = $query->fetchAll();

	print_r($result);
		$Array_Leght = count($result);



					if ($Array_Leght > 0){
						 return true;

					 }else {


					 	return false;
					 }

		

} catch (Exception $e) {
	echo $e->getMessage();


	return false;
}
		
		
		}

















function user_active($username){


/*$username = sanitize($username);*/


$ConnObj = new Conn();

try {
	$query = $ConnObj->prepare('SELECT username FROM persona WHERE username = :username and active =1');


		$query -> bindParam(':username', $username);
		$query->execute();
		$result = $query->fetchAll();

	print_r($result);
		$Array_Leght = count($result);



					if ($Array_Leght > 0){
						 return true;

					 }else {


					 	return false;
					 }

		

} catch (Exception $e) {
	echo $e->getMessage();


	return false;
}
		
		}




















function user_id_from_username($username){


$ConnObj = new Conn();

try {
	$query = $ConnObj->prepare('SELECT IdPersona FROM persona WHERE username = :username');


		$query -> bindParam(':username', $username);
		$query->execute();
		$result = $query->fetchAll();

	return $result;

		

} catch (Exception $e) {
	echo $e->getMessage();

}


}
































function login($username, $password){

$user_id = user_id_from_username($username);


$password = $password;


$ConnObj = new Conn();

try {
	$query = $ConnObj->prepare('SELECT username FROM persona WHERE username = :username and password =:password');


		$query -> bindParam(':username', $username);
		$query -> bindParam(':password', $password);
		$query->execute();
		$result = $query->fetchAll();

	print_r($result);
		$Array_Leght = count($result);



					if ($Array_Leght > 0){
						 return $user_id;

					 }else {


					 	return false;
					 }

		

} catch (Exception $e) {
	echo $e->getMessage();


	return false;
}

}


?>