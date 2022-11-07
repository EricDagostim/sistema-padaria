<?php
    
    include "include\cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuário</title>
</head>

<body>

   
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">

                <!-- <div class="alert alert-success" role="alert" style="position: relative; margin-top: 10px;">
                   Usuário cadastrado com sucesso!
                </div> -->
                
                    <h1>Cadastro Usuários</h1>
                   
                    <form class="form-cadastro" action="verifica.php" method="POST" name="form">
                         
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Aa</span>
                          </div>
                          <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1">
                        </div>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" name="login" class="form-control" placeholder="Login (o acesso é com este campo)" aria-label="Login" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                          </div>
                          <input type="password" name="senha" class="form-control" placeholder="Crie uma senha" aria-label="Crie uma senha" aria-describedby="basic-addon1">
                        </div>

                        <div class="align-btns">
                            <button type="submit" class="btn btn-secondary">Voltar</button>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>

                    </form>

        
                    
                  
        
        
                </div>
            </div>
        </div>
    </body>

</html>


    
