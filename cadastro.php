<?php 
	require_once '_ref/header.php';
  require_once 'conexao.php';

  if($login->islogin()){
    header('location: chat.php');
  }


	if(isset($_POST['btn-enviar'])){
    
		$uname= $_POST['name'];
		$upass= $_POST['pass'];
		$umail= $_POST['mail'];
		$ucnpj= $_POST['cnpj'];
		$uprof= $_POST['prof'];
		$uaddr= $_POST['addr'];

    if(strlen($upass) < 6){
      echo "tem que ter mais que 6 para entrar mano";
    }
    else if(strlen($ucnpj) != 13) {
      echo "O cnpj está fora dos padrões";
    }
    else{
        $pdo = $DB_con->prepare("SELECT user_name,user_email,user_cnpj FROM users WHERE user_name=:uname OR user_email=:umail OR user_cnpj=:ucnpj");
        //$pdo->execute(array(':uname'=>$uname, ':umail'=>$umail, ':ucnpj'=>$ucnpj ));
        $row=$pdo->fetch(PDO::FETCH_ASSOC);
      
        if($row['user_name']==$uname) {
          echo "ISH, JÁ TEMOS ESSE USUÁRIO";
        }
        else if($row['user_email']==$umail) {
          echo "PODE PARAR, EMAIL REPITIDO";
        }
        else if($row['user_cnpj']==$ucnpj) {
          echo "QUAL FOI? ESSA EMPRESA TA PINDURADA JÁ";
        }
        else if(isset($_POST['btn-enviar'])){
            $login->cadastro($uname, $upass, $umail, $ucnpj, $uprof, $uaddr);
            echo 'VOCÊ FOI CADASTRADO';
        }
    }
  }
?>


<section id="cadastro_container">
 <div id="cadastro_master">
 	<h1>CADASTRAR-SE</h1>
 	<form method="post" action="">

 		<input required type="text" name="name" placeholder="Login"><br>
 		
 		<input required type="password" name="pass" placeholder="Senha" ><br>
 		
 		<input required type="email" name="mail" placeholder="Email"><br>
 		
 		<input required type="text" name="cnpj" placeholder="Digite seu CNPJ"><br>
 		
 		<input required="Qual sua área de atuação?" type="text" name="prof" placeholder="Profissão"><br>
 		
 		<input required type="text" name="addr" placeholder="Enrereço"><br>
 		
 		<button type="submit" name="btn-enviar" >Enviar</button>

 	</form>
 </div>
</section>
 <?php 
	require_once '_ref/footer.php';
 ?>