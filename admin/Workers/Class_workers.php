<?php
class Worker{
	public function getAllWorkers(){
		$pdo=DbConfig::getInstance();
		$SQL="SELECT * FROM workers";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->execute();
		return $Q->fetchAll();
	}
	
	public function Create($IName, $FName, $OName, $IIN, $Position, $DOB, $Phone){
		$pdo=DbConfig::getInstance();
		$SQL="INSERT INTO workers (IName, FName, OName, IIN, Position, DOB, Phone) values(:IName, :FName, :OName, $IIN, :Position, :DOB, $Phone)";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":IName",$IName);
		$Q->bindParam (":FName",$FName);
		$Q->bindParam (":OName",$OName);
		$Q->bindParam (":Position",$Position);
		$Q->bindParam (":DOB",$DOB);
		return $Q->execute();
	}

	public function delete($ID){
		$pdo=DbConfig::getInstance();
		$SQL="DELETE  FROM workers WHERE Id = $ID";
		$Q=$pdo->getConnection()->prepare($SQL);
		return $Q->execute();
	}

	public function getWorkersByID($Id){
		$pdo=Dbconfig::getInstance();
		$sql="SELECT * FROM workers where Id=$Id";
		$Q= $pdo->getConnection()->prepare ($sql);
		$Q->execute();
		return $Q->fetchObject();
	}

	public function update($Id, $IName, $FName, $OName, $IIN, $Position, $DOB, $Phone){
		$pdo=DbConfig::getInstance();
		$SQL="UPDATE workers
				SET IName = :IName,
					FName = :FName,
					OName = :OName,
					IIN = $IIN,
					Position = :Position,
					DOB = :DOB,
					Phone = $Phone,
					UpDated_AT = NULL
				WHERE Id = $Id";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->bindParam (":IName",$IName);
		$Q->bindParam (":FName",$FName);
		$Q->bindParam (":OName",$OName);
		$Q->bindParam (":Position",$Position);
		$Q->bindParam (":DOB",$DOB);
		
		return $Q->execute();

	}
}
?>