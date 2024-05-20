<?php   

       /* se conectara al archivo de conexion */
       require_once "conexion.php"


       /* obtener los datos del formulario */

       $nombre = $_POST["nombre"];

       $apellidos = $_POST["apellidos"];

        $Telefono = $_POST["phone"];

        $CorreoElectronico = $_POST["Correo"];

        $descrip_proyecto = $_POST["descrip_proyecto"]

       /* $gestorcultural = $_POST["gestorcultural"];

        $creadorcultural = $_POST['creadocultural'];

        $Fecha_diligenciamiento = $_POST["fechdiligencia"];*/

  /* Insertar los datos de la tabla (ejempl: "nombre")*/

   $sql = INSERT INTO usuario(nombre, apellidos, Telefono, CorreoElectronico,descrip_proyecto);

    if($con->query($sql) === TRUE){
      header("location:../HTML/Carga.html");
       } else{
       echo "Error al registrar:" . $con->error;
       }
      /*Cerrar la conexion */
  $con->close();

?>
