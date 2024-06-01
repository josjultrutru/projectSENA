
<?php   

    /* se conectara al archivo de conexion */
   require_once "conexion.php"

       $host = "localhost;
       $usua = "root";
       $Password = "";
       $puerto = "3306";
       $bas_datos = "usersena";
       $Tabla = "login";


        $conexion = new mysqli ($hos, $usua, $Password , $puerto, $bas_datos, $Tabla ); 
        $conexion = mysqli_connect ( "localhost", "root", "", "3306", "usersena", "login");
 
         if ($conexion->connect_error)
             {
               die("Conexion fallida:" . $conexion->connect_error);
            } 
            else{
              echo "conectado";
            }
?>

