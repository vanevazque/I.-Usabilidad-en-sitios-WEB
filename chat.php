<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $usuario_id = $_SESSION['id'];
        $is_admin = $_SESSION['is_admin'];

        $stmt = $cnnPDO->prepare("INSERT INTO mensajes (usuario_id, mensaje, is_admin) VALUES (:usuario_id, :mensaje, :is_admin)");
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->bindParam(':is_admin', $is_admin);
        $stmt->execute();
    }
} else {
    $stmt = $cnnPDO->prepare("SELECT m.mensaje, m.fecha, u.nombre, m.is_admin FROM mensajes m JOIN usuarios u ON m.usuario_id = u.id ORDER BY m.fecha ASC");
    $stmt->execute();
    $mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($mensajes as $mensaje) {
        $nombre = $mensaje['is_admin'] ? 'Admin' : htmlspecialchars($mensaje['nombre']);
        echo "<div class='message'><strong>{$nombre}:</strong> {$mensaje['mensaje']} <span class='text-muted small'>{$mensaje['fecha']}</span></div>";
    }
}
?>


