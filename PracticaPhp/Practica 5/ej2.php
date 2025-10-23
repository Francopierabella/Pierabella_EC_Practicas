<?php
if(!empty($_GET['destinatario']) && !empty($_GET['mensaje']) && !empty($_GET['autor'])){
    $destinatario = $_GET['destinatario'];
    $mensaje = $_GET['mensaje'];
    $mailEnviado = mail($destinatario, "ASUNTO DE CONSULTA", $mensaje, "From: " . $_GET['autor']);
    if($mailEnviado){
        echo "Mail enviado correctamente";
    } else {
        echo "Error al enviar el mail"; 
    }
}
?>

<form action="" method="get">
    <label for="destinatario">Email:</label> <input type="email" id="destinatario" name="destinatario">
    <label for="mensaje">Mensaje:</label> <input type="text" id="mensaje" name="mensaje">
    <label for="autor">Autor:</label> <input type="text" id="autor" name="autor">
    <button type="submit">Enviar</button>
</form>