<?php 
	require_once 'conexao.php';
	// require_once '_ref/header.php';
	
	// TESTEANDO A EXISTENCIA
	if($login->islogin()){
	}else{
		header('location: entrar.php');
	}
	//MANIPULANDO
	if(isset($_POST['bt-logout'])){
		$login->logout();
		header('location: entrar.php');
	}

	$stmt= $DB_con->prepare("SELECT * FROM users WHERE user_id=:uid LIMIT 1");
	$stmt->execute(array(':uid'=>$_SESSION['user']));
 	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

 	if(isset($_POST['bt-enviar'])){
 		$msg= $_POST['msg'];
 		
 	}
 	
?>
	<h2>VC ESTÁ BEM</h2>

	<h3><?php echo 'SEJA BEM-VINDO ', $userRow['user_name']; ?></h3>

	<form method="post" action="">
		<input required type="text" name="msg" placeholder="Envie sua mensagem"><br>
		
		<button type="submit" name="bt-enviar">ENVIAR</button>
 	</form>

	<button method="post" type="submit" name="bt-logout">LOGOUT</button>
	<a href="index.php"><p>QUER VOLTAR PARA O SITE?</p></a>
	

<?php 
	require_once '_ref/footer.php';
?>