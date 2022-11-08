<?php
    include "include\cabecalho.php";
    include "config.php";

    

    $sql = mysqli_query($conexao, "select id, nome, login from usuario");
        

    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar usuários</title>
</head>

<body>

   
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">


                    <div class="align-btns">
                        <a type="button" href="/sistema-padaria/painel.php" class="btn btn-secondary">Voltar</a>
                        
                    </div>

                     <table class="table">
                               <thead class="thead-dark">
                                 <tr>
                                   <th scope="col">ID</th>
                                   <th scope="col">Nome</th>
                                   <th scope="col">Login</th>

                                 </tr>
                               </thead>
                               <tbody>
                                 <?php while($res = mysqli_fetch_assoc($sql)) { ?>



                                     <tr>
                                         <th scope="row"><?= $res['id'] ?></th>
                                         <td><?= $res['nome'] ?></td>
                                         <td><?= $res['login'] ?></td>
                                     </tr>


                                 <?php
                                 } 
                                 ?>

                               </tbody>

                             
                     </table>                    

                </div>

                                  

                  
        
                </div>
            </div>
        </div>
    </body>

</html>


    
