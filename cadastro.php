
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/login&cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <?php 
        if (isset($_POST['acao'])) {
            $modo = $_POST['escolha'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nome = $_POST['nome'];
            $img = $_FILES['imagem'];
            $cnpj = $_POST['cnpj'];
            $comissao = 0;
            $aprovado = 0;
          
            $contato = $_POST['contato'];
            $idUsuario = 'us'.uniqid();
            if ($modo == '1') {
                $permissao = 1;
                if ($email == '') {
                    Painel::alert('erro','E-mail não foi preenchido<br> Exemplo: usuario@usuario.com');
                }else if($senha == ''){
                    Painel::alert('erro','Senha não foi preenchida');
                }else{
                    if (Usuario::usuarioExiste($email)) {
                         Painel::alert('erro','O E-mail - '.$email.' Já está cadastrado!');
                    }else{
                        $img = Usuario::uploadFile($img);
                         Painel::alert('sucesso','Cadastro realizado com sucesso!');
                        Usuario::cadastroFornecedor($nome,$email,$img,$cnpj,$contato,$senha,$idUsuario,$modo,$permissao,$comissao,$aprovado);
                       
                    }
                }
            }if ($modo == '0'){
                $permissao = 0;
                if ($email == '') {
                    Painel::alert('erro','E-mail não foi preenchido<br> Exemplo: usuario@usuario.com');
                }else if($senha == ''){
                    Painel::alert('erro','Senha não foi preenchida');
                }else{
                    if (Usuario::usuarioExiste($email)) {
                         Painel::alert('erro','O E-mail - '.$email.' Já está cadastrado!');
                    }else{
                        $img = Usuario::uploadFile($img);
                        Painel::alert('sucesso','Cadastro realizado com sucesso!');
                        Usuario::cadastroUsuario($email,$senha,$nome,$img,$cnpj,$contato,$idUsuario,$modo,$permissao,$comissao,$aprovado);
                       
                    }
                    
                }
            }

        }


     ?>
    <div class="container">
        <div class="justify-content-center align-items-center row ">
            <div class="box-cadastro">
                <form class="formlogin" method="post" enctype="multipart/form-data">
                    <div class="text-center mb-2">
                        <h2>Cadastro</h2>
                    </div>

                    <div id="radios" class="form-group">
                        <h5>Você é:</h5>
                        <label>Fornecedor</label> 
                        <input type="radio" id="radio-fornecedor" name="escolha" value="1" checked="checked" class="radio">
                        <label>Cliente</label>
                        <input type="radio" id="radio-cliente" name="escolha" value="0"  class="radio">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Digite seu melhor email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="cnpj" id="cnpj" placeholder="Digite seu CPF ou CNPJ" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <input type="text" name="contato" id="contato" placeholder="Digite seu Contato" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="senha" placeholder="Digite sua senha " class="form-control" required>
                        </div>
                        <div class="form-group tipo-file">
                            <label class="form-control" for="selecionar-imagem"> Escolha uma foto para o perfil
                            <input type="file" name="imagem" id="selecionar-imagem" >
                            </label>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-sucess btn-block btn-lg" type="submit" value="Cadastrar" name="acao" class="form-control">
                    </div>
                    
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>login"><span>Já tem uma conta? <br> Clique aqui</span></a>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.min.js"></script>
     
    <script type="text/javascript">
        $(document).ready(function(){
             $('input[name=escolha]').click(function(){
               valor = $(this).val();
             
               if (valor == 1) {
                $('#cnpj').mask('99.999.999/9999-99');
               }else if(valor == 0){
                $('#cnpj').mask('999.999.999-99');
               }
            }) 
            $('#contato').mask('(00) 00000-0000');
        })
    </script>
</body>
</html>