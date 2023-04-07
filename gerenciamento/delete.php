<?php

  if (!empty($_GET['id'])) {
    include_once("../conexao/conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM cadas_produto WHERE id=$id";
    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0) {
      $sqlDelete = "DELETE FROM cadas_produto WHERE id=$id";
      $resultDelete = $conn->query($sqlDelete);
    } 
  }
  header("Location: consul_produto.php");
?>


    
