<?php 

 if (isset($_POST['update'])) {
    include_once("../conexao/conexao.php");
    
    $id = $_POST['id'];
    $nome_p = $_POST['nome_p'];
    $descricao = $_POST['descricao'];
    $codigo = $_POST['codigo'];
    $fabricante = $_POST['fabricante'];
    $validade = $_POST['validade'];
    $preco = $_POST['preco'];

    $sqlUpdate = "UPDATE cadas_produto SET nome_p= '$nome_p', descricao= '$descricao' , codigo= '$codigo', fabricante= '$fabricante', validade= '$validade', preco= '$preco' WHERE id= '$id'";
    $ressult = $conn->query($sqlUpdate);
}
header('Location: ../gerenciamento/consul_produto.php');

?>