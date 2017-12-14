<?php 
	require_once '_class/conexao.php';
	//require_once '_ref/header.php';
	
	// TESTEANDO A EXISTENCIA - LOGOUT
	if($login->islogin()){
	}else{ header('location: entrar.php');}
	//MANIPULANDO
	if(isset($_POST['bt-logout'])){
		$login->logout();
		header('location: entrar.php');
	}
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
			if(isset($_POST['bt-abrir']) && isset($_POST['check'])){
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
				unset($_SESSION['case']);
				$ps->novocaso($_POST['check'],  $_SESSION['user']);
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

	<div ><?php
		if(isset($_SESSION['case']) && isset($_POST['bt-abrir'])){

			$stmt= $DB_con->prepare("SELECT msg_txt FROM msg WHERE ass_id=:caso ORDER BY msg_hms");
			$stmt->execute(array(':caso'=>$_SESSION['case']));

			foreach ($stmt as $row){
				print $row['msg_txt'] ."<br>";
			}

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

<?php 
	require_once '_ref/footer.php';
?>