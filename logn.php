<?php
require '../src/Crud.php';

$crud = new Crud($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        $crud->create($_POST['name'], $_POST['email']);
    } elseif (isset($_POST['update'])) {
        $crud->update($_POST['id'], $_POST['name'], $_POST['email']);
    } elseif (isset($_POST['delete'])) {
        $crud->delete($_POST['id']);
    }
}
?>

<!DOCTYPE html>
  <html lang="en">
   <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width", user-scalable="no", initial-scale="1.0", maximum-scale="1.0", minimun-scale="1.0">
      <link rel="stylesheet" href="css/styles.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
        <!-- Title Page -->  
    <title>Login-Ingresos Alcaldia Neiva Secretaria Cultura Municipal</title>
    
    
      </head>
  <body>
      <div class="wrapper">
          <form action="login.html" method="post">
               <h1>alcaldiaNeiva2024</h1>     
                    <div class="input-box center">
                          <box-icon name='images'></box-icon>
                         <img src="alcaldiaNeiva2024.jpg"  width="80pv" height="80pv" alt="logo"></img>
                          <i class='bx bxs-image'></i>
                      
                    </div>
                   
              <h1>CorreoElectronico</h1>
                   <div class="input-box center">
                      <input  type="CorreoElectronico"name="CorreoElectronico" id="CorreoElectronico" placeholder="CorreoElectronico" required>
                      <i class='bx bxs-user'></i>
                </div>
              <h1>Password</h1>
                  <div class="input-box center">
                        <input type="Password" name="Password" id="Password" placeholder="Password" required>
                        <i class='bx bxs-key'></i>
                  </div>
               <div class="input-box center"></div>
                         <br><button type="submit" class="btn btn-primary btn-block" value="Ingresar">Ingresar</button></br>
                         <br><button type="reset"></br>
                 </div>
            
                    <p class = "message"> No estas registrado </p>
                    <div class = "input-box left-center">
                          <br><button class = "btn btn-primary btn-block">Registrarse</button></br>
                   </div>
        </form>>
      
   </body>  
</html>  

<?php
     if(isset($_POST['login']));

     $CorreoElectronico = $_POST['CorreoElectronico'];
     $Password = $_POST['Password'];

     $insertDatos = "INSERT INTO datos VALUES('CorreoElectronico', 'Password')";
     $ejectrInsert = mysqli_query( $enlace, $insertDatos);


?>


