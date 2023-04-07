<?php
include_once("../conexao/conexao.php");

if (isset($_POST['cadastrar'])) {
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
   // $senha_crip = password_hash($senha, PASSWORD_DEFAULT);

	$query = "INSERT INTO cadas_pess SET nome= '$nome', email= '$email', senha= '$senha' /*'$senha_crip'*/";
    if(mysqli_query($conn, $query)){
        echo "Usuário cadastrado com sucesso";
        header("Location: ../cadastros/login.php");
    }
    else{
        echo "ERRO". mysql_connect_error($conn);
    }
}

$conn->close();
?>