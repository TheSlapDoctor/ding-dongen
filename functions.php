<-- Add functions here for use throughout project -->

	function insertIntoUsersTable (&$firstName, &$surname, &$addr1, &$addr2, &$addr3, &$county){
		if (!$addr3) {
			$query = "INSERT INTO users_table (firstname, surname, addr1, addr2, county)
						VALUES ('{$firstname}', '{$surname}', '{$addr1}', '{$addr2}', '{$county}');";
		}
		else {
			$query = "INSERT INTO users_table (firstname, surname, addr1, addr2, county)
						VALUES ('{$firstname}', '{$surname}', '{$addr1}', '{$addr2}', '{addr3}', '{$county}');";
		}
		
		$db_insert = mysqli_query($dbconnection, $query);
		if (!$db_insert) {
			die();
		}
	}
