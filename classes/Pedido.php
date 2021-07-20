<?php 

	class Pedido{
		public static function cotar($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$descricao2,$quantidade2,$descricao3,$quantidade3,$descricao4,$quantidade4,$descricao5,$quantidade5,$descricao6,$quantidade6,$descricao7,$quantidade7,$descricao8,$quantidade8,$descricao9,$quantidade9,$descricao10,$quantidade10,$valor,$idUsuarioPedido){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.valorpedido` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			$sql->execute(array($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$descricao2,$quantidade2,$descricao3,$quantidade3,$descricao4,$quantidade4,$descricao5,$quantidade5,$descricao6,$quantidade6,$descricao7,$quantidade7,$descricao8,$quantidade8,$descricao9,$quantidade9,$descricao10,$quantidade10,$valor,$idUsuarioPedido));
		}
		public static function envioCotacao($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$idUsuarioPedido,$comissao){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.cotacao` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			if ($sql->execute(array($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$idUsuarioPedido,$comissao))) {
				return true;
			}else{
				return false;
			}
		}

		public static function mandarValor($idPedido,$idFornecedor,$descricao,$quantidade,$valor,$idUsuarioPedido){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.valorpedido` VALUES (null,?,?,?,?,?,?)');
			$sql->execute(array($idPedido,$idFornecedor,$descricao,$quantidade,$valor,$idUsuarioPedido));
		}

		public static function verPedidos($idUsuario){
			$sql = MySql::conectar()->prepare('SELECT idPedido FROM `tb_admin.valorpedido` WHERE idUsuario = ?');
			$sql->execute(array($idUsuario));
		}

		public static function aceitarPedido($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$telefoneFornecedor,$DMY){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_admin.pedidosfinalizados` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			if ($sql->execute(array($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$telefoneFornecedor,$DMY))) {
				return true;
			}else{
				return false;
			}

		}
		public static function backupPedidosFinalizados($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$telefoneFornecedor,$DMY,$porcento,$pago){
			$sql = MySql::conectar()->prepare('INSERT INTO `tb_backup.pedidosfinalizados` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			if ($sql->execute(array($idPedido,$nomePedido,$idFornecedor,$descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$valorTotal,$idUsuarioPedido,$contato,$email,$nomeUsuario,$nomeFornecedor,$emailFornecedor,$telefoneFornecedor,$DMY,$porcento,$pago))) {
				return true;
			}else{
				return false;
			}

		}
		public static function atualizarPedido($descricao1,$quantidade1,$descricao2,$quantidade2,$descricao3,$quantidade3,$descricao4,$quantidade4,$descricao5,$quantidade5,$descricao6,$quantidade6,$descricao7,$quantidade7,$descricao8,$quantidade8,$descricao9,$quantidade9,$descricao10,$quantidade10,$idPedido){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.valorpedido` SET descricao1 = ?, quantidade1 = ?, descricao2 = ?, quantidade2 = ?, descricao3 = ?, quantidade3 = ?, descricao4 = ?, quantidade4 = ?, descricao5 = ?, quantidade5 = ?, descricao6 = ?, quantidade6 = ?, descricao7 = ?, quantidade7 = ?, descricao8 = ?, quantidade8 = ?, descricao9 = ?, quantidade9 = ?, descricao10 = ?, quantidade10 = ? WHERE idPedido = ?');
			if ($sql->execute(array($descricao1,$quantidade1,$descricao2,$quantidade2,$descricao3,$quantidade3,$descricao4,$quantidade4,$descricao5,$quantidade5,$descricao6,$quantidade6,$descricao7,$quantidade7,$descricao8,$quantidade8,$descricao9,$quantidade9,$descricao10,$quantidade10,$idPedido))) {
				return true;
			}else{
				return false;
			}
			
		}
		public static function atualizarAprovarCotacao($descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$idPedido){
			$sql = MySql::conectar()->prepare('UPDATE `tb_admin.cotacao` SET descricao1 = ?, quantidade1 = ?, valor1 = ?, descricao2 = ?, quantidade2 = ?, valor2 = ?, descricao3 = ?, quantidade3 = ?, valor3 = ?,descricao4 = ?, quantidade4 = ?, valor4 = ?, descricao5 = ?, quantidade5 = ?, valor5 = ?, descricao6 = ?, quantidade6 = ?, valor6 = ?, descricao7 = ?, quantidade7 = ?, valor7 = ?, descricao8 = ?, quantidade8 = ?, valor8 = ?, descricao9 = ?, quantidade9 = ?, valor9 = ?, descricao10 = ?, quantidade10 = ?, valor10 = ? WHERE idPedido = ?');
			if ($sql->execute(array($descricao1,$quantidade1,$valor1,$descricao2,$quantidade2,$valor2,$descricao3,$quantidade3,$valor3,$descricao4,$quantidade4,$valor4,$descricao5,$quantidade5,$valor5,$descricao6,$quantidade6,$valor6,$descricao7,$quantidade7,$valor7,$descricao8,$quantidade8,$valor8,$descricao9,$quantidade9,$valor9,$descricao10,$quantidade10,$valor10,$idPedido))) {
				return true;
			}else{
				return false;
			}

		}



		public static function excluirCotacao($idPedido){
			$sql = MySql::conectar()->prepare('DELETE FROM `tb_admin.valorpedido` WHERE idPedido = ? ');
			$sql->execute(array($idPedido));
		}

		public static function excluirPedido($idPedido,$idFornecedor){
			$sql = MySql::conectar()->prepare('DELETE FROM `tb_admin.cotacao` WHERE idPedido = ? AND idFornecedor = ?');
			$sql->execute(array($idPedido,$idFornecedor));
		}
		public static function excluirPedidoUsuario($idPedido){
			$sql = MySql::conectar()->prepare('DELETE FROM `tb_admin.cotacao` WHERE idPedido = ? ');
			$sql->execute(array($idPedido));
		}

	}

 ?>