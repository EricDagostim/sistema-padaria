    <?php
    include "include\cabecalho.php";

    //include "verifica.php";
    ?>

    

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <div class="container container-painel">
        <div class="row">
            <div class="col-12">
                <h1>Bem vindo</h1>

                <div class="row mt-5">

                    <div class="col-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Usuários</h5>
                            <p class="card-text">Selecione o tipo de acão desejada em "Usuários"</p>
                            <a type="button" href="/sistema-padaria/cadastro_usuario.php" class="btn btn-success">Cadastrar</a>
                            <a type="button" href="/sistema-padaria/ver_usuarios.php" class="btn btn-warning">Editar</a>
                            <a type="button" href="/sistema-padaria/ver_usuarios.php" class="btn btn-info">Ver</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                          </div>
                        </div>
                    </div>
                    
    
                    <div class="col-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Matéria Prima</h5>
                            <p class="card-text">Selecione o tipo de acão desejada em "Matéria Prima"</p>
                            <a type="button" href="/sistema-padaria/cadastro_material.php" class="btn btn-success">Cadastrar</a>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <a type="button" href="/sistema-padaria/ver_material.php" class="btn btn-info">Ver</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                          </div>
                        </div>
                    </div>
    
    
                    <div class="col-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                            <p class="card-text">Selecione o tipo de acão desejada em "Produtos"</p>
                            <a type="button" href="/sistema-padaria/cadastro_produto.php" class="btn btn-success">Cadastrar</a>
                            <button type="button" class="btn btn-warning">Editar</button>
                            <a type="button" href="/sistema-padaria/ver_produtos.php" class="btn btn-info">Ver</a>
                            <button type="button" class="btn btn-danger">Excluir</button>
                          </div>
                        </div>
                    </div>
                </div>                              
            </div>


    
        </div>
    </div>
    
</body>
</html>
