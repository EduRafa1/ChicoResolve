<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Vizualizar Cotações</h1>
			</div>
		</div>
		<!--/.row-->
		<?php 
			if(isset($_POST['acao'])){	
				$idPedido = $_POST['idPedido'];
				$idUsuario = $_POST['idUsuario'];
				$idUsuarioPedido = $_POST['idUsuarioPedido'];
				$nomePedido = $_POST['nomePedido'];
				$comissao = $_POST['comissao'];
						$quantidade1 = '--';
						$descricao1 = '--';
						$valor1 = '0';
						$quantidade2 = '--';
			 			$descricao2 = '--';
			 			$valor2 = '0';
			  			$quantidade3 = '--';
		  				$descricao3 = '--';
		  				$valor3 = '0';
			  			$quantidade4 = '--';
			  			$descricao4 = '--';
			  			$valor4 = '0';
			  			$quantidade5 = '--';
			  			$descricao5 = '--';
			  			$valor5 = '0';
			  			$quantidade6 = '--';
			  			$descricao6 = '--';
			  			$valor6 = '0';
			  			$quantidade7 = '--';
			  			$descricao7 = '--';
			  			$valor7 = '0';
			  			$quantidade8 = '--';
			  			$descricao8 = '--';
			  			$valor8 = '0';
			  			$quantidade9 = '--';
			  			$descricao9 = '--';
			  			$valor9 = '0';
			  			$quantidade10= '--';
			  			$descricao10 = '--';
			  			$valor10 = '0';

				if ($_POST['valor1'] != '0') {
					$valor1 = $_POST['valor1'];
					$quantidade1 = $_POST['quantidade1'];
			  		$descricao1 = $_POST['descricao1']; 
				}
				if ($_POST['valor2'] != '0') {
					$valor2 = $_POST['valor2'];
					$quantidade2 = $_POST['quantidade2'];
			 		$descricao2 = $_POST['descricao2']; 

				}
				if ($_POST['valor3'] != '0') {
					$valor3 = $_POST['valor3'];
					$quantidade3 = $_POST['quantidade3'];
		  			$descricao3 = $_POST['descricao3']; 
				}
				if ($_POST['valor4'] != '0') {
					$valor4 = $_POST['valor4'];
					$quantidade4 = $_POST['quantidade4'];
					$descricao4 = $_POST['descricao4']; 
				}
				if ($_POST['valor5'] != '0') {
					$valor5 = $_POST['valor5'];
					$quantidade5 = $_POST['quantidade5'];
					$descricao5 = $_POST['descricao5']; 
				}
				if ($_POST['valor6'] != '0') {
					$valor6 = $_POST['valor6'];
					$quantidade6 = $_POST['quantidade6'];
					$descricao6 = $_POST['descricao6']; 
				}
				if ($_POST['valor7'] != '0') {
					$valor7 = $_POST['valor7'];
					$quantidade7 = $_POST['quantidade7'];
					$descricao7 = $_POST['descricao7'];
				}
				if ($_POST['valor8'] != '0') {
					$valor8 = $_POST['valor8'];
					$quantidade8 = $_POST['quantidade8'];
					$descricao8 = $_POST['descricao8'];
				}
				if ($_POST['valor9'] != '0') {
					$valor9 = $_POST['valor9'];
					$quantidade9 = $_POST['quantidade9'];
					$descricao9 = $_POST['descricao9']; 
				}
				if ($_POST['valor10'] != '0') {
					$valor10 = $_POST['valor10'];
					$quantidade10= $_POST['quantidade10'];
			  		$descricao10 = $_POST['descricao10'];
				}

				if (Pedido::envioCotacao($idPedido,$nomePedido,$idUsuario,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$idUsuarioPedido,$comissao)) {
					Painel::alert('sucesso','Cotação enviada com sucesso');

				}else{
					Painel::alert('erro','Erro ao enviar');
				}
				
					
			}

		 	$pegaQuantidade = MySql::conectar()->prepare('SELECT * FROM `tb_admin.valorpedido`'); 
		 	$pegaQuantidade->execute();
		 	$pegaQuantidade = $pegaQuantidade->fetchAll();	

 		 ?>
		<?php 
			$identificador = 0;
			foreach ($pegaQuantidade as $key => $value) {
		 	 $identificador += 1;
		 	 
		$cotaRealizada = MySql::conectar()->prepare('SELECT idPedido FROM `tb_admin.cotacao` WHERE idFornecedor = ?');
		$cotaRealizada->execute(array($_SESSION['idUsuario']));
		$cotaRealizada = $cotaRealizada->fetchAll();
		 	if ($value['idPedido'] != @$cotaRealizada[0][0] && $value['idPedido'] != @$cotaRealizada[1][0] && $value['idPedido'] != @$cotaRealizada[2][0] && $value['idPedido'] != @$cotaRealizada[3][0] && $value['idPedido'] != @$cotaRealizada[4][0] && $value['idPedido'] != @$cotaRealizada[5][0] && $value['idPedido'] != @$cotaRealizada[6][0] && $value['idPedido'] != @$cotaRealizada[7][0] && $value['idPedido'] != @$cotaRealizada[8][0] && $value['idPedido'] != @$cotaRealizada[9][0] && $value['idPedido'] != @$cotaRealizada[10][0] && $value['idPedido'] != @$cotaRealizada[11][0] && $value['idPedido'] != @$cotaRealizada[12][0] && $value['idPedido'] != @$cotaRealizada[13][0] && $value['idPedido'] != @$cotaRealizada[14][0] && $value['idPedido'] != @$cotaRealizada[15][0] && $value['idPedido'] != @$cotaRealizada[16][0] && $value['idPedido'] != @$cotaRealizada[17][0] && $value['idPedido'] != @$cotaRealizada[18][0] && $value['idPedido'] != @$cotaRealizada[19][0] && $value['idPedido'] != @$cotaRealizada[20][0] && $value['idPedido'] != @$cotaRealizada[21][0]&& $value['idPedido'] != @$cotaRealizada[22][0] && $value['idPedido'] != @$cotaRealizada[23][0] && $value['idPedido'] != @$cotaRealizada[24][0] && $value['idPedido'] != @$cotaRealizada[25][0] && $value['idPedido'] != @$cotaRealizada[26][0] && $value['idPedido'] != @$cotaRealizada[27][0] && $value['idPedido'] != @$cotaRealizada[28][0] && $value['idPedido'] != @$cotaRealizada[29][0] && $value['idPedido'] != @$cotaRealizada[30][0] && $value['idPedido'] != @$cotaRealizada[31][0] && $value['idPedido'] != @$cotaRealizada[32][0] && $value['idPedido'] != @$cotaRealizada[33][0] && $value['idPedido'] != @$cotaRealizada[34][0] && $value['idPedido'] != @$cotaRealizada[35][0] && $value['idPedido'] != @$cotaRealizada[36][0] && $value['idPedido'] != @$cotaRealizada[37][0] && $value['idPedido'] != @$cotaRealizada[38][0] && $value['idPedido'] != @$cotaRealizada[39][0] && $value['idPedido'] != @$cotaRealizada[40][0] && $value['idPedido'] != @$cotaRealizada[41][0] && $value['idPedido'] != @$cotaRealizada[44][0] && $value['idPedido'] != @$cotaRealizada[43][0] && $value['idPedido'] != @$cotaRealizada[46][0] && $value['idPedido'] != @$cotaRealizada[45][0] && $value['idPedido'] != @$cotaRealizada[48][0] && $value['idPedido'] != @$cotaRealizada[47][0] && $value['idPedido'] != @$cotaRealizada[50][0] && $value['idPedido'] != @$cotaRealizada[49][0] && $value['idPedido'] != @$cotaRealizada[52][0] && $value['idPedido'] != @$cotaRealizada[51][0] && $value['idPedido'] != @$cotaRealizada[54][0] && $value['idPedido'] != @$cotaRealizada[53][0] && $value['idPedido'] != @$cotaRealizada[56][0] && $value['idPedido'] != @$cotaRealizada[55][0] && $value['idPedido'] != @$cotaRealizada[58][0] && $value['idPedido'] != @$cotaRealizada[57][0] && $value['idPedido'] != @$cotaRealizada[60][0] && $value['idPedido'] != @$cotaRealizada[59][0] && $value['idPedido'] != @$cotaRealizada[62][0] && $value['idPedido'] != @$cotaRealizada[61][0] && $value['idPedido'] != @$cotaRealizada[64][0] && $value['idPedido'] != @$cotaRealizada[63][0] && $value['idPedido'] != @$cotaRealizada[66][0] && $value['idPedido'] != @$cotaRealizada[65][0] && $value['idPedido'] != @$cotaRealizada[68][0] && $value['idPedido'] != @$cotaRealizada[67][0] && $value['idPedido'] != @$cotaRealizada[70][0] && $value['idPedido'] != @$cotaRealizada[69][0] && $value['idPedido'] != @$cotaRealizada[72][0] && $value['idPedido'] != @$cotaRealizada[71][0] && $value['idPedido'] != @$cotaRealizada[74][0] && $value['idPedido'] != @$cotaRealizada[73][0] && $value['idPedido'] != @$cotaRealizada[76][0] && $value['idPedido'] != @$cotaRealizada[75][0] && $value['idPedido'] != @$cotaRealizada[78][0] && $value['idPedido'] != @$cotaRealizada[77][0] && $value['idPedido'] != @$cotaRealizada[80][0] && $value['idPedido'] != @$cotaRealizada[79][0] && $value['idPedido'] != @$cotaRealizada[82][0] && $value['idPedido'] != @$cotaRealizada[81][0] && $value['idPedido'] != @$cotaRealizada[84][0] && $value['idPedido'] != @$cotaRealizada[83][0] && $value['idPedido'] != @$cotaRealizada[86][0] && $value['idPedido'] != @$cotaRealizada[85][0]) {
		 	  ?>
		<div class="cotas">
			<header id="num_pedido"><b><?php echo 'Nome da Cotação: '.$value['nomePedido']; ?></b></header>
			<div class="cotacoes">
		<div class="col_cotacoes1">
			<form method="post" class="cot-fornecedor">
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

				<div class="cot-valor ">
					<div><label>Valor </label></div>
					
					<input id="valor1" type="text" name="valor1" value="0">
					<input id="valor2" type="text" name="valor2" value="0">
						

					<input id="valor3" type="text" name="valor3" value="0">
					
			

					<input id="valor4" type="text" name="valor4" value="0">
				
					<input id="valor5" type="text" name="valor5" value="0">
					
					<input id="valor6" type="text" name="valor6" value="0">
					
					<input id="valor7" type="text" name="valor7" value="0">
					
					<input id="valor8" type="text" name="valor8" value="0">
					

					<input id="valor9" type="text" name="valor9" value="0">
					

					<input id="valor10" type="text" name="valor10" value="0">
					

				</div>
				<div class="clear"></div>
				<div class="valorTotal">
					<p>Valor total: <?php 



					 ?></p>
				</div><!--valorTotal-->
				
				
				
			


								
				<input type="hidden" value="<?php echo $value['idPedido'] ?>" name="idPedido">
				<input type="hidden" value="<?php echo $_SESSION['idUsuario'] ?>" name="idUsuario">
				<input type="hidden" value="<?php echo $value['idUsuarioPedido'] ?>" name="idUsuarioPedido">
				<input type="hidden" value="<?php echo $value['nomePedido'] ?>" name="nomePedido">
				<input type="hidden" name="comissao" value="<?php echo $_SESSION['comissao']; ?>">
				
				<br>
				<div class="w100">
				<input type="submit" class="btn" name="acao" value="Enviar Valor"></input>
				</div>
			</form>
			
		  </div>
		  </div>
		<?php }} ?>

