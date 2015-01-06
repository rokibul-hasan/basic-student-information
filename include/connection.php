<?php
	$connection=mysql_connect('localhost','root','');
	$select_db=mysql_select_db("student_information",$connection);
	if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

?>