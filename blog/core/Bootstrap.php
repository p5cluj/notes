<?php

require_once 'config.php';
require_once 'Database.php';
require_once 'Views.php';
require_once 'menu/indexMenu.php';
require_once 'menu/errorMenu.php';
require_once 'menu/loginMenu.php';

/**
* User class
*/
class Bootstrap  
{
	private $db;
	public static  $pmessage;
	
	function __construct()
	{
		$this->view = new View();
		/*$this->db = Database::getDb();
		self::userVerification($sid);*/

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
			break;
			case 'login':
				$obj = new loginMenu();
			break;
			case 'login_user':
				echo "<pre>"; print_r($_POST); echo "</pre>";
			break;
			
			default:
				$obj = new errorMenu();
			break;
		}

		$a = $obj->Menu();
		return $a;
	}

	public function getUry($uri='')
	{
		$uri_data = explode('/', $uri);
		return $uri_data[0];
	}


}