<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Cotações</h1>
			</div>
		</div><!--/.row-->
			  <h1>Solicitar Cotacão</h1>
			  <?php 
			  		if (isset($_POST['acao'])) {
			  			$quantidade1 = $_POST['quantidade1'];
			  			$descricao1 = $_POST['descricao1'];
			  			$idFornecedor = '';
			  			$nomePedido = $_POST['nomePedido'];

			  			$quantidade2 = '--';
			 			$descricao2 = '--';
			  			$quantidade3 = '--';
		  				$descricao3 = '--';
			  			$quantidade4 = '--';
			  			$descricao4 = '--';
			  			$quantidade5 = '--';
			  			$descricao5 = '--';
			  			$quantidade6 = '--';
			  			$descricao6 = '--';
			  			$quantidade7 = '--';
			  			$descricao7 = '--';
			  			$quantidade8 = '--';
			  			$descricao8 = '--';
			  			$quantidade9 = '--';
			  			$descricao9 = '--';
			  			$quantidade10= '--';
			  			$descricao10 = '--';
			  			if (isset($_POST['quantidade2']) && isset($_POST['descricao2'])) {
			  				$quantidade2 = $_POST['quantidade2'];
			  				$descricao2 = $_POST['descricao2'];
			  			}
			  			if (isset($_POST['quantidade3']) && isset($_POST['descricao3'])) {
				  			$quantidade3 = $_POST['quantidade3'];
				  			$descricao3 = $_POST['descricao3'];
			  			}
			  			if (isset($_POST['quantidade4']) && isset($_POST['descricao4'])) {
			  				$quantidade4 = $_POST['quantidade4'];
			  				$descricao4 = $_POST['descricao4'];
			  			}
			  			if (isset($_POST['quantidade5']) && isset($_POST['descricao5'])) {
			  				$quantidade5 = $_POST['quantidade5'];
			  				$descricao5 = $_POST['descricao5'];
			  			}
			  			if (isset($_POST['quantidade6']) && isset($_POST['descricao6'])) {
			  				$quantidade6 = $_POST['quantidade6'];
			  				$descricao6 = $_POST['descricao6'];
			  			}
			  			if (isset($_POST['quantidade7']) && isset($_POST['descricao7'])) {
			  				$quantidade7 = $_POST['quantidade7'];
			  				$descricao7 = $_POST['descricao7'];
			  			}
			  			if (isset($_POST['quantidade8']) && isset($_POST['descricao8'])) {
			  				$quantidade8 = $_POST['quantidade8'];
			  				$descricao8 = $_POST['descricao8'];
			  			}
			  			if (isset($_POST['quantidade9']) && isset($_POST['descricao9'])) {
			  				$quantidade9 = $_POST['quantidade9'];
			  				$descricao9 = $_POST['descricao9'];
			  			}
			  			if (isset($_POST['quantidade10']) && isset($_POST['descricao10'])) {
			  				$quantidade10= $_POST['quantidade10'];
			  				$descricao10 = $_POST['descricao10'];
			  			}
		
			  			$valor = '0';
			  			$idUsuario = $_SESSION['idUsuario'];
			  			$idPedido = 'ped'.uniqid();
			  			$idFornecedor = '';
			  			
			  			if ($quantidade1 == '') {
			  				
			  				Painel::alertPainel('erro','Quantidade nao foi digitada');
			  			}else if($descricao1 == ''){
			  				 
			  				Painel::alertPainel('erro','Descricao nao foi completada!');
			  			}else{
			  				// mandar pro banco de dados
			  				Pedido::cotar($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$descricao2,$quantidade2,$descricao3,$quantidade3,$descricao4,$quantidade4,$descricao5,$quantidade5,$descricao6,$quantidade6,$descricao7,$quantidade7,$descricao8,$quantidade8,$descricao9,$quantidade9,$descricao10,$quantidade10,$valor,$idUsuario);
			  				Painel::alertPainel('sucesso','O pedido foi enviado com sucesso!');
			  			}
			  		}
			  		

			   ?>
			  <form method="post">
				  <div id="formulario"  class="pedidos">
				  	<input class="nome-pedido" type="text" name="nomePedido" placeholder="Dê um Nome para o pedido" required>
					  <div class="form-group">

						  <input type="text" id="quantidade" name="quantidade1" placeholder="Quantidade">
						  <input type="text" id="descricao" name="descricao1" placeholder="Descricao">
						  <button type="button" id="add" style="background-color: #4f7352; color: white"> + </button>
					  </div>
				  </div>
				  <div class="form-group">

					  <input id="orcar" type="submit" name="acao" value="Solicitar orçamento">
				  </div>
			  </form>