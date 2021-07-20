<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cotações em Aprovação</h1>
			</div>
		</div>
		<!--/.row-->
		<?php 
			$myID = $_SESSION['idUsuario'];
		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cotacao` WHERE idFornecedor = ?'); 
		 	$pegaQuantidade->execute(array($myID));
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	
 		 ?>
		<?php 
			$identificador = 0;
			foreach ($pegaQuantidade as $key => $value) {
		 	 $identificador += 1;
		 	  ?>
		<div class="cotas">
			<header id="num_pedido" style="background-color: #ede355"><b><?php echo 'Nome da Cotação: '.$value['nomePedido']; ?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">
				<div class="cot-descricao">
					<label>Descrição</label>
					<br>
					<input class="" type="text" placeholder=" 1º <?php echo $value['descricao1']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao1" value="<?php echo $value['descricao1']?>">
					<input class="" type="text" placeholder="2º <?php echo $value['descricao2']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao2" value="<?php echo $value['descricao2']?>">
					<input class="" type="text" placeholder="3º <?php echo $value['descricao3']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao3" value="<?php echo $value['descricao3']?>">
					<input class="" type="text" placeholder="4º <?php echo $value['descricao4']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao4" value="<?php echo $value['descricao4']?>">
					<input class="" type="text" placeholder="5º <?php echo $value['descricao5']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao5" value="<?php echo $value['descricao5']?>">
					<input class="" type="text" placeholder="6º <?php echo $value['descricao6']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao6" value="<?php echo $value['descricao6']?>">
					<input class="" type="text" placeholder="7º <?php echo $value['descricao7']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao7" value="<?php echo $value['descricao7']?>">
					<input class="" type="text" placeholder="8º <?php echo $value['descricao8']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao8" value="<?php echo $value['descricao8']?>">
					<input class="" type="text" placeholder="9º <?php echo $value['descricao9']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao9" value="<?php echo $value['descricao9']?>">
					<input class="" type="text" placeholder="10º <?php echo $value['descricao10']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="descricao10" value="<?php echo $value['descricao10']?>">
				</div>
				<div class="cot-quantidade ">
					<label>Quantidade</label>
					<input class="" type="text" placeholder="<?php echo $value['quantidade1']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade1" value="<?php echo $value['quantidade1']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade2']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade2" value="<?php echo $value['quantidade2']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade3']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade3" value="<?php echo $value['quantidade3']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade4']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade4" value="<?php echo $value['quantidade4']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade5']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade5" value="<?php echo $value['quantidade5']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade6']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade6" value="<?php echo $value['quantidade6']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade7']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade7" value="<?php echo $value['quantidade7']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade8']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade8" value="<?php echo $value['quantidade8']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade9']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade9" value="<?php echo $value['quantidade9']?>">
					<input class="" type="text" placeholder="<?php echo $value['quantidade10']; ?>" aria-label="Disabled input example" disabled>
					<input type="hidden" name="quantidade10" value="<?php echo $value['quantidade10']?>">
				</div>
				<div class="cot-valor ">
					<div><label>Valor Enviado </label></div>
					
					<input id="valor1" type="text" name="valor1" value="<?php echo $value['valor1'] ?>" disabled="">
					<input id="valor2" type="text" name="valor2" value="<?php echo $value['valor2'] ?>" disabled="">
						

					<input id="valor3" type="text" name="valor3" value="<?php echo $value['valor3'] ?>" disabled="">
					
			

					<input id="valor4" type="text" name="valor4" value="<?php echo $value['valor4'] ?>" disabled="">
				
					<input id="valor5" type="text" name="valor5" value="<?php echo $value['valor5'] ?>" disabled="">
					
					<input id="valor6" type="text" name="valor6" value="<?php echo $value['valor6'] ?>" disabled="">
					
					<input id="valor7" type="text" name="valor7" value="<?php echo $value['valor7'] ?>" disabled="">
					
					<input id="valor8" type="text" name="valor8" value="<?php echo $value['valor8'] ?>" disabled="">
					

					<input id="valor9" type="text" name="valor9" value="<?php echo $value['valor9'] ?>" disabled="">
					

					<input id="valor10" type="text" name="valor10" value="<?php echo $value['valor10'] ?>" disabled="">
					

				</div>
				<div class="clear"></div>

				<br>
				
			</form>
			
		  </div>
		  </div>
		<?php } ?>
