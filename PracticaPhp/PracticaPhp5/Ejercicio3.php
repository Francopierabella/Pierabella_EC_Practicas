<?php
//Escribir un script para que un visitante recomiende el sitio a un amigo
if(!empty($_POST['nombre']) && $_POST['nombre'] != '' && !empty($_POST['email']) && $_POST['email'] != ''){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = "Te recomiendo este sitio web";
    $mensaje = 'Hola, te recomiendo que visites este sitio web:. <a href="Ejercicio3.php">Mi pagina web</a> .'."\n".'Saludos, '.$nombre;
    $desde="From: mipagina@web.com";
    $mailEnviado=mail($email, $asunto, $mensaje, $desde);
    if($mailEnviado){
        echo "Email enviado a $email";
    }
    else{
        echo "Error al enviar el email";
    }
}
?>
<form action="" method="post">
    <h3>Recomendar pagina web</h3>
    <p>Ingrese su nombre</p>
    <input type="text" name="nombre" required>
    <p>Ingrese el email a quien quiera recomendar la pagina</p>
    <input type="email" name="email" required> </br>
    <input type="submit" value="Enviar email">

</form>