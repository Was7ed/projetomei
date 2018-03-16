<?php 

class Consultas{

	private $db;
	function __construct($DB_con)
	{
  		$this->db = $DB_con;
	}


/*           **********************************************************************************
*                               	QUANTIDADES					GERAIS
*            **********************************************************************************
*/

	public function qtdConsultants(){

		$nRows = $this->db->query("SELECT count(*) from consultor")->fetchColumn(); 

		return $nRows;
	}

	public function qtdClientes(){

		$nRows = $this->db->query("SELECT count(*) from users")->fetchColumn(); 

		return $nRows;
	}

	public function qtdMensagensT(){
		
		$nRows = $this->db->query("SELECT count(*) from msg")->fetchColumn(); 

		return $nRows;
	}

	public function qtdRespostasT(){
		
		$nRows = $this->db->query("SELECT count(*) from resposta")->fetchColumn(); 

		return $nRows;
	}

	public function qtdCases(){

		$nRows = $this->db->query("SELECT count(*) from caso")->fetchColumn(); 

		return $nRows;
	}

	public function qtdClosedCases(){

		$nRows = $this->db->query("SELECT count(aas_end) from caso WHERE ass_end IS NULL")->fetchColumn(); 

		return $nRows;
	}


/*           **********************************************************************************
*                               	QUANTIDADES				ESPECÍFICAS
*            **********************************************************************************
*/

	public function qtdClosedCasesMonth($consultor){

		$stmt= $this->db->prepare("SELECT con_id,count(*) FROM caso WHERE date('y-m-1') <= ass_end <= date('y-m-31') ");
		$casoRow = $stmt->fetch(PDO::FETCH_ASSOC);

		if($stmt->rowCount() != 0){

		}
		else{
			echo 'Não foram fechados caos este mês';
		}
	}


	public function MesesDeContrato(){

		$stmt= $this->db->prepare("SELECT * FROM users WHERE user_id=:uid LIMIT 1");
	    $stmt->execute(array(':uid'=>$_SESSION['user']));
	    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

		$lala = substr($userRow['user_date'], -2);

		if($lala < date('d')){
			echo date( $lala.'-m-y', strtotime('+1 month'));
		}else{
			echo date($lala.'-m-y');
		}
		
	}


/*           **********************************************************************************
*                               CONSULTA 			DOS					CLIENTES
*            **********************************************************************************
*/

	public function MesesDeContratoCliente(){

	}

	public function AreaConsultoria(){
		$stmt= $this->db->prepare("SELECT ADM,JURI,RH,FISCAL,MKT,FINAN FROM users WHERE user_id=:uid LIMIT 1");
    	$stmt->execute(array(':uid'=>$_SESSION['user']));
    	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

    	if($userRow['ADM'] == 1){
    		echo" Gestão ";
    	}
    	if($userRow['JURI'] ==1){
    		echo " Juridico ";
    	}
    	if($userRow['RH']==1){
    		echo " RH ";
    	}
    	if($userRow['FISCAL']==1){
    		echo" fiscal ";
    	}
    	if($userRow['MKT']==1){
    		echo" Marketing  ";
    	}
    	if($userRow['FINAN']==1){
    		echo " Financeiro ";
    	}
	}

}
 ?>