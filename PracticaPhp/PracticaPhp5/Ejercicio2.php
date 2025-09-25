<?php
if(!empty($_POST['nombre']) && $_POST['nombre'] != '' && !empty($_POST['email']) && $_POST['email'] != ''){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    $asunto = "Consulta desde la web";
    $mensaje = "El usuario $nombre ha realizado la siguiente consulta: $consulta";
    $desde="From: $email";
    $mailEnviado=mail("Webmaster@admin.com", $asunto, $mensaje, $desde);
    if($mailEnviado){
        echo "Consulta enviada. Nos pondremos en contacto a la brevedad";
    }
    else{
        echo "Error al enviar la consulta";
    }
}
?>

<form action="" method="post">
    <p>Ingrese su nombre y apellido</p>
    <input type="text" name="nombre" required>
    <p>Ingrese su email</p>
    <input type="email" name="email" required>
    <p>Ingrese la consulta</p>
    <input type="text" name="consulta" style="width:40%;"></br>
    <input type="submit" value="Enviar consulta">
</form>