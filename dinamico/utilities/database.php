<?php
/*
 * Name: database.php
 * Description: class to manipulate connection and requisitions to 
 * database.
*/
class Database{
	
	private $host;
	private $user;
	private $password;
	private $database;
	private $connection;
	
	public function __construct($host, $user, $password, $database){
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
		
	}
	
	public function connection(){
		
		$this->connection = new mysqli ($this->host, $this->user, $this->password, $this->database);
		
		if(mysqli_connect_errno()){
			throw new DatabaseException("Connection failed", 1);
		}
		
		else
			return true;
	}
	
	public function query($query){
		
		return $this->connection->query($query);
		
	}
	
	public function consult($query){
		$queryResult = $this->connection->query($query);
		while ($row = $queryResult->fetch_assoc()){
			$result[] = $row;
		}
	
        return $result;
	}
	
	public function disconnect(){
		
		$this->connection->close();
	}
	
	public function insert_id(){
		
		return $this->connection->insert_id;
	}
}

class DatabaseException extends Exception{
	
	public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
?>
