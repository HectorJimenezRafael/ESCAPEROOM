<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleJEF1.css">
    <title>Jefe 3</title>
</head>
<body class="FONDOJEFE3">

<?php
session_start();
if (!($_SESSION["Anakin"]=='check')){
    header("Location: ../bienvenida.php");
}
?>
<h1 class="ladooscuro">DERROTA A LAS NAVES Y RESPONDE LAS PREGUNTAS GALÁCTICAS</h1>
<form id="form" style="display: none;" action="../proc/proc.php" method="post">
        



<p class="ladooscuro2"> <b>DARTH VADER:</b> Yo soy tu <select name="palabra1">
    <option value="1">abuelo</option>
<option value="2">padre</option>
<option value="3">hijo</option>
<option value="4">profesor</option>
</select></p>
<br>
<p class="ladooscuro2"> Que la <select name="palabra2">
    <option value="1">suerte</option>
<option value="2">astucia</option>
<option value="3">fuerza</option>
<option value="4">soledad</option>
</select> te acompañe</p>

<?php
    if (isset($_GET['pista3'])) {
        echo '<p class="ladooscuro3" id="pista3">PISTAS</p>';
        echo '<p class="ladooscuro3" id="pista3">Darth Vader es el ... de Luke </p>';
        echo '<p class="ladooscuro3" id="pista3">La utilizan los Jedis y los Sith</p>';
        
    }
    ?>
<br>

<input  type="submit"  class="Anakin" name="Anakin">
</form>

        <p  onclick="val(this);"><img id="item1" src="../fondos/nave.png" alt=""></p><br>
        <p  onclick="val(this);"><img id="item2" src="../fondos/nave.png" alt=""></p><br>
        <p  onclick="val(this);"><img id="item3" src="../fondos/nave.png" alt=""></p><br>
        <p  onclick="val(this);"><img id="item4" src="../fondos/nave.png" alt=""></p>
        <p  onclick="val(this);"><img id="item5" src="../fondos/nave.png" alt=""></p><br>
    </div>
    <div class="column-4">

    </div>
    <?php

    
    ?>
    
        
    
    <script>
        contador=0;
        function val(parrafo) {
            contador++;
            parrafo.innerHTML='<br>'
            console.log(contador)
            if (contador==5) {
                document.getElementById('form').style.display='block';
            }
        }
    </script>
</body>
</html>