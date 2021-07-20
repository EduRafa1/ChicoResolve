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
<?php 
		$fornecedoresNAprovados = 0;
		$aprovarFornecedor = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cadastro_fornecedor` WHERE aprovado = ?');
		$aprovarFornecedor->execute(array($fornecedoresNAprovados));
		$aprovarFornecedor = $aprovarFornecedor->fetchAll();
		foreach ($aprovarFornecedor as $key => $value) {
		

	 ?>
	<div class="container-editar container-wraper">
	
		<div class="container-overflow">
			<div class="container-single w33 left">
				<span class="borderLeft">Nome: <?php echo $value['nome']; ?> </span>
				
				<span class="borderLeft">Contato: <?php echo $value['contato']; ?></span>

				
				<span class="borderLeft">ID: <?php echo $value['idUsuario']; ?></span>
			</div><!--container-single-->
			<div class="container-single w33 left ">
				<span class="borderLeft">CNPJ: <?php echo $value['cnpj']; ?></span>

				<span class="borderLeft">E-mail: <?php echo $value['email']; ?></span>
			</div><!--container-single-->

			<div class="container-single w33 left ">
				<?php if ($value['img'] == '') {
					
				?>
					<div class="img"><img src="../images/chico-mobile.png"></div>
				<?php }else{?>
					<div class="img"><img src="../uploads/<?php echo $value['img']?>"></div>
				<?php } ?>
			</div><!--container-single-->
		</div><!--container-overflow-->
		<div class="clear" style="padding-bottom: 40px;"></div>
		<div class="container-overflow borderTop">
			<div class="container-single w100 left" style="margin-top: 20px;">
				<form method="post">
					<label>Comissão</label>
					<br>
					<input type="text" name="comissao">
					<input actionBtn="aprovar" id="aprovar" type="submit" name="aprovar" value="Aprovar">
					<input actionBtn="recusar" type="submit" name="recusar" value="Recusar">
					<input type="hidden" name="idUsuario" value="<?php echo $value['idUsuario']; ?>">
				</form><!---->
			</div><!--container-single-->
		
		</div><!--container-overflow-->
		
		<div class="clear"></div>
	</div><!--container-editar-->
		<?php } ?>
		  </div>
		  </div>

