
<?php
function __autoload($class_name){
require_once '../controller/' . $class_name . '.php';

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meu Cadastro</title>

        <meta name="author" content="Guilherme Castanho">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="page-header">
                        <h1>
                            FITWHERE <small>Crie sua conta!</small>
                        </h1>
                    </div>

                </div>
                <div class="col-md-1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
                    <form role="form" method="post" action="pg_inicial.html">
                        <div class="form-group">
                            <label for="nome">
                                Nome
                            </label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="sobrenome">
                                Sobrenome
                            </label>
                            <input type="text" class="form-control" id="sobrenome">
                        </div>
                        <div class="form-group">
                            <label for="bairro">
                                Bairro
                            </label>
                            <input type="text" class="form-control" id="bairro">
                        </div>
                        <div class="form-group">

                            <label for="email">
                                Endereço de Email
                            </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">

                            <label for="senha">
                                Senha
                            </label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <div class="form-group">

                            <label for="datanascimento">
                                Data de Nascimento
                            </label>
                            <input type="date" class="form-control" id="datanascimento">
                        </div>
                            <button type="submit" name="cadastrar" class="btn btn-default">
                            Cadastre
                        </button>
                        
                        
                    </form>
                    <?php
                            $usuario = new Usuarios();
                            if (isset($_POST['cadastrar'])):
                            $nome = $_POST['nome'];
                            $sobrenome = $_POST['sobrenome'];
                            $email = $_POST['email'];
                            $bairro = $_POST['bairro'];
                            $senha = $_POST['senha'];
                            $dnascimento = $_POST['nome'];

                            $usuario->setNome($nome);
                            $usuario->setSobrenome($sobrenome);
                            $usuario->setEmail($email);
                            $usuario->setBairro($bairro);
                            $usuario->setSenha($senha);
                            $usuario->setNascimento($dnascimento);

                            if($usuario->insert()){
                                echo "inserido";
                            }endif;
                        ?>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
