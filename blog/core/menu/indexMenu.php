<?php
require_once 'menu.php';

/**
* 
*/
class IndexMenu implements Menu
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
		$this->values['title'] = 'Index';
		$this->values['selectable'] = 'index';
		$this->values['datacontent'] = $this->postRetrive();
		return $this->values;
	}


	public function postRetrive()
	{
		$sql = $this->db->query("SELECT * FROM posts");
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
}