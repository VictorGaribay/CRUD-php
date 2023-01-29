<?php


		$mysqli = new MySQLi("localhost", "root","", "brevetes");
		if ($mysqli -> connect_errno) {
			die( "Failed to connect to MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>