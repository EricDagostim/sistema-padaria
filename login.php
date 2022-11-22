<?php



    include "cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema padaria - login</title>
</head>

<body>
        <div class="container container-login">
            <div class="row">
                <div class="col-6 offset-3">
                
                    <h1>Olá, realize seu login</h1>
                   
                    <form class="form-login" action="verifica.php" method="POST" name="form">
                         
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" name="login" class="form-control" placeholder="Insira seu usuário" aria-label="Insira seu usuário" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                          </div>
                          <input type="password" name="senha" class="form-control" placeholder="Insira sua senha" aria-label="Insira sua senha" aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Entrar</button>

                    </form>

        
                    
                  
        
        
                </div>
            </div>
        </div>
    </body>

</html>


    
