
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("config/connect.php");

	$username=$_POST['user'];
	$pass=$_POST['password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
/*	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}
*/

	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE user = '$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
		//	$_SESSION['rol']=$f['rol'];

			header("Location: index.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='perfil.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		
		echo "<script>location.href='perfil.php'</script>";	

	}

?>