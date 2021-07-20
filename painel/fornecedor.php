
<?php 
	if (isset($_GET['sair'])) {
		Painel::sair();
	}
	$modo = $_SESSION['modo'];
	switch ($modo) {
		case 0 :
			$op = 'Fornecedor';
			break;
		
		case 1 :
			$op = 'Usuario';
			break;
	}
 ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cotações</title>
	<link href="<?php echo INCLUDE_PATH?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/styles.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>fornecedor/css/fornecedor.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>fornecedor/css/cobrar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<!--font-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
		>

</head>

<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse"><span class="sr-only">Navegation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href=""><span>Chico</span>Resolve</a>
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
				<p>Fornecedor</p>
				<?php if ($_SESSION['comissao'] != '') {
					
				 ?>
				<P>Comissao: <?php echo $_SESSION['comissao']; ?></P>
			<?php }?>

			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li <?php 	Painel::verificaPermissao(2); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>admin-inicio"><i class="fas fa-suitcase"></i> Inicio</a></li>
			<li <?php 	Painel::verificaPermissao(2); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>cobrar"><i class="fas fa-hand-holding-usd"></i>  Cobrança</a></li>
			<li <?php 	Painel::verificaPermissao(2); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>aFornecedor"><i class="fas fa-check-circle"></i> Aprovar Fornecedores</a></li>
			<li <?php 	Painel::verificaPermissao(2); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>aUsuario"><i class="fas fa-check-circle"></i> Aprovar Usuarios</a></li>
			<li  <?php 	Painel::verificaPermissao(2); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>editar-fornecedor"><i class="fas fa-cog"></i> Editar Conta</a></li>
			
			<li <?php 	Painel::verificaPermissao(1); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>aprovado-fornecedor"><i class="fas fa-check-circle"></i> Cotações Aprovadas</a></li>
			<li <?php 	Painel::verificaPermissao(1); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>aprovacao-fornecedor"><i class="fas fa-hourglass-start"></i> Cotação em Aprovação</a></li>
			<li  <?php 	Painel::verificaPermissao(1); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>cotacao-fornecedor"><i class="fas fa-dollar-sign">&nbsp;</i>Visualizar Cotações</a></li>
			<li  <?php 	Painel::verificaPermissao(1); ?>><a href="<?php echo INCLUDE_PATH_PAINEL?>editar-fornecedor"><i class="fas fa-cog"></i> Editar Conta</a></li>
			<li><a href="<?php echo INCLUDE_PATH?>?sair"><i class="fa fa-power-off">&nbsp;</i> Logout</a></li>
		</ul>
	</div>
	<!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
				<li class="active">Solicitações de cotação</li>
			</ol>
		</div>
		<!--/.row-->
		<?php 
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
			switch ($url) {
				case 'painel/aprovado-fornecedor':
					include('aprovado-fornecedor.php');
					break;
				case 'painel/cotacao-fornecedor':
					include('cotacao-fornecedor.php');
					break;
				
				case 'painel/aprovacao-fornecedor':
					include('aprovacao-fornecedor.php');
					break;
				case 'painel/editar-fornecedor':
					include('editar-fornecedor.php');
					break;
				case 'painel/cobrar':
					include('cobrar.php');
					break;
				case 'painel/aFornecedor':
					include('admin-aprova.php');
					break;
				case 'painel/aUsuario':
					include('admin-aprovaUsuario.php');
					break;
				case 'painel/admin-inicio':
					include('admin-inicio.php');
					break;
				default:
					include('aprovado-fornecedor.php');
					break;

				
					
			}
		}
		 ?>


		<footer id="rodape">Corpyright 2021 | Desenvolvido por <a href="https://go6.com.br">GO6</a></footer>
		<script src="../js/jquery.js"></script>
	    <script src="../js/jquery.mask.min.js"></script>
	    <script type="text/javascript">
	        $(document).ready(function(){    
	            //$('#valor1').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor2').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor3').mask('000.000.000.000,00',{reverse: true});
	            //$('#valor4').mask('000.000.000.000,00',{reverse: true});
	            //$('#valor5').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor6').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor7').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor8').mask('000.000.000.000,00',{reverse: true});
	           // $('#valor9').mask('000.000.000.000,00',{reverse: true});
	            //$('#valor10').mask('000.000.000.000,00',{reverse: true});
	          //  $('#valortotal').mask('000.000.000.000,00',{reverse: true});
	          
	            $('.cot-valor input[type=text]').mouseleave(function(){
	            	
	            	
	            	valor1 = parseInt($('#valor1').val());
	            	valor2 = parseInt($('#valor2').val());
	            	valor3 = parseInt($('#valor3').val());
	            	valor4 = parseInt($('#valor4').val());
	            	valor5 = parseInt($('#valor5').val());
	            	valor6 = parseInt($('#valor6').val());
	            	valor7 = parseInt($('#valor7').val());
	            	valor8 = parseInt($('#valor8').val());
	            	valor9 = parseInt($('#valor9').val());
	            	valor10 = parseInt($('#valor10').val());
	            	total = valor1 + valor2 + valor3 + valor4 + valor5 + valor6 + valor7 + valor8 + valor9 + valor10;	
			        
	            	$('.valorTotal').html('<p id="valorTotal">Valor Total: '+total+',00</p>')
	            })
	            $('[actionBtn=aprovar]').click(function(){
				
					var r = confirm('Deseja aprovar o fornecedor?');
					if (r == true) {
						return true;
					}else{
						return false;
					}
				});
				$('[actionBtn=recusar]').click(function(){
					var r = confirm('Deseja recusar o fornecedor?');
					if (r == true) {
						return true;
					}else{
						return false;
					}
				});
				$('[actionBtn=confirmarPag]').click(function(){
					var r = confirm('Deseja Confirmar o Pagamento?');
					if (r == true) {
						return true;
					}else{
						return false;
					}
				})
	        })
	    </script>
	   
	    <script src="../js/bootstrap.min.js"></script>
	    <script src="../js/cota.js"></script>
	    <script src="../js/cobrar.js"></script>
		

			</body>
			</html>