<?php 
session_start();
 ?>
<?php
require_once 'cdn.html';
?>
<?php
require_once 'conexion.php';
if (isset($_POST['registrar'])) 
{  
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];

    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = '6Lc16egpAAAAAOHVKdNjKApJR8RE3GePP4S9vLlI';

    $errors = array();

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$ip}");

    $atributos = json_decode($response, true);

    if (empty($atributos) || !$atributos['success']) {
        $errors[] = 'Verifica el captcha';
    }

    //Prepara la insercion de datos
    if (!empty($nombre) && !empty($email) && !empty($contrasena))

    {
    $sql=$cnnPDO->prepare("INSERT INTO usuarios (nombre, email, contrasena) VALUES (:nombre, :email, :contrasena)");
    // Define parametros
    $sql->bindParam(':nombre',$nombre);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':contrasena',$contrasena);
    //Ejecuta 
    
    $sql->execute();
    unset($sql);
    unset($cnnPDO);
    header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <!-- JQuery Validate library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="@sweetalert2/theme-dark/dark.css">
    <!-- Title Page-->
    <!-- Libreria de jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Registro de Usuarios</title>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- BOOTSTRAP V5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="container" style="width:50%; height:50%;">
        <br>
        <br>
        <br>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
         <div class="card card-3" style="background-image: url(img/cafe.jpeg);
            background-size: 100%; background-position: center;
   background-repeat: no-repeat;
   background-size: cover;">
                <div class="card-heading"></div>
                <div class="card-body">
                  <center> <h2 class="title"style="font-family: Georgia; font-size:30px; color: black; ">Registro</h2></center> 
                    <form id="formajax" method="POST">
                               
                        <div class="form-floating mb-3">
                            <input  type="text" class="form-control input--style-3" id="nombre" placeholder="nombre" name="nombre">
                            <label for="nombre"  >Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input  class="form-control input--style-3" type="text" id="email" placeholder="email" name="email">
                            <label for="email">Correo Electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input  class="form-control input--style-3" type="password" id="contrasena" placeholder="contrasena" name="contrasena">
                            <label for="contrasena" >Contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input  class="form-control input--style-3" type="password" id="confirma" placeholder="confirma" name="confirma">
                            <label for="confirma">Confirmar Contraseña</label>
                        </div>
<center>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="6Lc16egpAAAAAI4EKFgQThA6tepZgU_PGJ-Pl-l8"></div>
                        </div></center>
        </div>

                        <center>
                         <button id="registrar" name="registrar" class="btn  btn-outline-black" style="color:black" type="submit">Registrar <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg></button> 
                          <a href="index.php" class="btn  btn-outline-black" type="submit">Regresar <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a></center> 
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    
<script type="text/javascript">
      $(document).ready(function(){
      $('#registrar').click(function(){
            if ($("#nombre").val() == ""){
                  Swal.fire({
                        icon: 'error',
                        title: 'Dato Incorrecto!',
                        text: 'Debe de Ingrese su Nombre..',
                        //position: 'top-end',
                        showConfirmButton: false,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                  });
                  return false;
            }

            else if ($("#email").val() == ""){
                  Swal.fire({
                        icon: 'error',
                        title: 'Dato Incorrecto!',
                        text: 'Debe de ingresar su email..',
                        //position: 'top-end',
                        showConfirmButton: false,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                        });
                  return false;
                  }

            else if ($("#contrasena").val() == ""){
                  Swal.fire({
                        icon: 'error',
                        title: 'Dato Incorrecto!',
                        text: 'Debe de ingresar su contraseña..',
                        //position: 'top-end',
                        showConfirmButton: false,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                        });
                  return false;

                  }

            else if ($("#confirmar").val() == ""){
                  Swal.fire({
                        icon: 'error',
                        title: 'Dato Incorrecto!',
                        text: 'Debe confirmar la contraseña...',
                        //position: 'top-end',
                        showConfirmButton: false,
                        confirmButtonText: 'Aceptar',
                        timerProgressBar: true,
                        timer: 2500
                        });
                  return false;
            }

                  });
});
</script>












</body>
</html>





