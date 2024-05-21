<?php  

       /* se conectara al archivo de conexion */
       require_once "conexion.php"


       /* obtener los datos del formulario */

        $CorreoElectronico = $_POST["CorreoElectronico"];

        $Password = $_POST["Password"];

  /* Insertar los datos de la tabla (ejempl: "nombre")*/

   $sql = INSERT INTO login ( CorreoElectronico, Password) VALUES ('$CorreoElectronico', '$Password' ) ;

   

    if($conexion->query($sql) === TRUE){
      header("location:../HTML/carga.html");
       } else{
       echo "Error al registrar:" . $conexion->error;
       }
      /*Cerrar la conexion */
  $conexion->close();

?>



