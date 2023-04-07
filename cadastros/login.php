

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Login de Usuário</title>
</head>
<body>
	
	<h2>Login de Usuário</h2>
	<form action="../gerenciamento/processa_login.php" method="POST">
		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="senha">Senha:</label>
		<input type="password" id="senha" name="senha" required><br><br>

		<button type="submit" name="submit">Entrar</button>
	</form>

	<p>Não tem uma conta? Faça seu <a href="cadastro.php">Cadastro</a> aqui.</p>
</body>
</html>