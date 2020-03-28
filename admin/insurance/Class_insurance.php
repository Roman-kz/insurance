<?php
class Insurance{
	public function getAllInsurances(){
		$pdo=DbConfig::getInstance();
		$SQL="SELECT * FROM name_policies";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->execute();
		return $Q->fetchAll();
	}
	
	public function Create($Name_Policie, $Min_amount, $Min_Date){
		$pdo=DbConfig::getInstance();
		$SQL="INSERT INTO name_policies (Name_Policie, Min_amount, Min_Date) values(:Name_Policie, $Min_amount, $Min_Date)";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":Name_Policie",$Name_Policie);
		return $Q->execute();
	}

	public function delete($ID){
		$pdo=DbConfig::getInstance();
		$SQL="DELETE  FROM name_policies WHERE Id = $ID";
		$Q=$pdo->getConnection()->prepare($SQL);
		return $Q->execute();
	}

	public function getInsuranceByID($Id){
		$pdo=Dbconfig::getInstance();
		$sql="SELECT * FROM name_policies where Id=$Id";
		$Q= $pdo->getConnection()->prepare ($sql);
		$Q->execute();
		return $Q->fetchObject();
	}

	public function update($Id, $name_policie, $Min_amount, $Min_Date){
		$pdo=DbConfig::getInstance();
		$SQL="UPDATE name_policies
					SET Name_Policie = :name_policie,
					Min_amount = $Min_amount,
					Min_Date = $Min_Date,
					UpDated_AT = NULL
				WHERE Id = $Id";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":name_policie",$name_policie);
		return $Q->execute();
	}
}
?>