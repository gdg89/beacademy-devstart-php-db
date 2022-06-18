
<h1>Listar categoria</h1>
<div class="text-end">
    <a class="btn btn-primary btn-sm mb-2" href="categoria/nova">Nova Categoria</a>
</div>
<table class="table table-hover table-striped ">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
            extract($category);//cria variaves com os nomes dos indices do array.

            echo '<tr>';
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>"; 
                echo "<td>{$description}</td>";
                echo "<td>
                        <a href='/categoria/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='/categoria/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                    </td>";
            echo '</tr>';        
        }
       
        ?>
    </tbody>
</table>