<?php

	function db_connect()
	{
		$result = new mysqli('localhost', 'chen' ,'chenfushan','social');
		if (!$result) {
			throw new Exception('Could not connect to database server.');
			
			# code...
		}
		else
		{
			return $result;
		}
	}


?>