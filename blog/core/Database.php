<?php
/** 
 * 
 * 
 */
class Database {
	private static $instance;
	private $db;
	
	protected function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASS); 
	}
	
	public static function getInstance() {
		if(!self::$instance)
			self::$instance = new Database;
		return self::$instance;
	}

	public function getDb()
	{
		return $this->db;
	}
}



?>