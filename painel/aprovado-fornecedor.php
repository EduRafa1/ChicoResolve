<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cotações Aprovados</h1>
			</div>
		</div><!--/.row-->
			 
			<?php 
		
			$myID = $_SESSION['idUsuario'];
		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.pedidosfinalizados` WHERE idFornecedor = ?'); 
		 	$pegaQuantidade->execute(array($myID));
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	

 		 ?>
		<?php 
			foreach ($pegaQuantidade as $key => $value) {
		 	 
		 	 
		 	  ?>
		<div class="cotas">
			<header style="background-color: #4de876" id="num_pedido"><b><?php echo 'Nome da Cotação: '.$value['nomePedido']?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">
				<div class="cot-descricao">
					<label>Descrição</label>
					<br>
					<input class="" type="text" placeholder=" 1º <?php echo $value['descricao1']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="2º <?php echo $value['descricao2']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="3º <?php echo $value['descricao3']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="4º <?php echo $value['descricao4']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="5º <?php echo $value['descricao5']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="6º <?php echo $value['descricao6']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="7º <?php echo $value['descricao7']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="8º <?php echo $value['descricao8']; ?>" aria-label="Disabled input example" disabled>
					
					<input class="" type="text" placeholder="9º <?php echo $value['descricao9']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="10º <?php echo $value['descricao10']; ?>" aria-label="Disabled input example" disabled>
				
				</div>
				<div class="cot-quantidade ">
					<label>Quantidade</label>
					<input class="" type="text" placeholder="<?php echo $value['quantidade1']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade2']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade3']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade4']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade5']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade6']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade7']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade8']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade9']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" placeholder="<?php echo $value['quantidade10']; ?>" aria-label="Disabled input example" disabled>
				
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
				<input type="text"  placeholder="<?php echo 'Valor concordado: '.$value['valorTotal']  ?>" style="text-align: center; width: 100%;" disabled>
				<div class="cot-info ">
					<h4>Informações para contato com cliente</h4>
					
				
					<input class="" type="text" value="<?php echo 'Nome: '.$value['nomeUsuario']; ?>" aria-label="Disabled input example" disabled>
				
					<input class="" type="text" value="<?php echo 'E-mail: '.$value['email']; ?>" aria-label="Disabled input example" disabled>
					<input class="" type="text" value="<?php echo 'Telefone: '.$value['contato']; ?>" aria-label="Disabled input example" disabled>
				
				</div>

				

				
				
				
				
			


				

				<br>
				
			</form>
			
		  </div>
		  </div>
		<?php } ?>
