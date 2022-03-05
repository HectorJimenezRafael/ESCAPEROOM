<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/stylejef1.css">
    <link rel="stylesheet" href="../style/thanos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <title>Jefe 2</title>
</head>
<body class="FONDOJEFE2">
<?php
session_start();
if (!($_SESSION["Jefe2"]=='check')){
    header("Location: ../bienvenida.php");
}
?>
  <div class="row"> 

    <div class="contenedor">
		<h1>GEMAS DEL INFINITO</h1>

		<div class="contenedor-botones">
			<button class="boton uno"><span>Espacio</span></button>
			<button class="boton dos"><span>Mente</span></button>
			<button class="boton tres"><span>Realidad</span></button>
			<button class="boton cuatro"><span>Poder</span></button>
			<button class="boton cinco"><span>Tiempo</span>
            <button class="boton seis"><span>Alma</span>
				
	</div>
    <br>
    <form action="../proc/proc.php" method="post">
        El color de la gema del tiempo es
    <input type="text" name="Verde" placeholder="Inserte el color">
    <br>
    El color de la gema de la realidad es
    <input type="text" name="Rojo" placeholder="Inserte el color">
<br>
El color de la gema del espacio es
    <input type="text" name="Azul" placeholder="Inserte el color">
    <br>
    ¿Qué villano aniquiló a la mitat de la población del universo con las gemas?
    <input type="text" name="Thanos" placeholder="Inserte el villano">
    <br>
    <input class="Jefe2" type="submit" name="Jefe2" id="Jefe2" placeholder="Adentrase en la dungeon">
    </form>
    <?php
    if (isset($_GET['pista2'])) {
        echo '<p id="pista2"><h1>PISTAS</h1></p>';
        echo '<p id="pista2">El villano empieza por Th</p>';
        echo '<p id="pista2">Ponte encima del nombre de las gemas con el cursor</p>';
        
    }
    ?>
    </div>  
</body>
</html>