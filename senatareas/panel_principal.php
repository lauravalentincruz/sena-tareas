<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senatareas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <div Class="navbar">
        <div  class= "titulo" >
    <a href="/index.php"> 
        <h1>
            SENATAREAS
        </h1>
        </a>
        </div>
        <div class="enlaces">
        <?php
   
      if (isset($_SESSION["login"])&& $_SESSION["login"] == true) {
        echo '<a href="./funciones/cerrar_sesion.php"> Cerrar Sesion</a>';
      } else {
        echo '<a href="./funciones/cerrar_sesion.php"> Cerrar Sesion</a>';
      }
      ?>

        </div>
    </div>
   
</header>



<p> bienvenido<?php echo $_SESSION['rol'].' '.$_SESSION['nombre']; ?></p>

<?php

if ($_SESSION['rol']== 'instrutor'){
    require __DIR__.'/includes/panel_instructor.php';
} else {
  require __DIR__.'/includes/consultar_aprendiz.php';
}

?>