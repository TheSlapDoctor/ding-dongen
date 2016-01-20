<?php
	
	//Connect to DB, commit sudoku otherwise
	$dbconnection = mysqli_connect($host, $user, $password, $dbname);
	if(!$dbconnection){
		die("Error in query " . mysqli_error($dbconnection));
	}

?>
