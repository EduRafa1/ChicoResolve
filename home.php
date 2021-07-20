

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="<?php echo INCLUDE_PATH;?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH;?>css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH;?>css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/inicio.css">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
</head>
<?php 
	
	

 ?>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo INCLUDE_PATH ?>index"><span>CHICO</span>RESOLVE</a>
				</a>
			</div>
		</div>
	</nav>


	<div class="home">
		<div class="section-one">
			<div class="text">
				<h2>Chico Resolve</h2>
				<p>Mais agilidade na comunicação entre fornecedores e Clientes</p>

				<h4>O que é o Chico Resolve?</h4>
				<p>Com o Chico Resolve você consegue consultar valores dos materiais que está precisando com vários
					fornecedores diferentes de maneira rápida e facil. <br> Faça seu cadastro clicando no botão abaixo e
					aproveite.</p>
				
				
			

					<a href="<?php echo INCLUDE_PATH ?>cadastro"><button id="btn-cadastro">CADASTRE-SE</button></a>
					<a href="<?php echo INCLUDE_PATH_PAINEL ?>login"><button id="btn-login">LOGIN</button></a>
				
			
			
			</div>
			<img id="imageone" src="<?php echo INCLUDE_PATH ?>images/Chico.png" alt="">
			<img id="image-mobile" src="<?php echo INCLUDE_PATH ?>images/chico-mobile.png" alt="">
		</div>
	</div>

	<footer id="rodape">Corpyright 2021 | Desenvolvido por <a href="https://go6.com.br">GO6</a></footer>
</body>

</html>