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
			$stmt= $this->db->prepare("INSERT INTO msg(ass_id, msg_txt) VALUES (:caso,:mtxt)");

			$stmt->bindparam(":caso", $casoRow);
      		$stmt->bindparam(":mtxt", $mtxt);            
      		$stmt->execute();
		}
		catch(PDOException $e){
      		echo $e->getMessage();
    	}	 
	}

	public function showmsg($casoRow)
	{
		try{
			$stmt= $this->db->prepare("SELECT msg_txt FROM msg WHERE ass_id=:caso ");
			$stmt->execute(array(':caso'=>$casoRow));
			foreach ($stmt as $msgRow);
			return print $msgRow['msg_txt']."\n";
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

			$stmt= $this->db->prepare("SELECT * FROM caso WHERE user_id=:uid OR ed_id=:area OR ass_end=:fim LIMIT 1");
    		$stmt->execute(array(':uid'=>$uid, ':area'=> $area, ':fim'=>""));
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

			$stmt= $this->db->prepare("SELECT * FROM caso WHERE user_id=:uid AND ed_id=:area AND ass_end=:fim LIMIT 1");
    		$stmt->execute(array(':uid'=>$uid, ':area'=> $area, ':fim'=>""));
    		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);
    		
    		if($stmt->rowCount() != 0){
				return '1';
			}
		}
		catch(PDOException $e){
      		echo $e->getMessage();
    	}
    	return '0';
	}


	public function fecharcaso($casoRow)
	{
		try{

			$stmt= $this->db->prepare("INSERT INTO caso(ass_end) WHERE ass_id=:aid VALUES (:aend");
			$stmt->execute(array(':aid'=>$casoRow['ass_id']));

			$stmt->bindparam(":aend", NOW());     
      		$stmt->execute();

      		return 1;
		}
		catch(PDOException $e){
      		echo $e->getMessage();
      		return 0;
    	}
	}
}
?>