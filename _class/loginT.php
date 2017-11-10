<?php

 class LoginT{

 	private $db;
	function __construct($DB_con)
	{
  		$this->db = $DB_con;
	}
/**
 * LOGAR O USUÁRIO
 */
  public function login($ulog,$upass)
  {
    try
    {
      $stmt = $this->db->prepare("SELECT * FROM users WHERE user_name=:uname OR user_email=:umail LIMIT 1");
      $stmt->execute(array(':uname'=>$ulog, ':umail'=>$ulog));
      $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

      if($stmt->rowCount() > 0)
      {
        if(password_verify($upass, $userRow['user_pass']))
        {
          $_SESSION['user'] = $userRow['user_id'];
          return true;
        }
        else{
          return false;
        }
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  }

/*
* VERIFICAR SE O USUÁRIO ESTÁ LOGADO
*/
	public function islogin(){
		
		if(isset($_SESSION['user']) != ""){
			return true;
		}
		else{
			return false;
		}
	}

/*
* FAZER LOGOUT
*/
	public function logout(){

    session_register_shutdown();
    session_unset();
    unset($_SESSION['user']);
    header('location: entrar.php');
  }

/*
* CADASTRAR USUÁRIOS
*/
  public function cadastro($uname,$upass,$umail,$ucnpj,$uprof,$uaddr){
    try{
      $new_password = password_hash($upass, PASSWORD_DEFAULT);

      $pdo = $this->db->prepare("INSERT INTO users(user_name,user_cnpj,user_profissao,user_endereco,user_email,user_pass)VALUES(:uname, :ucnpj, :uprof, :uaddr, :umail, :upass)");

      $pdo->bindparam(":uname", $uname);
      $pdo->bindparam(":ucnpj", $ucnpj);
      $pdo->bindparam(":uprof", $uprof);
      $pdo->bindparam(":uaddr", $uaddr);
      $pdo->bindparam(":umail", $umail);
      $pdo->bindparam(":upass", $new_password);            
      $pdo->execute(); 

    }
    catch(PDOException $e){
      echo $e->getMessage();
    }


  }

}
?>