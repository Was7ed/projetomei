<?php 
	require_once 'conexao.php';
	//require_once '_ref/header.php';
	
	// TESTEANDO A EXISTENCIA - LOGOUT
	if($login->isloginadm()){
	}else{ header('location: adm.log.php');}

	if(isset($_POST['bt-logout'])){
		$login->logoutadm();
		header('location: adm.log.php');
	}

	if(isset($_POST['check'])){
		echo $_POST['check'];
	}

	if(isset($_POST['bt-cadas'])){
		header('location: cadas.con.php');
	}

?>

	<h3><?php echo 'BEM-VINDO AO SISTEMA'; ?></h3>

	<p><?php
		
	?></p>

	<form method="post">

		<input type="radio" name="check" value="1">fiscal<br>
		<input type="radio" name="check" value="2">adm<br>
		<input type="radio" name="check" value="3">rh<br>
		<input type="radio" name="check" value="4">juridico<br>
		<input type="radio" name="check" value="5">marketing<br>
		<input type="radio" name="check" value="6">financeiro<br>
	</form>

	<form method="post">
		
		<button type="submit" name="bt-cadas">CADASTRAR CONSULTOR</button>
		
 	</form>

	<form method="post">
		<button type="submit" name="bt-logout">LOGOUT</button>
	</form>

<?php 
	require_once '_ref/footer.php';
?>