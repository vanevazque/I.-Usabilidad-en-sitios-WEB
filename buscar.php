<?php
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Aquí puedes realizar la lógica de búsqueda, por ejemplo, buscando en una base de datos o en un array de datos.
$resultados = [
    'Inicio' => 'index.php',
    'Iniciar sesión' => 'login.php',
    'registrarse' => 'registro.php',
    'Contacto' => '#contacto',
    'Mapas de sitio' => 'mapas_sitio.php',
    'Recuperar contraseña' => 'login.php',

];

$encontrados = [];
foreach ($resultados as $nombre => $link) {
    if (stripos($nombre, $query) !== false) {
        $encontrados[$nombre] = $link;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<br><br><br><br><br><br>
<center>
    <div class="container mt-5">
        <h1>Resultados de búsqueda para "<?php echo htmlspecialchars($query); ?>"</h1> <br><br>
        <?php if (count($encontrados) > 0): ?>
            <ul class="list-group">
                <?php foreach ($encontrados as $nombre => $link): ?>
                    <li class="list-group-item">
                        <a href="<?php echo $link; ?>"><?php echo $nombre; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No se encontraron resultados para "<?php echo htmlspecialchars($query); ?>"</p>
        <?php endif; ?>
    </div>

    <br><br>
   
    <a href="index.php" class="btn  btn-outline-black" type="submit">Regresar <br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a></center> 
  

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
