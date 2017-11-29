<?php 
	require_once 'conexao.php';
	//require_once '_ref/header.php';
	
	// TESTEANDO A EXISTENCIA - LOGOUT
	if($login->islogincon()){
	}else{ header('location: adm.log.php');}

	if(isset($_GET['bt-logout'])){
		$login->logoutcon();
		header('location: adm.log.php');
	}

	$conRow= $login->consul();

	if(isset($_GET['check'])){
		echo $_GET['check'];
	}

	$area=$login->area($conRow['con_atua']);
	echo $area;

?>
	<h3><?php echo 'BEM-VINDO AO SISTEMA ',$conRow['con_name']; ?></h3>

	<p><?php
		  
	?></p>

	<form method="get">
		<button type="submit" name="bt-sol">solicitar novo</button>
	</form>

	<form method="post" action="">
		<input required type="text" name="msg" placeholder="Envie sua mensagem"><br>
		
		<button type="submit" name="bt-enviar">ENVIAR</button>
 	</form>

	<form method="get">
		<button type="submit" name="bt-logout">LOGOUT</button>
	</form>
	
	<a href="index.php"><p>QUER VOLTAR PARA O SITE?</p></a>

<?php 
	require_once '_ref/footer.php';
?>