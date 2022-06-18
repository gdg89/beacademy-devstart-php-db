
<h1>Editar Categoria</h1>

<form action="" method="post">
    <label for="name" name ="name">Nome</label>
    <input id="name" name="name" value="<?php echo $data['name']?>" type="text" class="form-control">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" class="form-control" cols="30" rows="5"><?php echo $data['description']?></textarea>

    <button class="btn btn-primary mt-2">Atualizar</button>
</form>