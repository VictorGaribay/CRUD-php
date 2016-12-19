
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
   
        $query="SELECT id_categoria,nombre FROM categoria"; 
        $resultado=mysql_query($query); 




$sql = mysql_query("SELECT dni,nombres,apellidos,fecha_tramite,categoria,estado FROM usuarios WHERE id_usarios= '".$_GET['id']."'");
$data = mysql_fetch_array($sql);
?>
</head>
<body>

<div class="container">
<?php include "module/nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Edit (Update)</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

<?php  
if(isset($_POST['update']))
{
	mysql_query("UPDATE usuarios SET dni = '".$_POST['dni']."', nombres = '".$_POST['nombres']."', apellidos = '".$_POST['apellidos']."', fecha_tramite = '".$_POST['fecha_tramite']."', categoria = '".$_POST['categoria']."', estado = '".$_POST['estado']."', WHERE id_usarios = '".$_GET['id']."'");
	writeMsg('update.sukses');

	//Re-Load Data from DB
	$sql = mysql_query("SELECT id_usarios, dni, nombres, apellidos,fecha_tramite,categoria,estado FROM usuarios WHERE id_usarios = '".$_GET['id']."'");
	$data = mysql_fetch_array($sql);
}
?>

	<div class="form-group">
  		<label class="control-label" for="dni">DNI</label>
  		<input type="text" class="form-control" name="dni" id="dni" value="<?php echo $data['dni']; ?>" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="nombres">Nombres</label>
  		<input type="text" class="form-control" name="nombres" id="nombres" value="<?php echo $data['nombres']; ?>" required>
	</div>

	<div class="form-group">
  		<label class="control-label" for="apellidos">Apellidos</label>
  		<input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $data['apellidos']; ?>">
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
			       <input class="form-control" id="fecha_tramite" name="fecha_tramite" placeholder="YYYY/MM/DD" type="text" value="<?php echo $data['fecha_tramite']; ?>" />
			      </div>
			     </div>


			     <div class="form-group" >
					<label class="control-label " for="select">
				       Seleccione categoria
				      </label>
					<select class="select form-control" name="categoria" id="categoria" value="<?php echo $data['categoria']; ?>" > 
			                  <option value="<?php echo $data['categoria']; ?>">Categoria</option> 
			                               <?php 
			                              while($row=mysql_fetch_array($resultado)) 
			                              echo "<option  value='".$row["id_categoria"]."'>" 
			                                .$row["nombre"]."</option>"; ?> 
			                                </select>

				</div>	

					 <div class="form-group ">
				      <label class="control-label " for="estado" value="<?php echo $data['estado']; ?>">
				       Seleccione estado
				      </label>
				      <select class="select form-control" id="estado" name="estado" >
				       <option  value="<?php echo $data['estado']; ?>">
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



	<div class="form-group">
	<input type="submit" value="Update" name="update" class="btn btn-primary">
	<a href="rekap.php" class="btn btn-danger">Batal</a>
	</div>

	</form>
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