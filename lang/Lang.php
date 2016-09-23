<?php
/**
* Language management
* @author Huong Nguyen <shovity@gmail.com>
*/
class Lang
{
	private $string;

	function __construct($path = '')
	{
		$string = file_get_contents($path.'.json');
		$this->string = json_decode($string);
	}

	public function getString($key = '')
	{
		return $this->string->$key;
	}
}