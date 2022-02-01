<?php 	


class Sql extends PDO {

	private $con;	

	public function __construct()
	{
		//$this->state ??= new InitialState();
		$server         = "172.31.1.33";
        $db_username    = "unimed";
        $db_password    = "falcon";
        $service_name   = "falcon";
        $port           = 1521;
        $dbtns   = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $server)(PORT = $port)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = $service_name) ))";

		$this->con = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $db_username, $db_password);
	}


	private function setParams($statement, $params = array())
	{
		foreach ($params as $key => $value) {
			$this->setParam($statement,$key,$value);
		}		
	}

	private function setParam($statement, $key, $value)
	{
		$statement->bindParam($key,$value);
	}	

	public function queryValid($rawQuery, $params = array())
	{
		$stmt = $this->con->prepare($rawQuery);
		$this->setParams($stmt,$params);	
		$stmt->execute();
		return $stmt;
	}

	public function select($rawQuery, $params = array()):array
	{
		$stmt = $this->queryValid($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}



 ?>