<html>
    <head>        
        <meta charset = "UTF-8">
        <title> conectar </title>
    </head>	    
    <body>

    <?php
class conectar extends PDO{
	private static $instancia;
	private $query;
	private $host = "us-cdbr-east-06.cleardb.net" ; // ender servidor da etec
	private $usuario = "b21cfa3a8ffa73" ; // usuario servidor etec
	private $senha = "82df25f3"; // senha servido da etec
	private $db = "heroku_847b55fbc3b01a5"; // banco do mysql
	
	public function __construct()
	{
		parent:: __construct("mysql:host=$this->host;dbname=$this->db","$this->usuario","$this->senha");
	    	
	}
	public static function getInstance()
	{
		if(!isset(self::$instancia))
		{
			try
			{
				self::$instancia = new conecta;
				echo 'Conectado com sucesso !!!!';
			}
			catch(Exception $e)
			{
				echo 'Erro ao conectar';
				exit();
			}
		}
		return self::$instancia;
	}	
	public function sql ($query)
	{
		$this->getInstance();
		$this->query = $query;
		$stmt = $pdo->prepare($this->query);
		$stmt->execute();
		$pdo = null;
	}
}
	

?>
    </body>
</html>