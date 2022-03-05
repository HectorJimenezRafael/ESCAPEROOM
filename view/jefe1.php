<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style/stylejef1.css">
   
    <title>Jefe 1</title>
</head>
<body class="FONDOJEFE1">
    <!-- bowser -->

    <?php
session_start();
if (!($_SESSION["Bowser"]=='check')){
    header("Location: ../bienvenida.php");
}
?>
    <div class="row">  
    <div class="separador">

<p>RESPONDE A LAS PREGUNTAS DEL MUNDO 8</p>
</div>

<div class="separador cuestionario">

<img class="iconoB" src="../fondos/icono_b.png" alt="">

<?php
    if (isset($_GET['pista1'])) {
        echo '<p id="pista1"><h1>PISTAS</h1></p>';
        echo '<p id="pista1">El villano empieza por bo</p>';
        echo '<p id="pista1">Su enemigo es fontanero</p>';
        echo '<p id="pista1">Sus tropas son marrones</p>';
    }
    ?>

<form  action="../proc/proc.php" class="BTNJEFE1" method="post">
<p class="TextoBowser">¿ A quién hace refencia el símbolo de arriba ?</p>

<input type="text" name="Bowser" placeholder="Inserte el nombre del villano...">

<br>
<p class="TextoBowser">El enemigo número 1 de este villano</p>


<img src="../fondos/wanted_img.PNG" alt="">
<br>
<br>
<select name="Mario">
    <option value="1">Sonic</option>
<option value="2">Batman</option>
<option value="3">Link</option>
<option value="4">Mario</option>
</select>


    

<br><br>
<p>Seleccione las tropas que tiene en su poder este tirano</p>
<br>
    <input type="radio" name="tropas" value="1" />
    <label for="goombas">goombas</label>
    <input type="radio" name="tropas" value="2"  />
    <label for="tigres">tigres</label>
    <input type="radio" name="tropas" value="3"  />
    <label for="robots">robots</label>

    <br>

    <br>
<input type="submit"  class="Jefe1" name="Jefe1"  >

</form>



</div>

    </div> 




    
</body>
</html>