<?php 
include("static/site_config.php"); 
include ("static/clase_mysql.php");
$miconexion = new clase_mysql;
$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
?>

<!DOCTYPE HTML> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $site_name; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
		<body id="body-color"> 
			<div id="Sign-In"> 
				<fieldset style="width:30%"><legend>LOG-IN HERE</legend> 
					<form method="POST" action=""> User <br> 
						<input type="text" name="usuario" size="40"  required/><br> Password <br>
						<input type="password" name="clave" size="40"><br><br>
						<input id="button" type="submit" name="submit" value="Log-In"?> <?php

// Grab User submitted information
						error_reporting(0);  
						function SignIn() { 
							$usuario =  $_POST["usuario"];
						$clave = $_POST["clave"];
						error_reporting(0);  

						$result = mysql_query("SELECT * FROM usuarios where user = '$_POST[usuario]' AND pass = '$_POST[clave]'");

						$row = mysql_fetch_array($result);

						if($row["user"]==$usuario && $row["pass"]==$clave){
						   header('Location: prueba.php');

						}
						else{
						    
						}

						}
						if(isset($_POST['submit'])) { 
								SignIn(); } 

						?>
						

					</form> 
				</fieldset> 
			


			</div> 
		</body> 
	</html> 

