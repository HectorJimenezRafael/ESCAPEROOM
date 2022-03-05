<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/stylejef1.css">
    <title>Recompensa</title>
</head>
<body class="FONDOPRADERA">
<?php
session_start();
if (!($_SESSION["Jefe7"]=='check')){
    header("Location: bienvenida.php");
}
?>
<h1 class="felicitacion">FELICIDADES HAS RESCATADO UN PIKACHU, ARMA EL PUZZLE PARA QUE SEA TU AMIGO</h1>

<svg width="600" height="600" id="entorno">
		<g id="fondo"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master//pikachu.png" width="400" height="400" x="200" y="100"></g>
	<g class="padre" id="0"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/1.png" class="movil"></g>
	<g class="padre" id="1"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/2.png" class="movil"></g>
	<g class="padre" id="2"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/3.png" class="movil"></g>
	<g class="padre" id="3"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/4.png" class="movil"></g>
	<g class="padre" id="4"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/5.png" class="movil"></g>
	<g class="padre" id="5"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/6.png" class="movil"></g>
	<g class="padre" id="6"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/7.png" class="movil"></g>
	<g class="padre" id="7"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/8.png" class="movil"></g>
	<g class="padre" id="8"><image xlink:href="https://raw.githubusercontent.com/NestorPlasencia/pikachu-puzzle/master/9.png" class="movil"></g>
</svg>
<audio id="win" src="https://raw.githubusercontent.com/NestorPlasencia/PikaPuzzle/master/media/win.mp3"></audio>
	

<script type="text/javascript" src="../ESCAPEROOM/view/main.js"></script>
<p class="volver">
<a href="../escaperoom/proc/replay.proc.php">Volver a jugar</a>
</p>
</body>
</html>