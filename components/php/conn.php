<?php
	$server = "localhost";
	$username = "root";
	$pass = "";
	$db = "dontraj";

	//If connection failed returns error, else returns nothing
	$conn = new mysqli($server, $username, $pass, $db);
	if ($conn->connect_error) {
 	 die("Connection failed: " . $conn->connect_error);
	}

	function showCursos(){
		$query = "SELECT * FROM tb_cursos";
		$result = $GLOBALS['conn']->query($query);
		while ($cursos = mysqli_fetch_assoc($result)) {
			echo "<option value='".$cursos['id']."'>".$cursos['nome']."</option>";
		}
	}
?>