<?php
require_once 'menu.php';
/**
* 
*/
class IndexMenu implements Menu
{
	private $values = array(); 
	
	
	function __construct()
	{
		
	}


	public function Menu()
	{
		$this->values['title'] = 'Index';
		$this->values['selectable'] = 'index';
		$this->values['datacontent'] = 'Index text';
		return $this->values;
	}

	
}