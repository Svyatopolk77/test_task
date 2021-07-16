<?php  

namespace App\Models;
use PDO;
class Database
{

	private $host='127.0.0.1';
	private $user='root';	
	private $pass='root';
	private $dbname='testdb';
	private $connect;
	public function __construct()
	{
		$this->host=$host;
		$this->user=$user;
		$this->pass=$pass;
		$this->dbname=$dbname;
		

		$options = [
	      PDO::ATTR_PERSISTENT => true,
	      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	    ];	

	}
	public function connect()
	{
	    $dsn="mysql:dbname=testdb;host=127.0.0.1";

		try {
	      $this->connect = new PDO($dsn, 'root', 'root');
	      
	    } catch(PDOException $e) {
	      echo $e->getMessage();
	    }

		return $this->connect;
	}

}