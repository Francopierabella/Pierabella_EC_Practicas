<?php   
    session_start();
    include "contador.php";
    echo "Has visitado la pagina " . $_SESSION['contador'] . " veces.";
?>