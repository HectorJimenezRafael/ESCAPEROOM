<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylejef1.css">
    <title>Jefe 6</title>
</head>
<body class="FONDOJEFE6">
<?php
session_start();
if (!($_SESSION["Jefe6"]=='check')){
    header("Location: ../bienvenida.php");
}
?>


<div class="row">

<div class="separador6"><p>*</p></div>


<div class="separador6 cuestionario6">

<?php
    if (isset($_GET['pista6'])) {
        echo '<p  id="pista6">PISTAS</p>';
        echo '<p  id="pista6">bici con tres ruedas </p>';
        echo '<p  id="pista6">Te da la hora</p>';
        
    }
    ?>
    

    <form class="btcarcel" action="../proc/proc.php" method="post">
    <img class="saw" src="../fondos/sawdef.png" alt="">
    <br>
        ¿ Qué vehículo usa Saw?
    <input type="text" name="Triciclo" placeholder="Inserte la palabra">
    <br>
    VAMOS A JUGAR A UN JUEGO
    <br>
    <img src="../fondos/xocas.png" alt="">
    <br>
     Tengo agujas y no sé coser, tengo números y no sé leer.
    <input type="text" name="Reloj" placeholder="¿Qué soy?">
    <br>
    <br>
    <input type="submit" class="Jefe6" name="Jefe6" id="Jefe6" placeholder="Adentrase en la dungeon">

    </form>


    </div>
</body>
</html>