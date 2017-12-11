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

      		return 1;
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		return 0;
    	}
	}

	public function pegarcaso($area){
		try{
			echo $_SESSION['consultor'];
			$stmt= $this->db->prepare("SELECT * FROM caso WHERE con_id IS NULL AND ed_id=:area  AND ass_end IS NULL");
			$stmt->execute(array(':area'=>$area));

			$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['ccaso'] = $casoRow['ass_id'];

			$stmt= $this->db->prepare("UPDATE caso SET con_id=:cid WHERE ass_id=:aid");
			$stmt->bindparam(":cid", $_SESSION['consultor']);
			$stmt->execute();

			$stmt->execute(array(':aid'=>$casoRow['ass_id']));
			
			echo $_SESSION['consultor'];
		}
		catch(PDOException $e){
			echo $e->getMessage(),"<br>";
    	}
	}

}
?>