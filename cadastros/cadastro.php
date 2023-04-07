<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Cadastro de Usuário</title>
	
</head>
<body>
	<h2>Cadastro de Usuário</h2>
	<form action="../gerenciamento/processa_cadastro.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br><br>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required><br><br>

		<button type="submit" name="cadastrar">Cadastrar</button>
	</form>

	<p>Já tem uma conta? Faça o <a href="login.php">login</a> aqui.</p>
</body>
</html>