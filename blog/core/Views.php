<?php

/**
* 
*/
class View
{

	function __construct()
	{
		
	}

	public function render($name)
	{
		include  $name . '.php';	
	}
}
