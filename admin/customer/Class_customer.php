<?php
class Customer{
	public function getAllCustumers(){
		$pdo=DbConfig::getInstance();
		$SQL="SELECT * FROM customers";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->execute();
		return $Q->fetchAll();
	}
	
	public function Create($IName, $FName, $OName, $IIN, $PassNum, $DOB, $Phone){
		$pdo=DbConfig::getInstance();
		$SQL="INSERT INTO customers (IName, FName, OName, IIN, PassNum, DOB, Phone) values(:IName, :FName, :OName, $IIN, $PassNum, :DOB, $Phone)";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":IName",$IName);
		$Q->bindParam (":FName",$FName);
		$Q->bindParam (":OName",$OName);
		$Q->bindParam (":DOB",$DOB);
		return $Q->execute();
	}

	public function delete($ID){
		$pdo=DbConfig::getInstance();
		$SQL="DELETE  FROM customers WHERE Id = $ID";
		$Q=$pdo->getConnection()->prepare($SQL);
		return $Q->execute();
	}

	public function getCustomerByID($Id){
		$pdo=Dbconfig::getInstance();
		$sql="SELECT * FROM customers where Id=$Id";
		$Q= $pdo->getConnection()->prepare ($sql);
		$Q->execute();
		return $Q->fetchObject();
	}

	public function update($Id, $IName, $FName, $OName, $IIN, $PassNum, $DOB, $Phone){
		$pdo=DbConfig::getInstance();
		$SQL="UPDATE customers
				SET IName = :IName,
					FName = :FName,
					OName = :OName,
					IIN = $IIN,
					PassNum = $PassNum,
					DOB = :DOB,
					Phone = $Phone,
					UpDated_AT = NULL
				WHERE Id = $Id";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":IName",$IName);
		$Q->bindParam (":FName",$FName);
		$Q->bindParam (":OName",$OName);
		$Q->bindParam (":DOB",$DOB);
		return $Q->execute();
	}
}
?>