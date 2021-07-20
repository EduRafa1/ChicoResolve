<?php 
	if (isset($_POST['confirmar'])) {
		$idPedido = $_POST['idPedido'];
		$pago = 1;
		$finalizar = MySql::conectar()->prepare('UPDATE `tb_backup.pedidosfinalizados` SET pago = ? WHERE idPedido = ?');
		$finalizar->execute(array($pago,$idPedido));
	}
	
 ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cobrança</h1>
			</div>
		</div>
		<!--/.row-->

	<div class="container-editar container-wraper">
		<div id="clientesCobrar" class="w100 container-single" style="border: 1px solid blue;">
			<h4 style="color: blue">Clientes a Cobrar <i class="fas fa-sort-down"></i></h4>
		</div><!--w50-->
		<div class="container-overflow" id="formClientesCobrar">
		<?php 
		$pago = 0;
		$numero = 0;
		$pagar = MySql::conectar()->prepare('SELECT * FROM `tb_backup.pedidosfinalizados` WHERE pago = ?');
		$pagar->execute(array($pago));
		$pagar = $pagar->fetchAll();
		foreach ($pagar as $key => $value) {
			$numero++;

		
		 ?>	
			<form class="pedidosIndi" method="post"  style="display: block">
				<div class="box-cobrar">
						<p><i id="abrirCobrar<?php echo $numero ?>" class="fas fa-file-invoice info "></i>Pedido da empresa <?php echo $value['nomeUsuario']; ?></p>
						<div id="infoPagamento<?php echo $numero ?>" class="info-pagamento" style="display: none">
							<div class="topo">
								<i id="fecharCobrar<?php echo $numero ?>" class="fas fa-times "></i>
							</div><!--topo-->
							<div class="main">
									<h5>Nome do pedido: <?php echo $value['nomePedido']; ?></h5>
							</div><!--main-->
							<div class="main w33 left container-main">
									<h5>Nome do Usuario: <?php echo $value['nomeUsuario']; ?></h5>
							</div><!--main-->
							<div class="main w33 left container-main">
									<h5>E-mail: <?php echo $value['email']; ?></h5>
							</div><!--main-->
							<div class="main w33 left container-main">
									<h5>Contato:<?php echo $value['contato']; ?></h5>
							</div><!--main-->

							<div class="main w33 left container-main">
									<h5>Fornecedor: <?php echo $value['nomeFornecedor']; ?>s</h5>
							</div><!--main-->
							<div class="main w33 left container-main">
									<h5>E-mail:<?php echo $value['emailFornecedor']; ?><h5>
							</div><!--main-->
							<div class="main w33 left container-main">
									<h5>Contato: <?php echo $value['telefoneFornecedor']; ?></h5>
							</div><!--main-->
							<div class="main w100 left container-main">
									<h5>Porcentagem Negociado: <?php echo $value['comissao']; ?>%</h5>
							</div><!--main-->
							<div class="main w100 left container-main">
									<h5>Valor Total do Pedido: <?php echo $value['valorTotal']; ?></h5>
							</div><!--main-->
							<div class="main w100 left container-main" style="padding: 0;">
								<input type="submit" actionBtn="confirmarPag" class="buttonPagamento" name="confirmar" value="Confirmar Pagamento">
							</div><!--main-->
							<input type="hidden" name="idPedido" value="<?php echo $value['idPedido']; ?>">							
						</div><!--info-pagamento-->
				</div><!--box-cobrar-->

			</form><!--form-->
		<?php } ?>
		</div>
			<div class="clear"></div>
	</div><!--container-editar-->
	
			
		  </div>
		  </div>

