<?php

session_start();

        if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
            header("Location: $urlBase login.php");
        }
        $logado = $_SESSION['login'];

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])){
    
        include "cabecalho.php";
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = mysqli_query($conexao, "select nome, login, senha from usuario where login='$login' and senha='$senha'");
        $res = mysqli_fetch_array($sql);
        
        if ($login == $res['login'] && $senha == $res['senha']){
        
            header("Location: index.php");
        
        }else{
            header("Location: login.php");
        }

        if(mysqli_num_rows($sql) < 1){
           unset($_SESSION['login']); 
           unset($_SESSION['senha']);
           header('Location: login.php');
        }else{
           $_SESSION['login'] = $login; 
           $_SESSION['senha'] = $senha;
           header('Location: index.php');
        }

    }else{
        header ("Location: login.php");
    }









 
    
        


    

?>