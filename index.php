    <?php
        include "cabecalho.php";
    ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
</head>
<body>
    <div class="container container-painel">
        <div class="row">
            <div class="col-12">
                <h1>Bem vindo</h1>

                <div class="row mt-5">

                    <div class="col-4">
                        <a href="<?= $urlBase ?>usuarios/index.php" class="card card-painel">
                          <div class="card-body">
                            <h5 class="card-title">Usuários</h5>
                            <p class="card-text">Cadastrar, visualizar, editar ou remover Usuários</p>
                          </div>
                        </a>
                    </div>
                    
                    

                    <div class="col-4">
                        <a href="<?= $urlBase ?>material/index.php" class="card card-painel">
                          <div class="card-body">
                            <h5 class="card-title">Matéria-Prima</h5>
                            <p class="card-text">Cadastrar, visualizar, editar ou remover Matéria-Prima</p>
                          </div>
                        </a>
                    </div>


                    <div class="col-4">
                        <a href="<?= $urlBase ?>produtos/index.php" class="card card-painel">
                          <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                            <p class="card-text">Cadastrar, visualizar, editar ou remover Produtos</p>
                          </div>
                        </a>
                    </div>

                </div>                              
            </div>


    
        </div>
    </div>
    
</body>
</html>


<style>
    .card-painel{
        text-decoration: none;
        color: #fff;
        border-radius: 5px !important;
        background-color: #157347;
    }


    .card-painel:hover{
        background-color: #105836;
        color: #fff;
    }




</style>
