<?php
require_once 'menu.php';
/**
* 
*/
class errorMenu implements Menu
{
	private $values = array(); 
	
	
	function __construct()
	{
		
	}


	public function Menu()
	{
		$this->values['title'] = 'Error';
		$this->values['selectable'] = 'Error';
		$this->values['datacontent'] = 'Long text';
		return $this->values;
	}

}