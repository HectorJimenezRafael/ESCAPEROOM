<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylejef1.css">
    
    <title>Jefe 5</title>
</head>
<body class="FONDOJEFE5">
<?php
session_start();
if (!($_SESSION["Jefe5"]=='check')){
    header("Location: ../bienvenida.php");
}
?>
    


   <div class="row">   
   <div class="separador5"><p>*</p></div>

   <div class="separador5 cuestionario5">
   <form class="btcarcel" action="../proc/proc.php" method="post">

   <?php
    if (isset($_GET['pista5'])) {
        echo '<p  id="pista5">PISTAS</p>';
        echo '<p  id="pista5">El villano empieza por Pe </p>';
        echo '<p  id="pista5">El elemento contiene helio</p>';
        
    }
    ?>
    <br>
    ¿ Cuál es el nombre del villano de la película de It ?<select name="villano5-1">
    <option value="1">Ronald McDonald</option>
<option value="2">Pennywise</option>
<option value="3">Carlo Ancelotti</option>
<option value="4">Ente demoníaco</option>
</select></p>
    <br>
    ¿ Qué elemento suele aparacer junto al villano ?<select name="villano5-2">
    <option value="1">Coche rojo</option>
<option value="2">Globo rojo</option>
<option value="3">Circos</option>
<option value="4">Cuchillos</option>
</select></p>
   
    <img src="../fondos/villano5.png" alt="">
    
    <input type="submit" class="Jefe5" name="Jefe5" id="Jefe5" placeholder="Adentrase en la dungeon">
    </form>

    </div>

</div>





   



</body>
</html>