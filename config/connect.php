<?php
mysql_connect('localhost','root','@llujered4');



mysql_select_db('brevetes');











#https://www.youtube.com/watch?v=V3DYDOWh678

#$db=NEW PDO('mysql:host=localhost;dbname=brevetes','root','@llujered4');


?>

<?php


		$mysqli = new MySQLi("localhost", "root","@llujered4", "brevetes");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>