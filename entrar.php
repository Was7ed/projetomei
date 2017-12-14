<?php 
	require_once '_class/conexao.php';
	require_once '_ref/header.php';

	if(isset($_POST['bt_enviar'])){

		$ulog  = $_POST['login'];
		$upass = $_POST['pass'];

		if($login->login($ulog, $upass)){
			header('location: chat.php');
		}
		else{
		?>
			<h3>TENTE NOVAMENTE</h3>
		<?php
		}
	}
?>

<section id="entrar_container">
 <div id="login_master">
 	<h1>ENTRAR</h1>
 	<form method="post" action="">

 		<input required="Ponha seu email" type="text" name="login" placeholder="Login"><br>

 		<input required="Ponha sua senha" type="password" name="pass" placeholder="Senha"><br>
 		
 		<a href="recover.php"><p>Esqueceu a senha</p></a>
 		 		
 		<button type="submit" name="bt_enviar">Enviar</button>

 		<a href="cadastro.php"><p>Não é cadastrado? CADASTRE-SE AQUI</p></a>
 	</form>

 </div>
</section>
 <?php 
	require_once '_ref/footer.php';
 ?>
