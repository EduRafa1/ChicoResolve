<?php Painel::verificaAprovacao(1); ?>
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar Conta</h1>
			</div>
		</div>
		<!--/.row-->

	<div class="container-editar">
		<?php 

			if (isset($_POST['acao'])) {
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$contato = $_POST['contato'];
					$senha = $_POST['senha'];
					if (Usuario::editarUsuario($nome,$email,$contato,$senha)) {
							Painel::alert('sucesso','Informações atualizadas com sucesso');
						}else{
							Painel::alert('erro','Não foi possivel atualizar as informações');
						}
			}
		 ?>
		<form method="post">
			<div class="w50 left">
				<label>Nome</label>
				<br>
				<input type="text" name="nome" value="<?php echo $_SESSION['nome']?>">
			</div>
			<div class="w50 right">
				<label>E-mail</label>
				<br>
				<input type="text" name="email" value="<?php echo $_SESSION['email']?>">
			</div>
			<div class="w50 right">
				<label>Contato</label>
				<br>
				<input type="text" name="contato" value="<?php echo $_SESSION['contato']?>">
			</div>
			<div class="w50 left">
				<label>Senha</label>
				<br>
				<input type="password" name="senha" value="<?php echo $_SESSION['senha']?>">
			</div>
			<div class="w50 left">
				<input type="submit" name="acao" value="Confirmar">
			</div>
			<div class="clear"></div>
			

		</form>
	</div><!--container-editar-->
			
		  </div>
		  </div>

