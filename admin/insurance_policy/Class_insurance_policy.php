<?php
class InsurancePolicy{
	public function getAllInsurancePolicys(){
		$pdo=DbConfig::getInstance();
		$SQL="SELECT 
					a.Id AS Id_Policies,
					a.Amount AS Amount,
					a.Date_From,
					a.Date_To,
					a.Created_AT AS Created_AT_Policies,
					a.UpDated_AT AS UpDated_AT_Policies,
					b.IName AS customers_IName,
					b.FName AS customers_FName,
					b.OName As customers_OName,
					b.IIN AS customers_IIN,
					b.PassNum AS customers_PassNum,
					b.DOB AS customers_DOB,
					v.Name_Policie,
					b.Phone AS customers_Phone,
					g.IName AS worker_IName,
					g.FName AS worker_FName,
					g.OName AS worker_OName
				FROM 
					policies a
					LEFT JOIN 
						customers  b
					ON
						a.Customer_id = b.Id
					LEFT JOIN 
						name_policies  v
					ON
						a.Name_Policie_id = v.Id
					LEFT JOIN 
						workers  g
					ON
						a.Worker_Creat_by_id = g.Id";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->execute();
		return $Q->fetchAll();
	}
	
	public function getInsurancePolicyByID($Id){
		$pdo=Dbconfig::getInstance();
		$SQL="SELECT 
					a.Id AS Id_Policies,
					a.Amount AS Amount,
					a.Date_From,
					a.Date_To,
					a.Created_AT AS Created_AT_Policies,
					a.UpDated_AT AS UpDated_AT_Policies,
					b.IName AS customers_IName,
					b.FName AS customers_FName,
					b.OName As customers_OName,
					b.IIN AS customers_IIN,
					b.PassNum AS customers_PassNum,
					b.DOB AS customers_DOB,
					v.Name_Policie,
					b.Phone AS customers_Phone,
					g.IName AS worker_IName,
					g.FName AS worker_FName,
					g.OName AS worker_OName
				FROM 
					policies a
					LEFT JOIN 
						customers  b
					ON
						a.Customer_id = b.Id
					LEFT JOIN 
						name_policies  v
					ON
						a.Name_Policie_id = v.Id
					LEFT JOIN 
						workers  g
					ON
						a.Worker_Creat_by_id = g.Id
				where a.Id=$Id";
		$Q= $pdo->getConnection()->prepare ($SQL);
		$Q->execute();
		return $Q->fetchObject();
	}

	public function update($Id, $Amount, $Date_From, $Date_To){
		$pdo=DbConfig::getInstance();
		$SQL="UPDATE policies
					SET Amount = $Amount,
					Date_From = :Date_From,
					Date_To = :Date_To,
					UpDated_AT = NULL
				WHERE Id = $Id";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":Date_From",$Date_From);
		$Q->bindParam (":Date_To",$Date_To);
		return $Q->execute();
	}

	public function delete($ID){
		$pdo=DbConfig::getInstance();
		$SQL="DELETE  FROM policies WHERE Id = $ID";
		$Q=$pdo->getConnection()->prepare($SQL);
		return $Q->execute();
	}




















	public function Create($Name_Policie, $Min_amount, $Min_Date){
		$pdo=DbConfig::getInstance();
		$SQL="INSERT INTO name_policies (Name_Policie, Min_amount, Min_Date) values(:Name_Policie, $Min_amount, $Min_Date)";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":Name_Policie",$Name_Policie);
		return $Q->execute();
	}
}
?>