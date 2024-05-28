<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
    header("Location: login.php");
    exit();
}
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Chat</title>
    <?php require_once 'cdn.html'; ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admin Chat</h1>
        </div>
    </div>
    <div class="row chat-box">
        <div class="col-12">
            <div id="chat" class="chat-messages"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form id="chat-form" method="POST" action="chat.php">
                <div class="input-group">
                    <input type="text" id="mensaje" name="mensaje" class="form-control" placeholder="Escribe tu mensaje aquí..." required>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function loadMessages() {
        $.ajax({
            url: 'chat.php',
            method: 'GET',
            success: function(data) {
                $('#chat').html(data);
                $('#chat').scrollTop($('#chat')[0].scrollHeight);
            }
        });
    }

    loadMessages();
    setInterval(loadMessages, 3000);

    $('#chat-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'chat.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function() {
                $('#mensaje').val('');
                loadMessages();
            }
        });
    });
});
</script>
</body>
</html>
