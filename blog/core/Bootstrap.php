<?php
require_once 'config.php';
require_once 'Database.php';
require_once 'menu/indexMenu.php';
require_once 'menu/errorMenu.php';

/**
* User class
*/
class Bootstrap  
{
	public  $db;
	
	function __construct($sid)
	{
		$this->db = Database::getDb();
		self::userVerification($sid);
	}

	public static function userVerification($sid='')
	{
		if(!isset($sid) || $sid==''){
			header("Location: ".BASE_URL);
		}
	}


	public function menuCheck($type=null)
	{
		switch ($type) {
			case 'index':
				$obj = new IndexMenu();
				$a = $obj->Menu();
				echo "<pre>"; print_r($a); echo "</pre>";
				//echo $obj->ob;
			break;
			
			default:
				$obj = new errorMenu();
				$a = $obj->Menu();
				echo "<pre>"; print_r($a); echo "</pre>";
			break;
		}
	}

	public function getUry($uri='')
	{
		$uri_data = explode('/', $uri);
		return $uri_data[0];
	}
}