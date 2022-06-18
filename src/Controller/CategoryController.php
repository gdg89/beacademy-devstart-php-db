<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;
use App\Connection\Connection;


class CategoryController extends AbstractController

//EXIBE LISTA DE CATEGORIAS - READ
{ 
  public function listAction(): void{
    $con = Connection::getConnection();//realizando connection com banco de dados.
    
    $result = $con -> prepare($query ='SELECT * FROM tb_category;');//prepara comando para exibir tabela de dados
    $result-> execute();//executa

    parent::render('category/list',$result);//renderiza html e executa $result.

   }  

//AGREGA NOVA CATEGORIA - CREATE
  public function addAction(): void{
    //se tiver post faça:
    if ($_POST){
      $name = $_POST['name'];//recupera valor do name
      $description = $_POST['description'];//recupera valor do name

      $query = "INSERT INTO tb_category (name,description) VALUES('{$name}','{$description}')";//inserir novos ddos na table_category

      $con = Connection::getConnection();//gerando conection whit database
      $result = $con -> prepare($query);
      $result->execute();

      parent::renderMessage('Pronto categoria inserida','/categoria');
      exit;
    }
    parent::render('category/add');//renderizando html
  }

//EDITAR CATEGORIA - UPDATE
  public function updateAction(): void
  {

      $id=$_GET['id'];//recupera id da url do elemento a editar.
      $con = Connection::getconnection();// conexão com database.

      if($_POST){
        $newName = $_POST['name'];
        $newDescription = $_POST['description'];

        $queryUpdate= "UPDATE tb_category SET name='{$newName}', description ='{$newDescription}' WHERE id='{$id}'";
        $result = $con -> prepare($queryUpdate);
        $result -> execute();

        parent::renderMessage('Pronto, Categoria atualizada', '/categoria');
        exit;
      }

      $query = "SELECT * FROM tb_category WHERE id ='{$id}'";//exibe dados do ID do item seleconado.

      $result = $con->prepare($query);
      $result->execute();

      $data = $result->fetch(\PDO::FETCH_ASSOC);//recupera dados do id, e cria um array nomeando os indices com os nomes das colunas da tabela, assoc recupera os dados asociados a cada coluna.
      

      parent::render('category/edit', $data);
  }

// ELIMINA CATEGORIA - DELETE
  public function removeAction(): void
  {
    $con = Connection::getConnection();

    $id = $_GET['id'];

    $query = "DELETE FROM tb_category where id='{$id}'";

    $result =$con->prepare($query);
    $result->execute();
   parent::renderMessage('Categria excluida','/categoria');
  }
}