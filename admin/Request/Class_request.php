<?php
class Request{
	public function getAllRequests(){
		$pdo=DbConfig::getInstance();
		$SQL="SELECT * FROM requests";
		$Q=$pdo->getConnection()->prepare($SQL);
		$Q->execute();
		return $Q->fetchAll();
	}	
}
?>