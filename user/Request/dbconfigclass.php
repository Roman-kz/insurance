<?php
class Dbconfig {
	private static $instance=null;
	private $conn;
	private $name ='insurance_2';
	private $host ='localhost';
	private $user ='root';
	private $pass ='';
	private $enc ='';
	private function __construct(){
		$this->conn=new PDO("mysql:host={$this->host};
			dbname={$this->name}", $this->user, $this->pass,
			array (PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'"));
	}
	public static function getInstance()
	{
		if(!self::$instance)
		{
			self::$instance=new Dbconfig();
		}
		return self ::$instance;
	}
	public function getConnection()
	{
		return $this->conn;
	}
}

?>