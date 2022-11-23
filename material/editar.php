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
      $select = mysqli_query($conexao, "SELECT * FROM material WHERE id=$id");       
    
      
      if ($select->num_rows > 0){
       
        while($material = mysqli_fetch_assoc($select)){
            $nome = $material['nome'];
            $vl_unitario = $material['vl_unitario'];
            $ps_unitario = $material['ps_unitario'];  
            $quantidade = $material['quantidade']; 
        }

       }else{
        header('Location: index.php');
      }

    }

    if(isset($_POST['editar'])){
       
        $nome = $_POST['nome'];
        $vl_unitario = $_POST['vl_unitario'];
        $ps_unitario = $_POST['ps_unitario'];  
        $quantidade = $_POST['quantidade']; 

        $sqlAtualiza = mysqli_query($conexao, "UPDATE material SET nome='$nome', vl_unitario='$vl_unitario', ps_unitario='$ps_unitario', quantidade='$quantidade'
        WHERE id='$id'");

        echo "Material atualizado com sucesso";
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>

    
</head>

<body>

   
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">

                    <h1>Editar Material</h1>
                   
                    <form class="form-padrao" method="POST" name="form">
                         
                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Aa</span>
                          </div>
                          <input type="text" name="nome" class="form-control" placeholder="Nome Material *" aria-label="Nome" aria-describedby="basic-addon1" required value=" <?= $nome ?> ">
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">R$</span>
                         <input type="text" name="vl_unitario" class="form-control" aria-label="Insira um valor em reais" placeholder="Valor por unidade *" required value="<?= $vl_unitario ?>">
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">Kg</span>
                         <input type="text" name="ps_unitario" class="form-control" aria-label="Insira um valor em Kilogramas" placeholder="Peso por unidade" value="<?= $ps_unitario ?>">
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">Qtd
                         </span>
                         <input type="number" name="quantidade" class="form-control" aria-label="Insira um valor inteiro" placeholder="Quantidade de material *" required value="<?= $quantidade ?>">
                        </div>

                        <div class="align-btns">
                            <a type="button" href="<?= $urlBase ?>/material/index.php" class="btn btn-secondary">Voltar</a>
                            <button type="submit" value="editar" name="editar" class="btn btn-success">Salvar</button>
                        </div>

                    </form>

                  
        
                </div>
            </div>
        </div>
    </body>

</html>


    
