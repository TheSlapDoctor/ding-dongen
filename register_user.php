<?php
	//import functions
	require 'functions.php';

	//Connect to DB, commit sudoku otherwise
	$dbconnection = mysqli_connect($host, $user, $password, $dbname);
	if(!$dbconnection){
		die("Error in query " . mysqli_error($dbconnection));
	}

	//get data from form
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$addr1 = $_POST['addr1'];
	$addr2 = $_POST['addr2'];
	$addr3 = $_POST['addr3'];
	$county = $_POST['county'];

	//call insert function
	insertIntoUsersTable($firstname, $surname, $addr1, $addr2, $addr3, $county);
?>
