<?php 

	class Usuario{

		public static function cadastroUsuario($email,$senha,$nome,$img,$cpf,$contato,$idUsuario,$modo,$permissao,$comissao,$aprovado){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.cadastro_usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?)');
			$sql->execute(array($email,$senha,$nome,$img,$cpf,$contato,$idUsuario,$modo,$permissao,$comissao,$aprovado));
		}
		public static function cadastroFornecedor($nome,$email,$img,$cnpj,$contato,$senha,$idUsuario,$modo,$permissao,$comissao,$aprovado){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.cadastro_fornecedor` VALUES (null,?,?,?,?,?,?,?,?,?,?,?)');
			$sql->execute(array($nome,$email,$img,$cnpj,$contato,$senha,$idUsuario,$modo,$permissao,$comissao,$aprovado));
		}
		public static function usuarioExiste($email){
			$sql = MySql::conectar()->prepare('SELECT `id` FROM `tb_admin.cadastro_usuarios` WHERE email = ?');
			$sql->execute(array($email));
			if ($sql->rowCount() == 1) {
				return true;
			}else{
				return false;
			}
		}
		public static function uploadFile($file){
			$formatoArquivo = explode('.',$file['name']);
			$imagemNome = 'foto'.uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
			if (move_uploaded_file($file['tmp_name'],BASE_DIR.'/uploads/'.$imagemNome)) {
				return $imagemNome;
			}else{
				return false;
			}
			
			}
		public static function editarUsuario($nome,$email,$contato,$senha){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.cadastro_usuarios` SET nome = ?, email = ?, contato = ?, senha = ? WHERE idUsuario = ?');
			if ($sql->execute(array($nome,$email,$contato,$senha,$_SESSION['idUsuario']))) {
				return true;
			}else{
				return false;
			}
			
		}
		public static function editarFornecedor($nome,$email,$contato,$senha){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.cadastro_fornecedor` SET nome = ?, email = ?, contato = ?, senha = ? WHERE idUsuario = ?');
			if ($sql->execute(array($nome,$email,$contato,$senha,$_SESSION['idUsuario']))) {
				return true;
			}else{
				return false;
			}
			
		}

		public static function aprovarUsuario($aprovado,$idUsuario){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.cadastro_usuarios` SET aprovado = ? WHERE idUsuario = ?');
			if ($sql->execute(array($aprovado,$idUsuario))) {
				return true;
			}else{
				return false;
			}
		}
		public static function recusarUsuario($idUsuario){
			$sql = MySql::conectar()->prepare('DELETE FROM `tb_admin.cadastro_usuarios`  WHERE idUsuario = ?');
			if ($sql->execute(array($idUsuario))) {
				return true;
			}else{
				return false;
			}
		}
		public static function aprovarFornecedor($aprovado,$comissao,$idUsuario){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.cadastro_fornecedor` SET aprovado = ?, comissao = ? WHERE idUsuario = ?');
			if ($sql->execute(array($aprovado,$comissao,$idUsuario))) {
				return true;
			}else{
				return false;
			}
		}
		public static function recusarFornecedor($idUsuario){
			$sql = MySql::conectar()->prepare('DELETE FROM `tb_admin.cadastro_fornecedor`  WHERE idUsuario = ?');
			if ($sql->execute(array($idUsuario))) {
				return true;
			}else{
				return false;
			}
		}




	}

 ?>