<?php
/** 
 * 
 * 
 */
class Database {
	private static $db;
	
	protected function __construct() {
		self::$db = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASS); 
	}
	
	public static function getDb() {
		if(!self::$db)
			self::$db = new Database;
		
		return self::$db;
	}
}



?>