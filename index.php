<html>
<head>
<!--
Project Name : CRUD with PHP, MySQL and Bootstrap
Author		 : Hendra Setiawan
Website		 : http://www.hendrasetiawan.net
Email	 	 : hendrabpp[at]gmail.com
-->
<?php 
include "module/header.php";
include "module/alerts.php";
include "config/connect.php"; 

session_start();
if (!isset($_SESSION['id'])) {

  header('location: perfil.php') ; 
}
?>





<?php     
        $query="SELECT id_categoria,nombre FROM categoria"; 
        $resultado=mysqli_query($mysqli,$query); 


?>  



</head>


<body >


<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Agregar Usuario</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['simpan']))
{
	
	mysqli_query($mysqli,"INSERT INTO usuarios (dni, nombres, apellidos,fecha_tramite,categoria,estado) VALUES ('".$_POST['dni']."','".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['fecha_tramite']."','".$_POST['categoria']."','".$_POST['estado']."')");
	writeMsg('save.sukses');
}
?>

	<div class="form-group">
  		<label class="col-form-label" for="dni">DNI</label>
  		<input type="number" class="form-control" name="dni" id="dni" required=”required” placeholder="DNI">
	</div>

	<div class="form-group">
  		<label class="control-label" for="nombres">Nombres</label>
  		<input type="text" class="form-control" name="nombres" id="nombres" required=”required” placeholder="NOMBRES">
	</div>

	<div class="form-group">
  		<label class="control-label" for="apellidos">Apellidos</label>
  		<input type="text" class="form-control" name="apellidos" id="apellidos" required=”required” placeholder="APELLIDOS">
	</div>

					<div class="form-group ">
			      <label class="control-label " for="fecha_tramite">
			       Date
			      </label>
			      <div class="input-group">
			       <div class="input-group-addon">
			        <i class="fa fa-calendar">
			        </i>
			       </div>
			       <input class="form-control"  required=”required” id="fecha_tramite" name="fecha_tramite" placeholder="YYYY/MM/DD" type="text"/>
			      </div>
			     </div>
							<br>


					<div class="form-group" >
					<label class="control-label " for="select">
				       Seleccione categoria
				      </label>
					<select class="select form-control" name="categoria" id="categoria" required=”required”  > 
			                  <option value="">Categoria</option> 
			                               <?php 
			                              while($row=mysqli_fetch_array($resultado,MYSQLI_BOTH)) 
			                              echo "<option  value='".$row["id_categoria"]."'>" 
			                                .$row["id_categoria"]."</option>"; ?> 
			                                </select>

				</div>	

					 <div class="form-group ">
				      <label class="control-label " for="estado">
				       Seleccione estado
				      </label>
				      <select class="select form-control" id="estado" name="estado" required=”required”>
				       <option value="">
				        Estado
				       </option>
				       <option value="Pendiente">
				        Pendiente
				       </option>
				       <option value="Entregado">
				        Entregado
				       </option>
				      </select>
				     </div>






				






	<div class="form-group"  >
	<input type="submit" value="Guardar" name="simpan" class="btn btn-primary">
	<input type="reset" value="Limpiar" class="btn btn-danger">
	</div>

	
				
	


	</form>
	</div>

	
	
</div>
</div>
	
</div>






<?php include "module/footer.php"; ?>

<!--  datepiker -->

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="fecha_tramite"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>


</body>
</html>