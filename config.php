
<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	date_default_timezone_set('America/Sao_Paulo');
	define('INCLUDE_PATH','http://localhost/projetos-go6/chico-resolve/'); 
	define('INCLUDE_PATH_PAINEL','http://localhost/projetos-go6/chico-resolve/painel/');
	define('BASE_DIR', __DIR__);
	$autoload = function($class){
		if ($class == 'Email') {
			require_once('classes/phpmailer/PHPMailerAutoload.php');
		}

		include('classes/'.$class.'.php');
	
	};
	spl_autoload_register($autoload);

	//Carregamento da Página
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	if(file_exists($url.'.php')){
		if (Painel::logado() !=true) {
			include($url.'.php');
		}
		
	}else{
		//Pagina não Existe
		//include('404.php');
	}

	//Conectar com o banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','chico-resolve');
	
 ?>