<?php
    
    session_start();
    include "../cabecalho.php";



    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        header("Location: ".$urlBase."login.php");
    }
    $logado = $_SESSION['login'];


    
    $query = mysqli_query($conexao, "SELECT * FROM usuario ORDER BY id DESC;");       
    
    
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Usuários</h1>

            <div class="align-header-table">
                <a type="button" href="<?= $urlBase ?>index.php" class="btn btn-sm btn-secondary">Voltar</a>
                
                <p style="text-align: center;">Aqui você pode Cadastrar, Editar, Visualizar ou Deletar <strong>Usuários</strong> do sistema</p>
                
    
                <a href="<?= $urlBase. "usuarios/cadastrar" ?>" class="btn btn-sm btn-success">Cadastrar +</a>
            </div>


            <div class="table-responsive">
                 <table class="table table-bordered col-12">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Nome</th>
                             <th>Login</th>
                             <th class="th-actions">Ações</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php while($user = mysqli_fetch_assoc($query)): ?>
                            <tr>
                                 <td><?= $user['id'] ?></td>
                                 <td><?= $user['nome'] ?></td>
                                 <td><?= $user['login'] ?></td>
                                 <td class="td-actions">
                                     <a href="editar.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                     <a href="deletar.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
                                 </td>
                             </tr>
                         <?php endwhile;?>
                     </tbody>
                 </table>
             </div>

        </div>
    </div>
</div>

<style>

    .align-header-table{
        display : flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
    }
</style>