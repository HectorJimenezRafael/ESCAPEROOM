<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylejef1.css">
    <title>Jefe 4</title>
</head>
<body class="FONDOJEFE4">
<?php
session_start();
if (!($_SESSION["Jefe4"]=='check')){
    header("Location: ../bienvenida.php");
}
?>
<div class="row">

<div class="separador4"><p>BONITAS ESCALERAS</p></div>
<img src="../fondos/villano4.png" alt="">
    
<div class="separador4 cuestionario4"> <form class="btcarcel" action="../proc/proc.php" method="post">


    El enemigo de Batman que además mató a sus padres es el <input type="text" name="Joker" placeholder="Inserte el nombre del villano...">
    <br>
    <br>
    El color del pelo de este villano es el <select name="pelo">
    <option value="1">azul</option>
<option value="2">calvo</option>
<option value="3">rubio</option>
<option value="4">verde</option>
</select></p>
    <br>
    <p>Este villano te está diciendo cual es el botón de enviar correcto aunque no lo parezca </p>
    <br>
    <?php
    if (isset($_GET['pista4'])) {
        echo '<p  id="pista4">PISTAS</p>';
        echo '<p  id="pista4">El villano empieza por Jo </p>';
        echo '<p  id="pista4">El pelo es del mismo color que el de la gema del tiempo</p>';
        
    }
    ?>
    <input type="submit" name="Jefe4" class="Jefe4" id="Jefe4" placeholder="Adentrase en la dungeon">
    </form>

    <form class="btcarcel" action="../proc/proc.php" method="post">
    <input type="submit" name="Jefe4f" class="Jefe4f" id="Jefe4f" placeholder="Adentrase en la dungeon">
    </form>
</div>
    
</div>

</body>
</html>