<center><p class="title"style="font-family: Georgia; color: white; ">
<?php
// Generar un ID único basado en la URL del sitio y la hora actual
$site_url = $_SERVER['HTTP_HOST']; // Obtener la URL del sitio
$current_time = time(); // Obtener la marca de tiempo actual
$id = md5($site_url . $current_time); // Generar un ID único utilizando el hash MD5

echo "ID del sitio: " . $id;
?> </center></p>


<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Venta de ropa</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
       

    <style>
    .form-inline .form-control {
        width: auto;
        flex: 1;
    }

    /* Nueva clase para alinear el formulario a la derecha */
    .form-align-right {
        display: flex;
        justify-content: flex-end;
    }
</style>


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Ropa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                    
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">HOME</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">INICIAR SESIÓN</a></li> 
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="registro.php">REGISTRARSE</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="ayuda.php">AYUDA</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="mapas_sitio.php">MAPAS DEL SITIO</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container mt-5">
    <form action="buscar.php" method="GET" class="form-inline form-align-right">
        <div class="form-group mb-2">
            <input type="text" class="form-control form-control-sm" name="query" placeholder="Escribe tu búsqueda..." required>
        </div>
        <button type="submit" class="btn btn-primary btn-sm mb-2">Buscar</button>
    </form>
</div>





        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Bienvenidos</span>
                <span class="site-heading-lower">Venta de ropa Online</span>
            </h1>
        </header>


        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/nike.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">excelente calidad</span>
                            <span class="section-heading-lower">Venta de ropa</span>
                        </h2>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"></p></div>
<center>
            <div id="contacto" class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+52-844705770">+52-844 705 770</a></p>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:ropaonline@gmail.com">ropaonline@gmail.com</a></p>
                        </div>
                    </div>
                    </center>


        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
