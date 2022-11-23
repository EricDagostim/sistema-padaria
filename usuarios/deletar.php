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
        
        $delete = mysqli_query($conexao, "DELETE FROM usuario WHERE id= $id");
        
        header("Location: $urlBase"."usuarios/index.php");
    
    }


?>