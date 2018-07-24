<?php
	// CONTROL DE INICIO DE SESION
	if( isset( $_POST['user'] ) && isset( $_POST['pass'] ) ){

			$user = $_POST['user'];
			$pass = $_POST['pass'];

			if( $user == 'admin' && $pass == 'admin' ){
				header("Location: ./index_log.php");
			}else if ( $user != 'admin' && $pass != 'admin' ){
				header("Location: ./login.php");
			}
		}

?>