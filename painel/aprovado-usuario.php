<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cotações Aprovados</h1>
			</div>
		</div><!--/.row-->
			 
			<?php 
			
			$myID = $_SESSION['idUsuario'];
		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.pedidosfinalizados` WHERE idUsuarioPedido = ?'); 
		 	$pegaQuantidade->execute(array($myID));
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	

 		 ?>
		<?php 
			foreach ($pegaQuantidade as $key => $value) {	 
		 	  ?>
		<div class="cotas">
			<header class="header-title" style="background-color: #4de876" id="num_pedido"><b><?php echo 'Nome da Cotação: '.$value['nomePedido']?></b> <b style="float: right; margin-right: 10px;">Finalizado em: <?php echo $value['DMY']; ?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">
				<div class="cot-descricao">
					<div class="label-title"><label>Descrição</label></div>
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
				<div class="cot-quantidade ">
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

				<div class="cot-valor ">
					<div><label>Valor</label></div>
					<input id="valor1" type="text"  disabled="" placeholder="<?php echo $value['valor1']?>">
					<input id="valor2" type="text"  disabled="" placeholder="<?php echo $value['valor2']?>">
					<input id="valor3" type="text"  disabled="" placeholder="<?php echo $value['valor3']?>">	
					<input id="valor4" type="text"  disabled="" placeholder="<?php echo $value['valor4']?>">
					<input id="valor5" type="text"  disabled="" placeholder="<?php echo $value['valor5']?>">
					<input id="valor6" type="text"  disabled="" placeholder="<?php echo $value['valor6']?>">
					<input id="valor7" type="text"  disabled="" placeholder="<?php echo $value['valor7']?>">
					<input id="valor8" type="text"  disabled="" placeholder="<?php echo $value['valor8']?>">
					<input id="valor9" type="text"  disabled="" placeholder="<?php echo $value['valor9']?>">
					<input id="valor10" type="text"  disabled="" placeholder="<?php echo $value['valor10']?>">
				</div>
				<input type="text" class="valor-cot" id="valor-cot" name="valor-cot" placeholder="Valor concordado:  <?php echo $value['valorTotal']; ?>" disabled >
					<div class="cot-info ">
					<h4>Informações para contato com o fornecedor</h4>
					
				
					<input class="" type="text" value="<?php echo 'Empresa: '.$value['nomeFornecedor']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" value="<?php echo 'E-mail: '.$value['emailFornecedor']; ?>" aria-label="Disabled input example" disabled>
					<input class="" type="text" value="<?php echo 'Telefone: '.$value['telefoneFornecedor']; ?>" aria-label="Disabled input example" disabled>
				
				</div>

				<input type="hidden" value="<?php echo $value['idPedido'] ?>" name="idPedido">
				<input type="hidden" value="<?php echo $value['idFornecedor'] ?>" name="idFornecedor">
				<input type="hidden" value="<?php echo $value['idUsuarioPedido'] ?>" name="idUsuarioPedido">
				<input type="hidden" value="<?php echo $value['nomePedido'] ?>" name="nomePedido">

				
				
			</form>
			
		  </div>
		  </div>
		<?php } ?>
