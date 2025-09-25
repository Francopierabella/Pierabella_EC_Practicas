<?php
if(!empty($_GET['email']) && $_GET['email'] != '' && !empty($_GET['asunto']) && $_GET['asunto'] != ''){
    $email = $_GET['email'];
    $asunto = $_GET['asunto'];
    $mensaje = $_GET['mensaje'];
    $mailEnviado=mail($email, $asunto, $mensaje);
    if($mailEnviado)
        echo "Email enviado a $email";
    else
        echo "Error al enviar el email";
}
?>

<form action="" method="get">
    <input type="email" name="email" placeholder="Email a enviar" required> </br>
    <input type="text" name="asunto" placeholder="Asunto" required> </br>
    <input type="text" name="mensaje" placeholder="Cuerpo"> </br>
    <input type="submit" value="Enviar email">
</form>