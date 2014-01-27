<?php
require_once 'menu.php';
/**
* 
*/
class loginMenu implements Menu
{
	private $values = array(); 
	
	
	function __construct()
	{
		
	}


	public function Menu()
	{
		$this->values['title'] = 'login';
		$this->values['selectable'] = 'login';
		$this->values['datacontent'] = 'Login page';
		return $this->values;
	}

	
}