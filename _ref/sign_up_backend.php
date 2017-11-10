<?php 

	session_start();

	require 'connect.php';

	//Vê se o botão foi pressionado e 
	if(isset($_POST['btn-register'])){
		
		//Armazena as informações nos campos login e senha
		$username = trim($_POST['login_cadastro']);
		$pass = trim($_POST['senha_cadastro']);
		
		echo "User: ". $username . '<br>' . "Senha: ". $pass;

		//todo: Checagem de erro e tratamento
		//Vê se tem duplicatas do nome
		$sql = "SELECT COUNT(login) AS num FROM users WHERE login = :username";
		$stmt = $pdo->prepare($sql);

		//Atribui o valor de $username para a variável SQL :username
		$stmt->bindValue(':username', $username);

		//Executa o código que foi preparado
		$stmt->execute();

		//Busca duplicatas do nome na tabela e retorna a coluna que isso ocorreu
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($row['num'] > 0) {
			die('Esse usuário já existe');
		}

		//Cria a criptografia fazendo o hash
		$passwordHash = password_hash($pass , PASSWORD_DEFAULT);

		//Prepara o insert no banco de dados das variáveis
		$sql = ""
	}

 ?>