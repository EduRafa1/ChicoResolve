
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/login&cadastro.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="justify-content-center align-items-center row">
            <div class="coluna1">
                <?php 

                    if (isset($_POST['acao'])) {
                        $usuario = $_POST['cnpj'];
                        $senha = $_POST['senha'];
                        $sqlUsuario = MySql::conectar()->prepare("SELECT * FROM `tb_admin.cadastro_usuarios` WHERE cpf = ? AND senha = ?");
                        $sqlUsuario->execute(array($usuario,$senha));
                        $sqlFornecedor = MySql::conectar()->prepare('SELECT * FROM `tb_admin.cadastro_fornecedor` WHERE cnpj = ? AND senha = ?');
                        $sqlFornecedor->execute(array($usuario,$senha));

                        if ($sqlUsuario->rowCount() == 1) {
                           $info = $sqlUsuario->fetch();
                           //Logamos com sucesso!
                           $_SESSION['login'] = true;
                           $_SESSION['cpf'] = $info['cpf'];
                           $_SESSION['senha'] = $senha;
                           $_SESSION['email'] = $info['email'];
                           $_SESSION['contato'] = $info['contato'];
                           $_SESSION['nome'] = $info['nome'];
                           $_SESSION['img'] = $info['img'];
                           $_SESSION['idUsuario'] = $info['idUsuario'];
                           $_SESSION['modo'] = $info['modo'];
                           $_SESSION['permissao'] = $info['permissao'];
                           $_SESSION['comissao'] = $info['comissao'];
                           $_SESSION['aprovado'] = $info['aprovado'];

                          Painel::redirect(INCLUDE_PATH_PAINEL.'index.php');
                        }else if ($sqlFornecedor->rowCount() == 1) {
                           $info = $sqlFornecedor->fetch();
                           //Logamos com sucesso!
                           $_SESSION['login'] = true;
                           $_SESSION['senha'] = $senha;
                           $_SESSION['nome'] = $info['nome'];
                           $_SESSION['img'] = $info['img'];
                           $_SESSION['email'] = $info['email'];
                           $_SESSION['contato'] = $info['contato'];
                           $_SESSION['cnpj'] = $info['cnpj'];
                           $_SESSION['idUsuario'] = $info['idUsuario'];
                           $_SESSION['modo'] = $info['modo'];
                           $_SESSION['permissao'] = $info['permissao'];
                           $_SESSION['comissao'] = $info['comissao'];
                           $_SESSION['aprovado'] = $info['aprovado'];

                           Painel::redirect(INCLUDE_PATH_PAINEL.'index.php');
                        }else {
                          Painel::alert('erro','Login ou senha incorreto');
                        }
                    }
                 ?>
                <form class="formlogin" method="post">
                    <div class="text-center mb-2">
                        <h2>Login</h2>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cnpj" placeholder="Informe CPF ou CNPJ" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" placeholder="Informe sua senha" class="form-control">
                    </div>
                     <div class="form-group">
                        <input class="btn btn-sucess btn-block btn-lg" type="submit" value="Entrar" name="acao" class="form-control">
                    </div>
                    <a href="<?php echo INCLUDE_PATH ?>cadastro"><span>Ainda não tem uma conta? <br> Clique aqui</span></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>