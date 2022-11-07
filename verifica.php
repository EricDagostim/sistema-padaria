<?php

    include "config.php";



    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    


    $sql = mysqli_query($conexao, "select nome, login, senha from usuario where login='$login' and senha='$senha'");
    $res = mysqli_fetch_array($sql);

    // $_SESSION['nome'] = $res['nome'];


 
    
        
        if ($login == $res['login'] && $senha == $res['senha']){
           // echo $_SESSION['nome']; exit;

            // include "painel.php";
            header("Location: painel.php");
        
        }else{

            header("Location: login.php");
        }
        
    // }

    

?>