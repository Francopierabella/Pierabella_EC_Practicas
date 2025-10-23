<?php 

# Enviar un mail

if(!empty($_GET['email']) && !empty($_GET['asunto']) && !empty($_GET['mensaje'])){
    $mail = $_GET['email'];
    $asunto = $_GET['asunto'];
    $mensaje = $_GET['mensaje'];
    $mailEnviado = mail($mail, $asunto, $mensaje);
    if($mailEnviado){
        echo "Mail enviado correctamente";
    } else {
        echo "Error al enviar el mail";
    }
}



?>

<form action="" method="get">
    <label for="email">Email: <input type="email" id="email"></label>
    <label for="asunto">asunto:<input type="text" id="asunto"></label>
    <label for="mensaje">Mensaje:<textarea id="mensaje"></textarea></label>
    <button type="submit">Enviar</button>
</form>