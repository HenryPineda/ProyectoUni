

<?php 

 

 

 include 'core/init.php';
 include 'includes/overall/overallHeader.php';



if (empty($_POST) === false) {


								$username = $_POST['username'];
								$password = $_POST['Password'];

								echo $username, ' ', $password;


								if (empty($username) === true || empty($password) === true ){
									$errors[] = 'Necesita introducir el usuario y la contraseña!';


								} else if (user_exists($username) ===false){



									echo "No hemos podido encontrar este usuario. Te has registrado?"; 


									
									/*$errors[] = 'No hemos podido encontrar este usuario. Te has registrado?';*/


								} else if (user_active($username)=== false) {
									echo "Su cuenta no esta activada todavia. Favor activar su cuenta!";
								}else {


									$login = login($username, $password);


									if ($login === false){


										echo "La combinacion de usuario y contraseña es incorrecta!";




									}else {

										$_SESSION['user_id'] = $login;

										header('Location: index.php');

										exit();



									}

						 


								}


							

	}
		
		/*print_r($errors);*/

	



include 'includes/overall/overallFooter.php';



?>


