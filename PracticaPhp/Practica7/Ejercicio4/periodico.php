<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php 
        // Confeccionar una página que simule ser la de un periódico.
        //  La misma debe permitir configurar qué tipo de titular deseamos que aparezca al visitarla, pudiendo ser: 
        //   Noticia política, Noticia económica o Noticia deportiva.  
        //   Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico. 
        //   Almacenar en una cookie el tipo de titular que desea ver el cliente.
        //  La primera vez que visita el sitio deben aparecer los tres titulares. 
        //  Disponer un hipervínculo a una tercer página que borre la cookie creada.
        session_start();
        if(isset($_COOKIE['contador'])){
            $contador = $_COOKIE['contador'] + 1;
        }else{
            $contador = 1;
        }
        setcookie('contador',$contador,time() + 86400 * 30);
        if(!empty($_POST['eleccion'])){
            $eleccion = $_POST['eleccion'];
            setcookie('eleccion',$eleccion,time() + 86400 * 2);
            $_COOKIE['eleccion'] = $eleccion;
        }
        else{
            $_COOKIE['eleccion'] = '';
        }
        $_SESSION['contador'] = $contador;
        if ($contador == 1){

        $titular1 = "Noticia Politica";
        $titular2 = "Noticia Economica";
        $titular3 = "Noticia Deportiva";
        ?>
        <header>
            <?php echo "<h1> " . $titular1 . "</h1>" . "<br>" . "<h1> " . $titular2 . "</h1>" . "<br> " . "<h1> " . $titular3 . "</h1>";}
            else{
                echo "<h1>" . $_COOKIE['eleccion'] . "</h1>";
            }
            ?>
        </header>

        <form action="" method="post">
            <input type="radio" name="eleccion" value="Noticia Politica">
            <input type="radio" name="eleccion" value="Noticia Economica">
            <input type="radio" name="eleccion" value="Noticia Deportiva">
            <button type="submit">titular</button>
        </form>
        <a href="eliminarCookie.php">eliminarCookie</a>
        <?php 
        ?>
</body>
</html>