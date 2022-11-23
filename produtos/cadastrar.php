<?php
    
    session_start();
    include "../cabecalho.php";

    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        header("Location: ".$urlBase."login.php");
    }
    $logado = $_SESSION['login'];
    
    
    if(isset($_POST['cadastro'])){
        
        $nome = $_POST['nome'];
        $vl_unitario = $_POST['vl_unitario'];
        $ps_unitario = $_POST['ps_unitario'];  
        $quantidade = $_POST['quantidade'];
        
        $result = mysqli_query($conexao, "INSERT INTO produtos (nome, vl_unitario, ps_unitario, quantidade) VALUES ('$nome', '$vl_unitario', '$ps_unitario','$quantidade')");
        
        if ($result) {
            echo "Produto cadastrado com sucesso!";
            // header("Location: {$urlBase}produtos/index.php");
        }else {
            echo "Ocorreu um erro! Por favor, tente novamente";
        }

    }            
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
</head>

<body> 
        <div class="container container-cadastro">
            <div class="row">
                <div class="col-6 offset-3">
                                   
                    <h1>Cadastro Produto</h1>
                  
                    <form class="form-cadastro" method="POST" >
                         
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Aa</span>
                          </div>
                          <input type="text" name="nome" class="form-control" placeholder="Nome produto *" aria-label="Nome" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">R$</span>
                         <input type="text" name="vl_unitario" class="form-control" aria-label="Insira um valor em reais" placeholder="Valor por unidade *" required>
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">Kg</span>
                         <input type="text" name="ps_unitario" class="form-control" aria-label="Insira um valor em Kilogramas" placeholder="Peso por unidade">
                        </div>

                        <div class="input-group mb-3">
                         <span class="input-group-text">Qtd
                         </span>
                         <input type="number" name="quantidade" class="form-control" aria-label="Insira um valor inteiro" placeholder="Quantidade de material *" required>
                        </div>

                        <div class="align-btns">
                            <a type="button" href="<?=$urlBase?>produtos/index.php" class="btn btn-secondary">Voltar</a>
                            <button type="submit" name="cadastro" class="btn btn-success">Cadastrar</button>
                        </div>                             
                    </form>      
                </div>
            </div>
        </div>
    </body>
</html>


    
