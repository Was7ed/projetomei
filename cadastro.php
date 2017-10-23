<?php 
	require_once '_ref/header.php';
 ?>

<section id="cadastro_container">
 <div id="cadastro_master">
 	<h1>CADASTRAR-SE</h1>
 	<form method="post" action="">
 		<input type="text" name="login_cadastro" placeholder="Login" required><br>
 		<input required type="password" name="senha_cadastro" placeholder="Senha"><br>
 		<input type="email" name="email_cadastro" placeholder="Email"><br>
 		<input type="number" name="cnpj_cadastro" placeholder="Digite seu CNPJ"><br>
 		<input type="text" name="prof_cadastro" placeholder="Sua profissão"><br>
 		<input type="text" name="address_cadastro" placeholder="Seu enrereço"><br>
 		<button type="submit">Enviar</button>
 	</form>
 </div>
</section>
 <?php 
	require_once '_ref/footer.php';
 ?>
