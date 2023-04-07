<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
       
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
        header('Location: cadastros/login.php');

    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>loja</title>
</head>
<body>
    <h1> Bem vindo a LOJA, <?php echo $logado;  ?></h1>
</head>
<body>
    
	<div class="navbar">
		<a href="gerenciamento/consul_produto.php">Gerenciar Produtos</a>
	</div>

	<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
<h2>Produtos</h2>
    <div>
        <table class="table">
            <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Código de barras</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Preço R$</th>  
                </tr>
            </thead>
<?php
    include ("conexao/conexao.php");
    $sql = "SELECT * FROM cadas_produto ORDER BY id DESC ";
    $result = $conn->query($sql);
    while ($user_data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$user_data['nome_p']."</td>";
        echo "<td>".$user_data['descricao']."</td>";
        echo "<td>".$user_data['codigo']."</td>";
        echo "<td>".$user_data['fabricante']."</td>";
        echo "<td>".$user_data['validade']."</td>";
        echo "<td>".$user_data['preco']."</td>";
        
	}
?>
    
</body>
</html>