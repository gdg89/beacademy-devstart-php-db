<h1>Cadastrar Produto</h1>
<form action="" method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select mt-1 mb-3">
        <option value="" selected>--Selecione--</option>

        <?php
        while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
            extract($category);
            echo "<option value='{$id}'>{$name}</option>";
        }
        ?>
    </select>

    <label for="name" name ="name">Nome</label>
    <input id="name" name="name" type="text" class="form-control">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
    
    <label for="photo" name ="photo">Foto</label>
    <input id="photo" name="photo" type="text" class="form-control">

    <label for="value" name ="value">Preço</label>
    <input id="value" name="value" type="text" class="form-control">

    <label for="quantity" name ="quantity">Quantidade</label>
    <input id="quantity" name="quantity" type="text" class="form-control">

    <button class="btn btn-primary mt-2">Enviar</button>
</form>