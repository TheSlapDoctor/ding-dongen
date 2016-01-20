<-- Add functions here for use throughout project -->
<?php
	//Designed to take data and insert into the users table of the database
	function insertIntoUsersTable (&$firstName, &$surname, &$email, &$addr1, &$addr2, &$addr3, &$county){
		//acertain if optional data is present, probably don't need this but can't test yet
		if (!$addr3) {
			//define SQL query w/ optional data
			$query = "INSERT INTO users_table (firstname, surname, email, addr1, addr2, county)
						VALUES ('{$firstname}', '{$surname}','{$email}', '{$addr1}', '{$addr2}', '{$county}');";
		}
		else {
			//define SQL query w/o optional data 
			$query = "INSERT INTO users_table (firstname, surname, email, addr1, addr2, county)
						VALUES ('{$firstname}', '{$surname}', '{$email}', '{$addr1}', '{$addr2}', '{$addr3}', '{$county}');";
		}
		
		//make insert query, become an hero otherwise
		$db_insert = mysqli_query($dbconnection, $query);
		if (!$db_insert) {
			die();
		}
	}
?>
