<?php

$host = "localhost";
$user = "root";
$contra = "";


//** conexion con la base de datos y el servidor
$link = new mysqli ($host, $user, $contra); 
$link = mysql_connect($host,$user,$contra) or die ("<h2> No se encuetra el servidor</h2>");
$db = mysql_select_db("usuarios",$link) or died ("<h2>error de conexion</h2>");


 if ($link->connect_error)
             {
               die("Conexion fallida:" . $conexion->connect_error);
            } 
            else{
              echo "conectado";
            }

//obtenemos los valores del formulario
$nombre = $_POST('nombreusuario');
$email = $_POST('emailusuario');
$passwd = $_POST('passusuario');
$repass= $_POST('reppassusuario');

//**Obtiene la longitud de un string

$req =(strlen($nombre)*strlen($email)*strlen($passwd)*strlen($repass)) or die("no se ha llenado todos los campos");

//**se confirma la contraseña.

if($passwd!=$repass){
die('la contras>ntilde no coinciden <br><br><a href="Regist.html">volver</a>');
}

//** Se encripta la contraseña
$contrUs = md5($passwd);
$contrUs2 = md5($repass);


//** ingresa la informacion a la tabla datos
mysql_query("INSERT INTO datos VALUES('','$nombre','$email','$contrUs','$contrUs2')",$link) or("<h2>error de envio</h2>");



echo'
<h2>Registro completo</h2>
<h5>Gracias por registrarse en nuestra pagina web, ya puede ingresas como usuario</h5>
<a href="Regist.html">logearse</a>
';

?>

