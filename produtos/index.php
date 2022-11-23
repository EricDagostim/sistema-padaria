<?php
    
    session_start();
    include "../cabecalho.php";



    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
        header("Location: ".$urlBase."login.php");
    }
    $logado = $_SESSION['login'];


    
    $query = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id DESC;");       
    
    
?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Produtos</h1>

            <div class="align-header-table">
                <a type="button" href="<?= $urlBase ?>index.php" class="btn btn-sm btn-secondary">Voltar</a>
                
                <p style="text-align: center;">Aqui você pode Cadastrar, Editar, Visualizar ou Deletar <strong>Produtos</strong> do sistema</p>
                
    
                <a href="<?= $urlBase. "produtos/cadastrar" ?>" class="btn btn-sm btn-success">Cadastrar +</a>
            </div>


            <div class="table-responsive">
                 <table class="table table-bordered col-12">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Nome Produto</th>
                             <th>Valor (unidade) R$</th>
                             <th>Peso (unidade) KG</th>
                             <th>Quantidade</th>
                             <th> | | </th>
                             <th>Peso Total Kg</th>
                             <th>Valor Total R$</th>

                             <th class="th-actions">Ações</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php while($prod = mysqli_fetch_assoc($query)): ?>
                            <tr>
                                 <td><?= $prod['id'] ?></td>
                                 <td><?= $prod['nome'] ?></td>
                                 <td> R$ <?= $prod['vl_unitario'] ?></td>
                                 <td><?= $prod['ps_unitario'] ?> Kg</td>
                                 <td><?= $prod['quantidade'] ?></td>
                                 <th> | | </th>
                                 <td><?= $prod['ps_unitario'] * $prod['quantidade']?></td>
                                 <td> R$ <?= $prod['vl_unitario'] * $prod['quantidade']?></td>
                                 <td class="td-actions">
                                     <a href="editar.php?id=<?= $prod['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                     <a href="deletar.php?id=<?= $prod['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
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