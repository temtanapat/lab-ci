<?php
class PSP extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

		function getFile()
		{
		$fp = file_get_contents("Lab0-testcase.php");
		
		return $fp; 
		
		}

}
?>
