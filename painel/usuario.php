<?php  
	if (isset($_GET['sair'])) {
		Painel::sair();
	}
		$modo = $_SESSION['modo'];
	switch ($modo) {
		case 0 :
			$op = 'Usuario';
			break;
		
		case 1 :
			$op = 'Fornecedor';
			break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Solicitar Cotação</title>
	<link href="<?php echo INCLUDE_PATH ?>css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<link href="<?php echo  INCLUDE_PATH?>css/styles.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>fornecedor/css/fornecedor.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo  INCLUDE_PATH ?>css/usuario.css">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" ><span>CHICO</span>RESOLVE</a>
					</a>
						<!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<?php if(isset($_SESSION['img'])) {
					$img = '../uploads/'.$_SESSION['img'];
					
				 ?>
				 <img class='img-perfil' src="<?php echo $img ?>" class="img-responsive" alt="">
			<?php }else{ ?>
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			<?php } ?>
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['nome'] ?></div>
				<p><?php echo $op ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li><a href="<?php echo INCLUDE_PATH_PAINEL?>aprovado-usuario"><i class="fas fa-check-circle"></i> Cotações Aprovadas</a></li>
			<li><a href="<?php echo INCLUDE_PATH_PAINEL?>aprovacao-usuario"><i class="fas fa-hourglass-start"></i> Aprovar Cotação</a></li>
			<li><a href="<?php echo INCLUDE_PATH_PAINEL?>vizualizar-cotacao-usuario"><i class="fas fa-search"></i> Visualizar Cotação</a></li>
			<li class=""><a href="<?php echo INCLUDE_PATH_PAINEL?>cotacao-usuario"><i class="fas fa-dollar-sign">&nbsp;</i> Solicitar Cotação</a></li>
			<li class=""><a href="<?php echo INCLUDE_PATH_PAINEL?>editar-usuario"><i class="fas fa-cog"></i> Editar Conta</a></li>
			<li><a href="<?php echo INCLUDE_PATH?>?sair"><i class="fa fa-power-off">&nbsp;</i> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Cotações</li>
			</ol>
		</div><!--/.row-->
		
		<?php 


		if (isset($_GET['url'])) {
			$url = $_GET['url'];
			
			switch ($url) {
				case 'painel/aprovado-usuario':
					include('aprovado-usuario.php');
					break;
				case 'painel/cotacao-usuario':
					include('cotacao-usuario.php');
					break;
				
				case 'painel/aprovacao-usuario':
					include('aprovacao-usuario.php');
					break;
				case 'painel/vizualizar-cotacao-usuario':
					include('vizualizar-cotacao-usuario.php');
					break;
				case 'painel/editar-usuario':
					include('editar-usuario.php');
					break;
				default:
					include('aprovado-usuario.php');
					break;
					
			}
		}
		 ?>
	  
			
			
			<div class="col-sm-12">
				<p class="back-link">Todos os direitos reservados <a href="https://www.go6.com.br">GO6</a></p>
			</div>

	
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.mask.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/usuario.js"></script>
	<script src="../js/cota.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
	});
};
	</script>
	<script>
		$(function(){
			var ped = 1;
			$('button#add').click(function(){
				ped += 1;
				if (ped <= 10) {
				$('div.pedidos').append('<div class="form-group"> <input type="text" id="quantidade" name="quantidade'+ped+'" placeholder="Quantidade"><input type="text" id="descricao" name="descricao'+ped+'" placeholder="Descricao"></div>');
				}else{
					alert('Maximo 10 itens por pedido');
				}	
			})

		})


	</script>
	<script>
		

	</script>
		
</body>
</html>