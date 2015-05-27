<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

     <title>Taller Inscripcion</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <h4>Bienvenidos al Taller</h4>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <!--<li class="page-scroll"><a href="../../../menuprincipal.php"> <span class="glyphicon glyphicon-new-window"></span>Menu Principal</a></li>-->
      
            <!--<li ><a href="insert.php"> <span class="glyphicon glyphicon-plus"></span>Insertar</a></li>-->
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    <div class="container">
      <div class="col-md-3"></div>
      <div class="col-md-6">            
            <div class="jumbotron">
                 <form class="form-signin" action="registrar.php" method="POST">
                    <h2 class="form-signin-heading">Ingrese sus Datos</h2>
                    <input class="form-control" placeholder="Nombre" name="nombre" required="" autofocus="" type="text">
                    <input class="form-control" placeholder="Apellido" name="apellido" required="" autofocus="" type="text">
                    <input class="form-control" placeholder="Direccion" name="direccion" required="" autofocus="" type="text">                    
                    <input class="form-control" placeholder="Correo"  name="correo" vrequired="" autofocus="" type="text">
                    <input class="form-control" placeholder="Cedula" name="cedula" required="" autofocus="" type="text">
                    <label for="instituto">Institucion</label>
                     <select class="form-control" name="institucion">
                        <option>UTPL</option>
                        <option>Nacional de Loja</option>
                        <option>Espol</option>
                        <option>Otros</option>
                        </select>
                    <label for="Inscritos">Inscritos</label>
                      <select class="form-control" name="inscrito">
                        <option>Estudiante</option>
                        <option>Expositor</option>
                        <option>Organizador</option>
                      </select>
                    <label for="Curso">Curso</label>
                      <select class="form-control" name="curso">
                        <option>Innovacion</option>
                        <option>Desarrollo</option>
                        <option>Emprendimiento</option>
                      </select>  
                    <label for="conferencia">Conferencias</label>
                      <select  class="form-control" name="conferencia">
                        <option>Conferencia 1 | Auditorio 1  de 8H00 a 10H00</option>
                        <option>Conferencia 2 | Auditorio 1  de 11H00 a 13H00</option>
                        <option>Conferencia 3 | Auditorio 2  de 8H00 a 10H00</option>
                      </select>
                     <!-- <input class="form-control" placeholder="Pago" name="pago" required="" autofocus="" type="text">-->
                    
                      <br><br>

                      <center> <input class="form-btn" name="submit" type="submit" value="Suscribirse" /></center>
                  </form>
        </div>
      <hr> 
    </div>
  <div class="col-md-3"></div>
      
            
  </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <script src="../../../bootstrap/js/offcanvas.js"></script>
  </body>
</html>

