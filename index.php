<?php
include('config.php');

	if(Painel::logado() == true) {
		$modo = $_SESSION['modo'];
		if ($modo == '0') {
			include('painel/usuario.php');
		}else if ($modo == '1') {
			include('painel/fornecedor.php');
		}
	}

 ?>


