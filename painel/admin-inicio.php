<?php 

 ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pagina Inicial</h1>
			</div>
		</div>
		<!--/.row-->

	
				<?php 
					$usuariosCadastrados = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cadastro_usuarios`');
					$usuariosCadastrados->execute();
					$usuariosCadastrados = $usuariosCadastrados->fetchAll();
					$usuariosCadastrados = count($usuariosCadastrados);

					$fornecedoresCadastrados = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cadastro_fornecedor`');
					$fornecedoresCadastrados->execute();
					$fornecedoresCadastrados = $fornecedoresCadastrados->fetchAll();
					$fornecedoresCadastrados = count($fornecedoresCadastrados);


				 ?>
				 <div class="box-inicio left box-usuario" style="border: 2px dotted #000dff">
				 	<h5>Cadastro </h5>
				 	<p><?php echo $usuariosCadastrados; ?></p>
				 	<h5 style="text-align: center; margin-top: 20px;"> Usuários Cadastrados</h5>
				 </div>
				
				<div class="box-inicio right box-fornecedor" style="border: 2px dotted #9605f0">
				 	<h5>Cadastro </h5>
				 	<p style="color: #9605f0"><?php echo $fornecedoresCadastrados; ?></p>
				 	<h5 style="text-align: center; margin-top: 20px;"> Fornecedores Cadastrados</h5>
				 </div>
		
	
	<?php 

		$pedidoosAtivos = MySql::conectar()->prepare('SELECT * FROM `tb_admin.valorpedido`');
		$pedidoosAtivos->execute();
		$pedidoosAtivos = $pedidoosAtivos->fetchAll();
		$pedidoosAtivos = count($pedidoosAtivos);



		$pedidosFinalizados = MySql::conectar()->prepare('SELECT * FROM `tb_backup.pedidosfinalizados`');
		$pedidosFinalizados->execute();
		$pedidosFinalizados = $pedidosFinalizados->fetchAll();
		$pedidosFinalizados = count($pedidosFinalizados);


	 ?>
	 <div class="box-inicio left box-pAtivo" style="border: 2px dotted #096900">
	 	<h5>Pedidos </h5>
	 	<p style="color: #096900"><?php echo $pedidoosAtivos ?></p>
	 	<h5 style="text-align: center; margin-top: 20px;"> Em andamento</h5>
	 </div>
	 <div class="box-inicio right box-pFinalizado" style="border: 2px dotted #ba020b">
	 	<h5>Pedidos </h5>
	 	<p style="color: #ba020b"><?php echo $pedidosFinalizados; ?></p>
	 	<h5 style="text-align: center; margin-top: 20px;"> Finalizados</h5>
	 </div>
	 
	
	
			
		  </div>
		  </div>

