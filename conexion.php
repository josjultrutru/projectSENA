
<?php   

       $hos = "127.0.0.1";
       $usua = "root";
       $Password = "";
       $bas_datos = "usersena";


        $con = new mysqli ($hos, $usua,$Password = "" ,$bas_datos ="usersena"); 
 
         if ($con->connect_error)
             {
              die("Conexion fallida:" . $con->connect_error);
            }
?>

