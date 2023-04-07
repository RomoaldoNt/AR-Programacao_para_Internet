<?php
include("../conexao/conexao.php");

    

if (isset($_POST['cadastrar'])) {
    
    $nome_p = $_POST['nome_p'];
    $descricao = $_POST['descricao'];
    $codigo = $_POST['codigo'];
    $fabricante = $_POST['fabricante'];
    $validade = $_POST['validade'];
    $preco = $_POST['preco'];

    $query = "INSERT INTO cadas_produto (nome_p, descricao, codigo, fabricante, validade, preco) VALUES ('$nome_p', '$descricao', '$codigo', '$fabricante', '$validade','$preco')";
    if(mysqli_query($conn, $query)){
        
        header("Location: cadas_produtos.php");
        echo "Produto cadastrado com sucesso";
    }
    else{
        echo "ERRO". mysql_error($conn);
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
    <form enctype="multpart/form-data" action="cadas_produtos.php" method="post">
      <label for="nome_p">Nome:</label>
      <input type="text" id="nome_p" name="nome_p"><br>
      
      <label for="descricao">Descrição:</label>
      <input type="text" id="descricao" name="descricao"><br>
      
      <label for="codigo">Código de Barras:</label>
      <input type="text" id="codigo" name="codigo"><br>
      
      <label for="fabricante">Fabricante:</label>
      <input type="text" id="fabricante" name="fabricante"><br>
      
      <label for="validade">Validade:</label>
      <input type="date" id="validade" name="validade"><br>
      
      <label for="preco">Preço:</label>
      <input type="number" id="preco" name="preco"><br>

      
      <button type="submit" name="cadastrar">Cadastrar</button>  
    </form>
  </body>
</html>
