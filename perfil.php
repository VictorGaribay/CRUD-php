






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio de Sesiòn</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="img/carretera2.jpg"  style="background-repeat:no-repeat">
    <p><br><br><br><br><br><br><br><br><br><br><br></p>


    <div class="container"  >
<div align="center" style="color: white" > <label align="center"><h1>Inicio de Sesión</h1></label></div>
   
      
    <div class="row" style=" opacity: 0.9;">
        <div class="col-md-4" ></div>
        
        <div class="col-md-4" >
            <div class="panel panel-default">
              

              <div class="panel-body"  >
                
      

   
                <form action="validar.php" method="POST"   >
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="password">
                  </div>

                  <input  name="login" type="submit" value="Login" class="btn btn-primary" >
                </form>
              </div>
            </div>


        </div>
        <div class="col-md-4"></div>


    </div>



    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>