<?php
class Conexao{

    public $conn = false;

    public function __construct(){
        $servername = "solicity156.cerfyxgmkzjp.sa-east-1.rds.amazonaws.com";
        $username = "solicity156";
        $password = "solicity156";
    
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=Solicity156", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully3218739821"; 
        }
        catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
	}
	
	public function close(){
		$conn = null;
	}    
    
    //parâmetros usados para acessar o SGBD da máquina localhost
	/*private $host = "solicity156.cerfyxgmkzjp.sa-east-1.rds.amazonaws.com:3306";
	private $user = "solicity156";
	private $password = "solicity156";
	
	public $conexao = false;

	public function __construct(){
		$this->conexao = new mysqli($this->host, $this->user, base64_decode($this->password));
	}
	
	public function close(){
		$this->conexao->close();
	}*/
}
?>