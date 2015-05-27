<?php

include('static/site_config.php');
  include('static/conect_mysql.php');
            
            
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $direccion = $_REQUEST['direccion'];
            $correo = $_REQUEST['correo'];
            $cedula = $_REQUEST['cedula'];
            $institucion = $_REQUEST['institucion'];
            $inscrito = $_REQUEST['inscrito'];
            $curso = $_REQUEST['curso'];
            $conferencia = $_REQUEST['conferencia'];
            //$pago = $_REQUEST['pago'];

            $query = "INSERT INTO participantes (nombre,apellido, direccion, correo, cedula, institucion, inscrito, curso, conferencia, pago) 
            VALUES ('$nombre', '$apellido', '$direccion', '$correo', '$cedula', '$institucion','$inscrito','$curso', '$conferencia', '$pago')";  
             $result = mysql_query($query) or die("error". mysql_error()); 

            echo '<script>alert("¡Gracias! Hemos recibido sus datos")</script>';
            header('Location: index.php');



           
            



            switch ($inscrito) {
                case "Estudiante":
                    $int = 60;
                    break;
                case "Expositor":
                    $int = 50;
                    break;
                case "Organizador":
                    $int = 0;
                    break;
                default:
            }


            switch ($curso) {
                case "Innovacion":
                    $ino = 120;
                    break;
                case "Desarrollo":
                    $ino = 110;
                    break;
                case "Emprendimiento":
                    $ino = 125;
                    break;
                default:
            }


            $pago=$int + $ino;

            switch ($institucion) {
                case "UTPL":
                    $subtotalpago = $pago*0.10;
                    $pago=$pago-$subtotalpago;
                    break;            
                default:
            }



            $query = "INSERT INTO participantes (nombre,apellido, direccion, correo, cedula, institucion, inscrito, curso, conferencia, pago) 
            VALUES ('$nombre', '$apellido', '$direccion', '$correo', '$cedula', '$institucion','$inscrito','$curso', '$conferencia', '$pago')";  
             $result = mysql_query($query) or die("error". mysql_error()); 

            echo "¡Gracias! Hemos recibido sus datos.";
            header("location:index.php?status_insert=success");

?>