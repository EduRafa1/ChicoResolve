<?php 
	if (isset($_POST['aprovar'])) {
		$idUsuario = $_POST['idUsuario'];
		$comissao = $_POST['comissao'];
		$aprovado = 1;
		if (Usuario::aprovarFornecedor($aprovado,$comissao,$idUsuario)) {
			Painel::alert('sucesso','Fornecedor Aprovado com sucesso');
		}else{
			Painel::alert('erro','Ocorreu um erro ao aprovar o fornecedor');
		}
	}

	if (isset($_POST['recusar'])) {
		$idUsuario = $_POST['idUsuario'];
		if (Usuario::recusarFornecedor($idUsuario)) {
			Painel::alert('sucesso','O fornecedor foi excluido com sucesso');
		}else{
			Painel::alert('erro','Ocorreu um erro na exclusão do fornecedor');
		}
	}

 ?>
<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Aprovar Fornecedores</h1>
			</div>
		</div>
		<!--/.row-->

	<div class="container-editar container-wraper">
	
		<div class="container-overflow">
		
			<div class="container-single w100 left ">
				<h2 style="font-size: 18px">Aguarde a sua conta ser liberada</h2>
			</div><!--container-single-->
		</div><!--container-overflow-->
		<div class="clear"></div>
	</div><!--container-editar-->

		  </div>
		  </div>

