<?php 

	/**
	 * 
	 */
	class Fornecedor{
		public static function cotacaoEnviada($cotacao){

			$sql = MySql::conectar()->prepare('SELECT idPedido FROM `tb_admin.cotacao` WHERE idFornecedor = ?');
			$sql->execute(array($cotacao));
		

		}

	}

 ?>