<?php
    include "include\cabecalho.php";
    include "config.php";

    

    
    if(isset($_POST['submit'])){
        
        $nome = $_POST['pesquisa'];                    
        
        $result = mysqli_query($conexao, "select id, nome, vl_unitario, ps_unitario, quantidade from material where nome='$nome'");
         
    }else{
        $sql = mysqli_query($conexao, "select id, nome, vl_unitario, ps_unitario, quantidade from material");
    }    

    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Matéria Prima</title>
</head>

<body>

   
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">




                    <div class="align-btns mt-5">
                        <a type="button" href="/sistema-padaria/painel.php" class="btn btn-secondary">Voltar</a>
                        
                    </div>

                    <form action="">


                        <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="pesquisa" placeholder="Pesquise por nome" aria-label="Pesquisar por nome" aria-describedby="button-addon2">
                            <div class="input-group-append" method="_POST">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
                            </div>
                        </div>
                    </form>

                     <table class="table">
                               <thead class="thead-dark">
                                 <tr>
                                   <th scope="col">ID</th>
                                   <th scope="col">Nome</th>
                                   <th scope="col">Valor unitário R$</th>
                                   <th scope="col">Peso unitário KG</th>
                                   <th scope="col">Quantidade</th>

                                 </tr>
                               </thead>
                               <tbody>
                                 <?php while($res = mysqli_fetch_assoc($sql)) { ?>



                                     <tr>
                                         <th scope="row"><?= $res['id'] ?></th>
                                         <td><?= $res['nome'] ?></td>
                                         <td><?= $res['vl_unitario'] ?></td>
                                         <td><?= $res['ps_unitario'] ?></td>
                                         <td><?= $res['quantidade'] ?></td>
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


    
