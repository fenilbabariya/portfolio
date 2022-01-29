<?php

$db=new mysqli('localhost','root','','tutorial13_library');

	if($db -> connect_errno)
	{
		echo $db ->connect_error;
		exit;
	}
?>