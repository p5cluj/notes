<?php
require_once 'menu.php';
/**
* 
*/
class loginMenu implements Menu
{
	private $values = array(); 
	private $db; 
	
	function __construct()
	{
		$instance = Database::getInstance();
		$this->db = $instance->getDb() ;
	}


	public function Menu()
	{
		$dform = $this->formRetrive('login');
		$this->values['title'] = 'login';
		$this->values['selectable'] = 'login';
		$this->values['datacontent'] = $dform['fdata'];
		return $this->values;
	}

	public function formRetrive($argv)
	{
		$sql = "SELECT fdata FROM forms WHERE type = :type";
		$sth = $this->db->prepare($sql);
		$sth->bindParam(':type', $argv, PDO::PARAM_STR);
		$sth->execute();
		return $sth->fetch(PDO::FETCH_ASSOC);
	}

	
}