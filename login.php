<?php
require_once 'cdn.html';
?>
<?php
require_once 'conexion.php';
session_start();
 
if (isset($_POST['sesion'])) {
  require 'conexion.php';
  $email=$_POST['email'];
  $contrasena=$_POST['contrasena'];

  $query=$cnnPDO->prepare('SELECT * from usuarios WHERE email=:email and contrasena=:contrasena');
  $query->bindParam(':email',$email);
  $query->bindParam(':contrasena',$contrasena);

  $query->execute();
  $count=$query->rowCount();
  $campo = $query->fetch();
  

  if ($count) 
  {
    $_SESSION['id'] = $campo['id'];
      $_SESSION['nombre'] = $campo['nombre'];
      $_SESSION['apellido'] = $campo['apellido'];
      $_SESSION['email'] = $campo['email'];
      $_SESSION['contrasena'] = $campo['contrasena'];
      $_SESSION['is_admin'] = $campo['is_admin'];
 
 header("Location:index2.php");
    } else {
        header("Location:error.php");     

  }
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <!-- JQuery Validate library -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="@sweetalert2/theme-dark/dark.css">
    <!-- Title Page-->
    <!-- Libreria de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Registro de Usuarios</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- BOOTSTRAP V5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>


<style type="text/css">
         
         body
{
   background-image: url(img/0.jpg);
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   background-attachment: 15px;
}
  
body
{
min-height: 80vh;
background: linear-gradient( rgba(5,7,12,0.75), rgba(5,7,12,0.20)),
url(img/0.jpg) no-repeat center fixed;
background-size: cover;
backdrop-filter: blur(3px);   
}
         
    </style>






   <div class="container" style="width:50%; height: 50%;">
        <br>
        <br>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3" style="background-image: url(img/cafe.jpeg);
            background-size: 100%;">
                <div class="card-heading"></div>
                <div class="card-body">
                    <br>
                    <br>
                    <br>
                   <center> <h2 class="title" style="font-family: Georgia; font-size:30px; color: black;">Inicia Sesión</h2>
                    <form id="formajax" method="POST">
                        <div class="form-floating mb-3">
                            <input  class="form-control input--style-3" type="text" id="email" placeholder="email" name="email">
                            <label for="email">Correo Electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input  class="form-control input--style-3" type="password" id="contrasena" placeholder="contrasena" name="contrasena">
                            <label for="contrasena" >Contraseña</label>
                        </div>
                         <button id="sesion" name="sesion" class="btn  btn-outline-black"  type="submit">Iniciar Sesión</button> 
                         <a href="index.php" id="regresar" name="regresar" class="btn  btn-outline-black"  type="submit">Volver</a> 
                         <a href="recuperar.php" class="btn  btn-outline-black"  type="submit">Recuperar contraseña</a>
                         </center>
                    </form></div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>