<?php
    session_start();
	if(isset($_POST['submit'])  && !empty($_POST['email']) && !empty($_POST['senha'])){
		include_once('../conexao/conexao.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];

        $sql = "SELECT * FROM cadas_pess WHERE email = '$email' and senha = '$senha'";
        
        $result = $conn->query($sql);

       if(mysqli_num_rows($result) < 1){
            header('Location: ../index.php');
       }
        
       else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../index.php');
       }
    }
    else {
	    header('Location: ../cadastros/login.php');
    }

?>