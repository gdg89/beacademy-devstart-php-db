<h1>Editar Produto</h1>

<?php extract($data);?>

<form action="" method="post">
    <!-- <label for="category">Categoria</label>
        <select name="category" id="category" class="form-select mt-1 mb-3">
            <option value="" selected>--Selecione--</option>

            <?php
           // while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
               // extract($category);
               // echo "<option value='{$id}'>{$name}</option>";
                
            //}  <-------- BUG -SELECT NAO FUNCIONA CUANDO DECLARO O extract() na linea 3 *** ver no productControler *** ------->
            ?>
        </select> -->
    
    <label for="name" name ="name">Nome</label>

    <input id="name" value="<?php echo $product['name'];?>" name="name" type="text" class="form-control">

    <label for="description">Descrição</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="5"><?php echo $product['description'];?></textarea>
    
    <label for="photo" name ="photo">Foto</label>
    <input id="photo" value="<?php echo $product['photo'];?>" name="photo" type="text" class="form-control">

    <label for="value" name ="value">Preço</label>
    <input id="value" value="<?php echo $product['value'];?>" name="value" type="text" class="form-control">

    <label for="quantity" name ="quantity">Quantidade</label>
    <input id="quantity" value="<?php echo $product['quantity'];?>" name="quantity" type="text" class="form-control">

    <button class="btn btn-primary mt-2">Atualizar</button>
</form>