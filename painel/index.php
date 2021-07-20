<?php 
	include('../config.php');

 	if (Painel::logado() == false) {
 		include('login.php');
 	}else{
 		if ($_SESSION['modo'] == 0) {
 			include('usuario.php');
 		}else if($_SESSION['modo'] >= 1){
 			include('fornecedor.php');
 		}
 	}

 	

	
	

 ?>