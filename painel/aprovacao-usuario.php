<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Aprovar Cotações</h1>
			</div>
		</div><!--/.row-->
			 
			<?php 
			if (isset($_POST['acao'])) {
				$nomeUsuario = $_SESSION['nome'];
				$email = $_SESSION['email'];
				$contato = $_SESSION['contato'];
				$idPedido = $_POST['idPedido'];
				$idFornecedor = $_POST['idFornecedor'];
				$idUsuarioPedido = $_POST['idUsuarioPedido'];
				$nomePedido = $_POST['nomePedido'];
				$DMY = date('Y-m-d H:i:s');
				$nomeFornecedor = $_POST['nomeFornecedor'];
				$emailFornecedor = $_POST['emailFornecedor'];
				$contatoFornecedor = $_POST['contatoFornecedor'];
				$comissao = $_POST['comissao'];
				$pago = 0;
				$quantidade1 = '--';
				$descricao1 = '--';
				$valor1 = '--';
				$quantidade2 = '--';
			 	$descricao2 = '--';
			 	$valor2 = '--';
			  	$quantidade3 = '--';
		  		$descricao3 = '--';
		  		$valor3 = '--';
			  	$quantidade4 = '--';
			  	$descricao4 = '--';
			  	$valor4 = '--';
			  	$quantidade5 = '--';
			  	$descricao5 = '--';
			  	$valor5 = '--';
			  	$quantidade6 = '--';
			  	$descricao6 = '--';
			  	$valor6 = '--';
			  	$quantidade7 = '--';
			  	$descricao7 = '--';
			  	$valor7 = '--';
			  	$quantidade8 = '--';
			  	$descricao8 = '--';
			  	$valor8 = '--';
			  	$quantidade9 = '--';
			  	$descricao9 = '--';
			  	$valor9 = '--';
			  	$quantidade10 = '--';
			  	$descricao10 = '--';
			  	$valor10 = '--';
			  	$check1 = $_POST['valueCheck1'];
				$check2 = $_POST['valueCheck2'];
				$check3 = $_POST['valueCheck3'];
				$check4 = $_POST['valueCheck4'];
				$check5 = $_POST['valueCheck5'];
				$check6 = $_POST['valueCheck6'];
				$check7 = $_POST['valueCheck7'];
				$check8 = $_POST['valueCheck8'];
				$check9 = $_POST['valueCheck9'];
				$check10 = $_POST['valueCheck10'];

				$atualQuantidade1 = $_POST['atualQuantidade1'];
				$atualDescricao1 = $_POST['atualDescricao1'];
				$atualQuantidade2 = $_POST['atualQuantidade2'];
			 	$atualDescricao2 = $_POST['atualDescricao2'];
			  	$atualQuantidade3 = $_POST['atualQuantidade3'];
		  		$atualDescricao3 = $_POST['atualDescricao3'];
			  	$atualQuantidade4 = $_POST['atualQuantidade4'];
			  	$atualDescricao4 = $_POST['atualDescricao4'];
			  	$atualQuantidade5 = $_POST['atualQuantidade5'];
			  	$atualDescricao5 = $_POST['atualDescricao5'];
			  	$atualQuantidade6 = $_POST['atualQuantidade6'];
			  	$atualDescricao6 = $_POST['atualDescricao6'];
			  	$atualQuantidade7 = $_POST['atualQuantidade7'];
			  	$atualDescricao7 = $_POST['atualDescricao7'];
			  	$atualQuantidade8 = $_POST['atualQuantidade8'];
			  	$atualDescricao8 = $_POST['atualDescricao8'];
			  	$atualQuantidade9 = $_POST['atualQuantidade9'];
			  	$atualDescricao9 = $_POST['atualDescricao9'];
			  	$atualQuantidade10= $_POST['atualQuantidade10'];
			  	$atualDescricao10 = $_POST['atualDescricao10'];

			

				if ($check1 == 'selected') {
					$valor1 = $_POST['valor1'];
					$quantidade1 = $_POST['quantidade1'];
			  		$descricao1 = $_POST['descricao1']; 
			  		$atualQuantidade1 = '--';
					$atualDescricao1 = '--';
				}
				if ($check2 == 'selected') {
					$valor2 = $_POST['valor2'];
					$quantidade2 = $_POST['quantidade2'];
			 		$descricao2 = $_POST['descricao2']; 
			 		$atualQuantidade2 = '--';
			 		$atualDescricao2 = '--';
				}
				if ($check3 == 'selected') {
					$valor3 = $_POST['valor3'];
					$quantidade3 = $_POST['quantidade3'];
		  			$descricao3 = $_POST['descricao3']; 
					$atualQuantidade3 = '--';
		  			$atualDescricao3 = '--';
				}
				if ($check4 == 'selected') {
					$valor4 = $_POST['valor4'];
					$quantidade4 = $_POST['quantidade4'];
					$descricao4 = $_POST['descricao4']; 
					$atualQuantidade4 = '--';
			  		$atualDescricao4 = '--';
			
				}
				if ($check5 == 'selected') {
					$valor5 = $_POST['valor5'];
					$quantidade5 = $_POST['quantidade5'];
					$descricao5 = $_POST['descricao5'];
					$atualQuantidade5 = '--';
			  		$atualDescricao5 = '--';
			
				}
				if ($check6 == 'selected') {
					$valor6 = $_POST['valor6'];
					$quantidade6 = $_POST['quantidade6'];
					$descricao6 = $_POST['descricao6']; 
					$atualQuantidade6 ='--';
			  		$atualDescricao6 = '--';
			
				}
				if ($check7 == 'selected') {
					$valor7 = $_POST['valor7'];
					$quantidade7 = $_POST['quantidade7'];
					$descricao7 = $_POST['descricao7'];
					$atualQuantidade7 = '--';
			  		$atualDescricao7 = '--';
					
				}
				if ($check8 == 'selected') {
					$valor8 = $_POST['valor8'];
					$quantidade8 = $_POST['quantidade8'];
					$descricao8 = $_POST['descricao8'];
					$atualQuantidade8 = '--';
			 	 	$atualDescricao8 = '--';
					
				}
				if ($check9 == 'selected') {
					$valor9 = $_POST['valor9'];
					$quantidade9 = $_POST['quantidade9'];
					$descricao9 = $_POST['descricao9'];
					$atualQuantidade9 = '--';
			  		$atualDescricao9 = '--'; 
					
				}
				if ($check10 == 'selected') {
					$valor10 = $_POST['valor10'];
					$quantidade10= $_POST['quantidade10'];
			  		$descricao10 = $_POST['descricao10'];
			  		$atualQuantidade10 = '--';
			  		$atualDescricao10 = '--';
					
				}
				@$valorTotal = $valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9 + $valor10; 

				if (Pedido::aceitarPedido($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$contatoFornecedor,$DMY)) {
					Pedido::excluirPedido($idPedido,$idFornecedor);
					
					Pedido::backupPedidosFinalizados($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$contatoFornecedor,$DMY,$comissao,$pago);

					Pedido::atualizarPedido($atualDescricao1,$atualQuantidade1,$atualDescricao2,$atualQuantidade2,$atualDescricao3,$atualQuantidade3,$atualDescricao4,$atualQuantidade4,$atualDescricao5,$atualQuantidade5,$atualDescricao6,$atualQuantidade6,$atualDescricao7,$atualQuantidade7,$atualDescricao8,$atualQuantidade8,$atualDescricao9,$atualQuantidade9,$atualDescricao10,$atualQuantidade10,$idPedido);

					if($atualDescricao1 == '--' && $atualDescricao2 == '--' && $atualDescricao3 == '--' && $atualDescricao4 == '--' && $atualDescricao5 == '--' && $atualDescricao6 == '--' && $atualDescricao7 == '--' && $atualDescricao8 == '--' && $atualDescricao9 == '--' && $atualDescricao10 == '--') {
						Pedido::excluirCotacao($idPedido);
					}

				
					Painel::alert('sucesso','Os valores selecionados foram finalizado com sucesso');
				}else{
					Painel::alert('erro','Ouve um erro no envio dos valores');
				}
			  
			}

			$myID = $_SESSION['idUsuario'];
		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cotacao` WHERE idUsuarioPedido = ?'); 
		 	$pegaQuantidade->execute(array($myID));
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	
		 		$numCot = 0;
 		 ?>	
		<?php 
			foreach ($pegaQuantidade as $key => $value) {  $numCot++;?>

				
		<div class="cotas">
			<header style="background-color: #ede355" id="num_pedido"><b><?php echo 'Nome da Cotação: '.$value['nomePedido']?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">
				<?php 

				$sql = MySql::conectar()->prepare('SELECT * FROM `tb_admin.valorpedido` WHERE idPedido = ?'); 
			 	$sql->execute(array($value['idPedido']));
			 	$sql = $sql->fetchAll();

				foreach ($sql as $key => $value2) {

		 	 
		 	 ?>
		 	 <input type="hidden" name="atualDescricao1" value="<?php echo $value2['descricao1'] ?>">
		 	 <input type="hidden" name="atualDescricao2" value="<?php echo $value2['descricao2'] ?>">
		 	 <input type="hidden" name="atualDescricao3" value="<?php echo $value2['descricao3'] ?>">
		 	 <input type="hidden" name="atualDescricao4" value="<?php echo $value2['descricao4'] ?>">
		 	 <input type="hidden" name="atualDescricao5" value="<?php echo $value2['descricao5'] ?>">
		 	 <input type="hidden" name="atualDescricao6" value="<?php echo $value2['descricao6'] ?>">
		 	 <input type="hidden" name="atualDescricao7" value="<?php echo $value2['descricao7'] ?>">
		 	 <input type="hidden" name="atualDescricao8" value="<?php echo $value2['descricao8'] ?>">
		 	 <input type="hidden" name="atualDescricao9" value="<?php echo $value2['descricao9'] ?>">
		 	 <input type="hidden" name="atualDescricao10" value="<?php echo $value2['descricao10'] ?>">
		 	 <input type="hidden" name="atualQuantidade1" value="<?php echo $value2['quantidade1'] ?>">
		 	 <input type="hidden" name="atualQuantidade2" value="<?php echo $value2['quantidade2'] ?>">
		 	 <input type="hidden" name="atualQuantidade3" value="<?php echo $value2['quantidade3'] ?>">
		 	 <input type="hidden" name="atualQuantidade4" value="<?php echo $value2['quantidade4'] ?>">
		 	 <input type="hidden" name="atualQuantidade5" value="<?php echo $value2['quantidade5'] ?>">
		 	 <input type="hidden" name="atualQuantidade6" value="<?php echo $value2['quantidade6'] ?>">
		 	 <input type="hidden" name="atualQuantidade7" value="<?php echo $value2['quantidade7'] ?>">
		 	 <input type="hidden" name="atualQuantidade8" value="<?php echo $value2['quantidade8'] ?>">
		 	 <input type="hidden" name="atualQuantidade9" value="<?php echo $value2['quantidade9'] ?>">
		 	 <input type="hidden" name="atualQuantidade10" value="<?php echo $value2['quantidade10'] ?>">

		 	<?php } ?>
		 	<?php 
		 		$fornecedor = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cadastro_fornecedor` WHERE idUsuario = ?');
		 		$fornecedor->execute(array($value['idFornecedor']));
			 	$fornecedor = $fornecedor->fetchAll();
			 
			 	foreach ($fornecedor as $key => $value3) {
			 		

		 	 ?>
		 	 <input type="hidden" name="nomeFornecedor" value="<?php echo $value3['nome']?>">
		 	 <input type="hidden" name="emailFornecedor" value="<?php echo $value3['email']?>">
		 	 <input type="hidden" name="contatoFornecedor" value="<?php echo $value3['contato']?>">
		 	<?php } ?>
				 
				<div class="cot-descricao">
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

				<div class="cot-valor cot-valor<?php echo $numCot ?> ">
					<div><label>Valor </label></div>
					
					<input class="v1" id="valor1" type="text"  disabled="" placeholder="<?php echo $value['valor1']?>">
					<input type="hidden" class="valor1" name="valor1" value="<?php echo $value['valor1']?>"/>

						<input id="b1" type="checkbox" name="check1"/>
						<label class="checked" for="b1"></label>
						<input type="hidden" class="valueCheck1" name="valueCheck1" value="unselected">

					<input class="v2"  id="valor2" type="text"  disabled="" placeholder="<?php echo $value['valor2']?>">
					<input type="hidden" class="valor2" name="valor2" value="<?php echo $value['valor2']?>"/>
						<input id="b2" type="checkbox" name="check2"/>
						<label class="checked" for="b2"></label>
						<input type="hidden" class="valueCheck2" name="valueCheck2" value="unselected">

					<input class="v3"  id="valor3" type="text"  disabled="" placeholder="<?php echo $value['valor3']?>">
					<input type="hidden" class="valor3" name="valor3" value="<?php echo $value['valor3']?>"/>
						<input id="b3" type="checkbox" name="check3"/>
						<label class="checked" for="b3"></label>
						<input type="hidden" class="valueCheck3" name="valueCheck3" value="unselected">

					<input class="v4"  id="valor4" type="text"  disabled="" placeholder="<?php echo $value['valor4']?>">
					<input type="hidden" class="valor4" name="valor4" value="<?php echo $value['valor4']?>"/>
						<input id="b4" type="checkbox"  name="check4"/>
						<label class="checked" for="b4"></label>
						<input type="hidden" class="valueCheck4" name="valueCheck4" value="unselected">

					<input class="v5"  id="valor5" type="text"  disabled="" placeholder="<?php echo $value['valor5']?>">
					<input type="hidden" name="valor5" value="<?php echo $value['valor5']?>"/>
						<input id="b5" type="checkbox" name="check5" />
						<label class="checked" for="b5"></label>
						<input type="hidden" class="valueCheck5" name="valueCheck5" value="unselected">

					<input class="v6"  id="valor6" type="text"  disabled="" placeholder="<?php echo $value['valor6']?>">
					<input type="hidden" class="valor6" name="valor6" value="<?php echo $value['valor6']?>"/>
						<input id="b6" type="checkbox"  name="check6"/>
						<label class="checked" for="b6"></label>
						<input type="hidden"class="valueCheck6" name="valueCheck6" value="unselected">

					<input class="v7"  id="valor7" type="text"  disabled="" placeholder="<?php echo $value['valor7']?>">
					<input type="hidden" class="valor7" name="valor7" value="<?php echo $value['valor7']?>"/>
						<input id="b7" type="checkbox" name="check7" />
						<label class="checked" for="b7"></label>
						<input type="hidden" class="valueCheck7" name="valueCheck7" value="unselected">

					<input class="v8"  id="valor8" type="text"  disabled="" placeholder="<?php echo $value['valor8']?>">
					<input type="hidden"  class="valor8" name="valor8" value="<?php echo $value['valor8']?>"/>
						<input id="b8" type="checkbox" name="check8"/>
						<label class="checked" for="b8"></label>
						<input type="hidden" class="valueCheck8" name="valueCheck8" value="unselected">

					<input class="v9"  id="valor9" type="text"  disabled="" placeholder="<?php echo $value['valor9']?>">
						<input type="hidden" class="valor9" name="valor9" value="<?php echo $value['valor9']?>"/>
						<input id="b9" type="checkbox" name="check9"/>
						<label class="checked" for="b9"></label>
						<input type="hidden" class="valueCheck9" name="valueCheck9" value="unselected">

					<input class="v10"  id="valor10" type="text"  disabled="" placeholder="<?php echo $value['valor10']?>">
						<input type="hidden" class="valor10" name="valor10" value="<?php echo $value['valor10']?>"/>
						<input id="b10" type="checkbox"  name="check10" />
						<label class="checked" for="b10"></label>
						<input type="hidden" class="valueCheck10" name="valueCheck10" value="unselected">

				</div>
			
				<input type="hidden" value="<?php echo $value['idPedido'] ?>" name="idPedido">
				<input type="hidden" value="<?php echo $value['idFornecedor'] ?>" name="idFornecedor">
				<input type="hidden" value="<?php echo $value['idUsuarioPedido'] ?>" name="idUsuarioPedido">
				<input type="hidden" value="<?php echo $value['nomePedido'] ?>" name="nomePedido">
				<input type="hidden" name="comissao" value="<?php echo $value['comissao'] ?>">
				<?php 
				echo $value['comissao'];
				 ?>
				<br>
				<div class="w100"  style="text-align: center">
				<input type="submit" class="btn" name="acao" value="Enviar Valor"></input>
				</div>
			</form>
			
			
		  </div>
		  </div>
		<?php } ?>
