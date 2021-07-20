<?php 

	class Painel{

		public static function logado(){
			return isset($_SESSION['login']) ? true : false ;
		}

		public static function sair(){
			session_destroy();
			header('Location: '.INCLUDE_PATH);
		}

		public static function alert($tipo,$mensagem){
			if ($tipo == 'sucesso') {
			 	echo "<div class='box-alert sucesso'><i class='fas fa-check'></i> $mensagem</div>";
			 }else if ($tipo == 'erro') {
			 	echo "<div class='box-alert erro'><i class='fas fa-times'></i> $mensagem</div>";
			 }
		}
		public static function alertPainel($tipo,$mensagem){
			if ($tipo == 'sucesso') {
			 	echo "<div class='box-alert-Painel sucesso'><i class='fas fa-check'></i> $mensagem</div>";
			 }else if ($tipo == 'erro') {
			 	echo "<div class='box-alert-Painel erro'><i class='fas fa-times'></i> $mensagem</div>";
			 }
		}
		public static function verificaPermissao($permissao){
			if ($_SESSION['permissao'] == $permissao) {
				return;
			}else{
				echo "style='display:none'";
			}
		}
		public static function verificaAprovacao($permissao){
			if ($_SESSION['aprovado'] == $permissao) {
				return;
			}else{

				include('painel/aguardando-aprovar.php');
				die();
			}
		}
		public static function redirect($url){
			echo '<script>Location.href="'.$url.'"</script>';
			echo "<script>document.location.reload(true);</script>";
			die();
		}

		
		

	}

 ?>