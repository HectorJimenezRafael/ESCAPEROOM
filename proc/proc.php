<?php
// bienvenida -> jefe1
if (isset($_POST['btnSTART']))  {
    session_start(); 
    $_SESSION['Bowser']='check';
    header('Location: ../view/jefe1.php');
    

} else if(isset($_POST['btnSTART'])){
    header('Location: ../bienvenida.php');
}

// jefe1 -> jefe2
if (isset($_POST['Jefe1']) && strtolower($_POST['Bowser'])=='bowser' && ($_POST['Mario'])==4 && ($_POST['tropas']==1))   {
    session_start();
    $_SESSION['Jefe2']='check'; 
    header('Location: ../view/jefe2.php');

} else if(isset($_POST['Jefe1']) )  {
     header('Location: ../view/jefe1.php?pista1=1');
 }
 

// jefe2 -> jefe3
 if (isset($_POST['Jefe2']) && strtolower($_POST['Verde'])=='verde' && strtolower($_POST['Rojo'])=='rojo' && strtolower($_POST['Azul'])=='azul' && strtolower($_POST['Thanos'])=='thanos') {
    session_start(); 
    $_SESSION['Anakin']='check';
    header('Location: ../view/jefe3.php');

} else if(isset($_POST['Jefe2'])){
    header('Location: ../view/jefe2.php?pista2=2');
 }

 // jefe3 -> jefe4
 if (isset($_POST['Anakin']) && ($_POST['palabra1']==2) && ($_POST['palabra2']==3)) {
    session_start();
    $_SESSION['Jefe4']='check'; 
    header('Location: ../view/jefe4.php');
} else if(isset($_POST['Anakin'])){
    header('Location: ../view/jefe3.php?pista3=3');
 }


  // jefe4 -> jefe5
  if (isset($_POST['Jefe4']) && ($_POST['pelo']==4) && strtolower($_POST['Joker'])=='joker')  {
    session_start(); 
    $_SESSION['Jefe5']='check';
    header('Location: ../view/jefe5.php');

} else if(isset($_POST['Jefe4'])){
    header('Location: ../view/jefe4.php?pista4=4');
 }
  // jefe4 -> carcel (joker te ha capturado)
  if (isset($_POST['Jefe4f']))   {
    session_start(); 
    header('Location: ../view/carcel.php');
} 

  // jefe5 -> jefe6
  if (isset($_POST['Jefe5']) && ($_POST['villano5-1']==2) && ($_POST['villano5-2']==2)) {
    session_start(); 
    $_SESSION['Jefe6']='check';
    header('Location: ../view/jefe6.php');

} else if(isset($_POST['Jefe5'])){
    header('Location: ../view/jefe5.php?pista5=5');
 }


  // jefe6 -> congratulations
  if (isset($_POST['Jefe6']) && strtolower($_POST['Triciclo'])=='triciclo' && strtolower($_POST['Reloj'])=='reloj') {
    session_start();
    $_SESSION['Jefe7']='check'; 
    header('Location: ../congratulations.php');

} else if(isset($_POST['Jefe6'])){
    header('Location: ../view/jefe6.php?pista6=6');
 }










