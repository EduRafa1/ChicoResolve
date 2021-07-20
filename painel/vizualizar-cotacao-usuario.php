<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Vizualizar Cotações</h1>
			</div>
		</div><!--/.row-->
			 
			<?php 
			if (isset($_POST['acao'])) {
				$idPedido = $_POST['idPedido'];
			
				Pedido::excluirPedidoUsuario($idPedido);
			  	Pedido::excluirCotacao($idPedido);
			  	Painel::alert('sucesso','Pedido excluido com sucesso');
			}
			$myID = $_SESSION['idUsuario'];
		
		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.valorpedido` WHERE idUsuarioPedido = ?'); 
		 	$pegaQuantidade->execute(array($myID));
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	

 		 ?>
		<?php 
			foreach ($pegaQuantidade as $key => $value) { 
		 	  ?>
		<div class="cotas">
			<header style="background-color: #0789b0" id="num_pedido"><b style="color: white"><?php echo 'Nome da Cotação: '.$value['nomePedido']?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">

				<div style="width: 50%" class="cot-descricao">
					<div><label>Descrição</label></div>
					<input id="descricao1" type="text" placeholder=" 1º <?php echo $value['descricao1']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden"  name="descricao1" value="<?php echo $value['descricao1']?>">
					<input id="descricao2" type="text" placeholder="2º <?php echo $value['descricao2']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao2" value="<?php echo $value['descricao2']?>">
					<input id="descricao3" type="text" placeholder="3º <?php echo $value['descricao3']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao3" value="<?php echo $value['descricao3']?>">
					<input id="descricao4" type="text" placeholder="4º <?php echo $value['descricao4']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao4" value="<?php echo $value['descricao4']?>">
					<input id="descricao5" type="text" placeholder="5º <?php echo $value['descricao5']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao5" value="<?php echo $value['descricao5']?>">
					<input id="descricao6" type="text" placeholder="6º <?php echo $value['descricao6']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao6" value="<?php echo $value['descricao6']?>">
					<input id="descricao7" type="text" placeholder="7º <?php echo $value['descricao7']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao7" value="<?php echo $value['descricao7']?>">
					<input id="descricao8" type="text" placeholder="8º <?php echo $value['descricao8']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao8" value="<?php echo $value['descricao8']?>">
					<input id="descricao9" type="text" placeholder="9º <?php echo $value['descricao9']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao9" value="<?php echo $value['descricao9']?>">
					<input id="descricao10" type="text" placeholder="10º <?php echo $value['descricao10']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao10" value="<?php echo $value['descricao10']?>">
				</div>
				<div style="width: 50%" class="cot-quantidade ">
					<div><label>Quantidade</label></div>
					
					<input class="" id="quantidade1" type="text" placeholder="<?php echo $value['quantidade1']; ?>" aria-label="Disabled input example" disabled>
					
					<input type="hidden" name="quantidade1" value="<?php echo $value['quantidade1']?>">
					<input class="" id="quantidade2" type="text" placeholder="<?php echo $value['quantidade2']; ?>" aria-label="Disabled input example" disabled>
				
					<input type="hidden" name="quantidade2" value="<?php echo $value['quantidade2']?>">
					<input class="" id="quantidade3" type="text" placeholder="<?php echo $value['quantidade3']; ?>" aria-label="Disabled input example" disabled>
				
					<input type="hidden" name="quantidade3" value="<?php echo $value['quantidade3']?>">
					<input class="" id="quantidade4" type="text" placeholder="<?php echo $value['quantidade4']; ?>" aria-label="Disabled input example" disabled>
			
					<input type="hidden" name="quantidade4" value="<?php echo $value['quantidade4']?>">
					<input class="" id="quantidade5" type="text" placeholder="<?php echo $value['quantidade5']; ?>" aria-label="Disabled input example" disabled>
				
					<input type="hidden" name="quantidade5" value="<?php echo $value['quantidade5']?>">
					<input class=""  id="quantidade6" type="text" placeholder="<?php echo $value['quantidade6']; ?>" aria-label="Disabled input example" disabled>
				
					<input type="hidden" name="quantidade6" value="<?php echo $value['quantidade6']?>">
					<input class="" id="quantidade7" type="text" placeholder="<?php echo $value['quantidade7']; ?>" aria-label="Disabled input example" disabled>
				
					<input type="hidden" name="quantidade7" value="<?php echo $value['quantidade7']?>">
					<input class="" id="quantidade8" type="text" placeholder="<?php echo $value['quantidade8']; ?>" aria-label="Disabled input example" disabled>
					
					<input type="hidden" name="quantidade8" value="<?php echo $value['quantidade8']?>">
					<input class=""  id="quantidade9" type="text" placeholder="<?php echo $value['quantidade9']; ?>" aria-label="Disabled input example" disabled>
						
					<input type="hidden" name="quantidade9" value="<?php echo $value['quantidade9']?>">
					<input class="" id="quantidade10" type="text" placeholder="<?php echo $value['quantidade10']; ?>" aria-label="Disabled input example" disabled>
						
					<input type="hidden" name="quantidade10" value="<?php echo $value['quantidade10']?>">
				</div>
				<div class="clear"></div>
				<input type="hidden" name="idPedido" value="<?php echo $value['idPedido'] ?>">
			


			
				<div class="w100" style="text-align: center; margin-top: 30px;">
				<input type="submit" class="btn" name="acao" value="Cancelar Cotação"></input>
				</div>
			</form>
			
		  </div>
		  </div>
		<?php } ?>
