<?php 
	require_once 'conexao.php';
	//require_once '_ref/header.php';
	
	// TESTEANDO A EXISTENCIA - LOGOUT
	if($login->islogin()){
	}else{ header('location: entrar.php');}
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
	$test="";
	$user= $login->user();
	$casoRow="";
	$caso="";

	if(isset($_POST['bt-abrir'])){
		$caso=$_POST['check'];
	}

	if(isset($_POST['bt-enviar']) && isset($_SESSION['case'])){
 		$mtxt= $_POST['msg'];
 		if(strlen($mtxt) < 144){
 			$ps->inserir($mtxt, $_SESSION['case']);
 			echo 'texto enviado';
 		}else{
 			echo 'Texto muito grande';
 		}
	}	
?>		
	<h3><?php echo 'SEJA BEM-VINDO ', $user; ?></h3>
	
	<form method="post">
		<button type="submit" name="bt-abrir">ABRIR</button><br>
		<?php 														//PARA NÃO REPETIR AS CHEKBOXSES
			$test=$ps->casoha($caso,$_SESSION['user']);
			echo $test;
			if(isset($_POST['bt-abrir']) && isset($_POST['check'])){
				unset($_SESSION['case']);
				if($test)
			 	{
					$ps->abrir($caso,$_SESSION['user']);
				}
				else{ ?>
					<h4>VOCÊ NÃO TEM UM CASO ABERTO</h4>
					<h5>Clique em um assunto e dps abra o caso</h5>
					<button type="submit" name="bt-caso">Abrir Novo Caso</button><br>
				<?php }
			}	
			if(isset($_POST['bt-caso']) && isset($_POST['check']) && !$test){
				$ps->novocaso($caso,  $_SESSION['user']);
			}	
		?>

		<br>
		<input type="radio" name="check" value="1">fiscal<br>
		<input type="radio" name="check" value="2">adm<br>
		<input type="radio" name="check" value="3">rh<br>
		<input type="radio" name="check" value="4">juridico<br>
		<input type="radio" name="check" value="5">marketing<br>
		<input type="radio" name="check" value="6">financeiro<br>
	</form>

	<div style="border-color: solid-black"><?php
		if(isset($_SESSION['case'])){
			$ps->showmsg($_SESSION['case']);
		}
	?></div>

	<form method="post">
		<input required type="text" name="msg" placeholder="Envie sua mensagem"><br>
		<button type="submit" name="bt-enviar">ENVIAR</button>	
 	</form>

	<form method="post">
		<button type="submit" name="bt-logout">LOGOUT</button>
	</form>
	
	<a href="index.php"><p>QUER VOLTAR PARA O SITE?</p></a>

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