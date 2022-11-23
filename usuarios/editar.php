<?php
    
    session_start();
    include "../cabecalho.php";



    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        header("Location: ".$urlBase."login.php");
    }
    $logado = $_SESSION['login'];
    
    
    if(!empty($_GET['id']))
    {
      
      $id = $_GET['id'];
      

      $select = mysqli_query($conexao, "SELECT * FROM usuario WHERE id=$id");       
    
      
      // $result = $conexao->query($select);
      
      if ($select->num_rows > 0){
       
        while($user = mysqli_fetch_assoc($select)){
          $nome = $user['nome'];
          $login = $user['login'];
          $senha = $user['senha']; 
        }
        // $user = mysqli_fetch_assoc($select);

       }else{
        header('Location: index.php');
      }

    }

    if(isset($_POST['editar'])){
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha']; 

        $sqlAtualiza = mysqli_query($conexao, "UPDATE usuario SET nome='$nome', login='$login', senha='$senha'
        WHERE id='$id'");

        echo "Usuário atualizado com sucesso";
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>

    
</head>

<body>

   
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">

                    <h1>Editar Usuários</h1>
                   
                    <form class="form-padrao" method="POST" name="form">
                         
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Aa</span>
                          </div>
                          <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1" required value=" <?= $nome?> ">
                        </div>
                        
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" name="login" class="form-control" placeholder="Login (o acesso é com este campo)" aria-label="Login" aria-describedby="basic-addon1" required value="<?= $login ?>">
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                          </div>
                          <input type="password" name="senha" class="form-control" placeholder="Nova senha" aria-label="Insira uma nova senha" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="align-btns">
                            <a type="button" href="<?= $urlBase ?>/usuarios/index.php" class="btn btn-secondary">Voltar</a>
                            <button type="submit" value="editar" name="editar" class="btn btn-success">Salvar</button>
                        </div>

                    </form>

                  
        
                </div>
            </div>
        </div>
    </body>

</html>


    
