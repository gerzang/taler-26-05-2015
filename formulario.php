<?php
include("static/site_config.php"); 
include ("static/clase_mysql.php");
$miconexion = new clase_mysql;
$miconexion->conectar($db_name,$db_host, $db_user,$db_password);

?>
<!doctype html>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro SCIII</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>



<div class="group">
  <form method="POST" action=""> Nombre <br> 
            <input type="text" name="nombre" requerid size="40"  required/><br> Apellido <br>
            <input type="text" name="apellido" size="40"><br>Direccion<br>
            <input type="text" name="Direccion" size="40"><br>Correo<br>             
            <input type="mail" name="mail" placeholder="nombre@dominio.com" requerid size="40"name="clave" ><br>Cedula<br>
            <input type="text" name="cedula" requerid size="40"><br>Institucion<br>
            <select name="institucion" onchange="this.form.submit()" > 
                <option selected disabled>-- Selecciona una Institucion --</option> 
                        <?php
                            //echo "select table_name from information_schema.tables where table_schema='".$db_name. "'";
                            $con=mysql_query("select * from instituciones");
           
                            while ($row = mysql_fetch_array($con)) { 
                            $cat = $row['table_name']; 
                        ?> 
                <option value="<?=$cat?>"><?=$cat?></option> 
                <?php 
                            } 
                ?> 
            </select>
            <br>Tipo<br>
            <select name="tipo" onchange="this.form.submit()" > 
                <option selected disabled>-- Tipo --</option> 
                        <?php
                            //echo "select table_name from information_schema.tables where table_schema='".$db_name. "'";
                             $query = "select * from instituciones";
                      $result = mysql_query($query) or die("error". mysql_error());
                        ?> 
                <option value="<?=$cat?>"><?=$cat?></option> 
                <?php 
                            
                ?> 
            </select>
            <br> <br>

            <input id="button" type="submit" name="submit" value="Insertar"?> 
              <?php
               $query = "select * from instituciones";
                      $result = mysql_query($query) or die("error". mysql_error());
                      while ($row = mysql_fetch_array($result)) {
                        echo "".utf8_encode($row['nombre'])."<br>";
                        echo "".utf8_encode($row['descripcion'])."<br>";
                      }
            ?>


          </form> 
</div>
</body>
</html>