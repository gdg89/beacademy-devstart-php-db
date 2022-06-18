<h1> Productos</h1>
<div class="text-end">
    <a class="btn btn-primary btn-sm mb-2 " href="produtos/novo">Novo Produto</a>
    <a class="btn btn-success btn-sm mb-2 " href="produtos/relatorio">Gerar PDF</a>
</div>
<table class="table table-hover table-striped">
    <thead class="table-dark">
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Foto</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Cantidad em Stock</th>
        <th>Data</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php
        while($product = $data->fetch(\PDO::FETCH_ASSOC)){
        
            extract($product);
            echo '<tr>';
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>"; 
                echo "<td>{$description}</td>";
                echo "<td><img width='100' src='{$photo}'' alt='Produto'></td>";
                echo "<td>R$ {$value}</td>";
                echo "<td>{$category_id}</td>";
                echo "<td>{$quantity}</td>";
                echo "<td>{$created_at}</td>";
                echo "<td>
                        <a href='/produtos/editar?id={$id}' class='btn btn-warning btn-sm mt-2'>Editar</a>
                        <a href='/produtos/excluir?id={$id}' class='btn btn-danger btn-sm mt-2'>Excluir</a>
                    </td>";
            echo '</tr>'; 
         }
        ?>
    </tbody>
</table>