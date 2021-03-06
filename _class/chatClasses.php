<?php 

	class ChatClass
	{

		function __construct()
		{
			
		}

		function showTextOnScreen($user)
		{
			include('conection.php');
			
			$sth = 	$myPDO->prepare("SELECT * FROM 
										(SELECT msg_txt,tipo,hms FROM msg WHERE ass_id = 13 ORDER BY hms DESC) AS a
									UNION 
									SELECT * FROM 
										(SELECT res_txt,tipo,hms FROM resposta WHERE ass_id = 13 ORDER BY hms DESC) AS b
								    ORDER BY hms
									");
			$cmp1 = $myPDO->prepare("SELECT msg_txt FROM msg WHERE ass_id = 13 ORDER BY hms DESC");
			$cmp2 = $myPDO->prepare("SELECT res_txt FROM resposta WHERE ass_id = 13 ORDER BY hms DESC");
			$sth->execute();
			$cmp1->execute();
			$cmp2->execute();

			while($result = $sth->fetch(PDO::FETCH_ASSOC) ){
				
				if ($result['tipo'] == 0) {
					//echo $user;
					echo '<div class="msg cliente">' . $result['msg_txt'] .'</div>';
				}else if ($result['tipo'] == 1) {
					echo '<div class="msg consultor">' . $result['msg_txt'] . '</div>';
				}
				
			}
		}

		function insertText($txt, $case)
		{
			include('conection.php');

			$var = $myPDO->prepare('INSERT INTO msg(ass_id, msg_txt, hms) VALUES (:caso,:mtxt,now())');

			$var->bindparam(":caso", $case);
      		$var->bindparam(":mtxt", $txt);

			$var->execute();

			header("Location: chatIndex.php");
		}

		function emptyPostCache(){
			unset($_POST['sendText']);
		}


		function abrirnovocaso($area)
		{include('conection.php');

			try{
				$stmt= $myPDO->prepare('INSERT INTO caso(user_id, ed_id, ass_start) VALUES (:uid, :area,:start');

				$date=date('y-m-d');
				$stmt->bindparam(":uid", $_SESSION['user']);
				$stmt->bindparam(":area", $area);
				$stmt->bindparam(":start", $date);    
	      		$stmt->execute();

	      		echo 'caso criado'; // CONFERINDO
			}
			catch(PDOException $e){
	      		echo $e->getMessage();
	      		echo 'CONSULTE A ASSISTÊNCIA';
	    	}		
		}
		
		function showConsultorTextOnScreen($user)
		{
			include('conection.php');
			
			$sth = 	$myPDO->prepare("SELECT * FROM 
										(SELECT msg_txt,tipo,hms FROM msg WHERE ass_id = 13 ORDER BY hms DESC) AS a
									UNION 
									SELECT * FROM 
										(SELECT res_txt,tipo,hms FROM resposta WHERE ass_id = 13 ORDER BY hms DESC) AS b
								    ORDER BY hms
									");
			$cmp1 = $myPDO->prepare("SELECT msg_txt FROM msg WHERE ass_id = 13 ORDER BY hms DESC");
			$cmp2 = $myPDO->prepare("SELECT res_txt FROM resposta WHERE ass_id = 13 ORDER BY hms DESC");
			$sth->execute();
			$cmp1->execute();
			$cmp2->execute();

			while($result = $sth->fetch(PDO::FETCH_ASSOC) ){
				
				if ($result['tipo'] == 1) {
					//echo $user;
					echo '<div class="msg cliente">' . $result['msg_txt'] .'</div>';
				}else if ($result['tipo'] == 0) {
					echo '<div class="msg consultor">' . $result['msg_txt'] . '</div>';
				}
				
			}
		}

		function insertConsultorText($txt, $case)
		{
			include('conection.php');

			$var = $myPDO->prepare('INSERT INTO resposta(ass_id, res_txt, hms) VALUES (:caso,:rtxt,now())');

			$var->bindparam(":caso", $case);
      		$var->bindparam(":rtxt", $txt);

			$var->execute();

			header("Location: chatConsultor.php");
		}

	}
	
	
 ?>