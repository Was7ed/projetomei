<?php 

class Posave{

	private $db , $var;
	function __construct($DB_con){
  		$this->db = $DB_con;
	}


/*           **********************************************************************************
*                               CÓDIGOS            DOS           MENSAGENS
*            **********************************************************************************
*/
	public function inserir($mtxt, $casoRow)
	{
		try{
			$stmt= $this->db->prepare("INSERT INTO msg(ass_id, msg_txt, msg_hms) VALUES (:caso,:mtxt,now())");

			$stmt->bindparam(":caso", $casoRow);
      		$stmt->bindparam(":mtxt", $mtxt);       
      		$stmt->execute();
      		echo 'texto enviado';
		}
		catch(PDOException $e){
      		echo $e->getMessage();
    	}
	}

/*           **********************************************************************************
*                               CÓDIGOS            DOS           MENSAGENS
*            **********************************************************************************
*/

	public function cinserir($rtxt)
	{
		try{
			$stmt= $this->db->prepare("INSERT INTO resposta(ass_id, res_txt, res_hms) VALUES (:caso,:rtxt,now())");

			$stmt->bindparam(":caso", $_SESSION['ccaso']);
      		$stmt->bindparam(":rtxt", $rtxt);       
      		$stmt->execute();
      		echo 'texto enviado';
		}
		catch(PDOException $e){
      		echo $e->getMessage();
    	}	 
	}


/*           **********************************************************************************
*                               CÓDIGOS            DOS           CASOS
*            **********************************************************************************
*/

	public function novocaso($area, $uid)
	{
		try{
			$stmt= $this->db->prepare("INSERT INTO caso(user_id, ed_id) VALUES (:uid, :area)");
			$stmt->bindparam(":uid", $uid);
			$stmt->bindparam(":area", $area);     
      		$stmt->execute();

      		echo 'caso criado';  // CONFERINDO
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		echo 'CONSULTE A ASSISTÊNCIA';
    	}		
	}
  
	public function abrir($area,$uid)
	{
		try{

			$stmt= $this->db->prepare("SELECT * FROM caso WHERE user_id=:uid AND ed_id=:area AND ass_end IS NULL LIMIT 1");
    		$stmt->execute(array(':uid'=>$uid, ':area'=> $area));
    		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);

    		if($stmt->rowCount() > 0){
				echo "pode enviar suas menssagens";
				$_SESSION['case']= $casoRow['ass_id'];
			}
		}
		catch(PDOException $e){
      		echo $e->getMessage();
    	}
	}

	public function casoha($area,$uid){
		try{

			$stmt= $this->db->prepare("SELECT * FROM caso WHERE user_id=:uid AND ed_id=:area  AND ass_end IS NULL");
    		$stmt->execute(array(':uid'=>$uid, ':area'=>$area));
    		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
    		
    		if($stmt->rowCount() != 0){
				return true;
				echo 's';	
			}
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		return '0';
    	}
	}


	public function fecharcaso($casoRow)
	{
		try{

			$stmt= $this->db->prepare("INSERT INTO caso(ass_end) WHERE ass_id=:aid VALUES (now())");
			$stmt->execute(array(':aid'=>$casoRow['ass_id']));
			$stmt->execute(array(':aid'=>date('y-m-d')));

      		return 1;
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		return 0;
    	}
	}

	public function pegarcaso($area){
		try{
			$stmt= $this->db->prepare("SELECT * FROM caso WHERE con_id IS NULL AND ed_id=:area  AND ass_end IS NULL");
			$stmt->execute(array(':area'=>$area));
			$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['ccaso'] = $casoRow['ass_id'];

			$pdo= $this->db->prepare("UPDATE caso SET con_id=:cid WHERE ass_id=:aid");
			$pdo->execute(array(':aid'=>$casoRow['ass_id'], ':cid'=>$_SESSION['consultor']));
			
			if($stmt->rowCount() > 0){
				echo 'VOCÊ PEGOU O CASO DE NUMERO' . $_SESSION['ccaso'];
			}
		}
		catch(PDOException $e){
			echo $e->getMessage(),"<br>";
    	}
	}

/**
 *  ABRIR CASO PARA CONSULTOR
*/
	// public function cabrir($area)
	// {
	// 	try{

	// 		$stmt= $this->db->prepare("SELECT * FROM caso WHERE con_id=:cid AND ed_id=:area AND ass_end IS NULL LIMIT 1");
 //    		$stmt->execute(array(':cid'=>$_SESSION['consultor'], ':area'=> $area));
 //    		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
	// 		$_SESSION['ccase']= $casoRow['ass_id'];

	// 		//PEGAR O NOME
	// 		$PDO= $this->db->prepare("SELECT * FROM users WHERE user_id=:uid");
	// 		$PDO->execute(array(':uid'=>$casoRow['user_id']));
	// 		$name = $PDO->fetch(PDO::FETCH_ASSOC);

	// 		echo 'RESPONDA AO '. $name['user_name'];
	// 	}
	// 	catch(PDOException $e){
 //      		echo $e->getMessage();
 //    	}
	// }


	public function ccasoha(){
		try{

			$stmt= $this->db->prepare("SELECT * FROM caso WHERE con_id=:cid AND ass_end IS NULL");
    		$stmt->execute(array(':cid'=>$_SESSION['consultor']));
    		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
    		$_SESSION['ccaso']=$casoRow['ass_id'];

    		//PEGAR O NOME
			$PDO= $this->db->prepare("SELECT * FROM users WHERE user_id=:uid");
			$PDO->execute(array(':uid'=>$casoRow['user_id']));
			$name = $PDO->fetch(PDO::FETCH_ASSOC);

    		if($stmt->rowCount() != 0){
				echo 'RESPONDA AO '. $name['user_name'];
				return true;
			}
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		return false;
    	}
	}
}
?>