<?php

if (!empty($_GET['id'])) {
  include_once("../conexao/conexao.php");

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM cadas_produto WHERE id=$id";
  $result = $conn->query($sqlSelect);

  if($result->num_rows > 0) {
    while($user_data = mysqli_fetch_assoc($result)) {
      $nome_p = $user_data['nome_p'];
      $descricao = $user_data['descricao'];
      $codigo = $user_data['codigo'];
      $fabricante = $user_data['fabricante'];
      $validade = $user_data['validade'];
      $preco = $user_data['preco'];
    }
  } 
  else {
    header('Location: ../gerenciamento/consul_produto.php');
  }
   
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  <head>
    <title>Cadastro de Produtos</title>
  </head>
  <body>
  <div class="navbar">
    <a href="../gerenciamento/consul_produto.php">Voltar</a>
  </div>
    <h2>Cadastro de Produtos</h2>
    <form action="../gerenciamento/save_edit.php" method="post">
      <label for="nome_p">Nome:</label>
      <input type="text" id="nome_p" name="nome_p" value="<?php echo $nome_p ?>"><br>
      
      <label for="descricao">Descrição:</label>
      <input type="text" id="descricao" name="descricao" value="<?php echo $descricao ?>"><br>
      
      <label for="codigo">Código de Barras:</label>
      <input type="text" id="codigo" name="codigo" value="<?php echo $codigo ?>"><br>
      
      <label for="fabricante">Fabricante:</label>
      <input type="text" id="fabricante" name="fabricante" value="<?php echo $fabricante ?>"><br>
      
      <label for="validade">Validade:</label>
      <input type="date" id="validade" name="validade" value="<?php echo $validade ?>"><br>
      
      <label for="preco">Preço:</label>
      <input type="number" id="preco" name="preco" value="<?php echo $preco ?>"><br>

      <input type="hidden" name="id" value="<?php echo $id ?>">
      
      <button type="submit" name="update" id="update">Editar</button>
    </form>
  </body>
</html>
