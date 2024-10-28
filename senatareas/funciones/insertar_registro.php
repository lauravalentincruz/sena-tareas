<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $identificacion = intval($_POST['identifica']);
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $fecha = $_POST['fecha_nac'];
    $celular=$_POST['celular'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];
    $contra = $_POST['contra'];
    $fechaNac= date('Y-m-d', strtotime($fecha));
   

    
    require '/apache/htdocs/senatareas/includes/conexion_bd.php';
    echo $usuario;
    $sqlUsuario = "INSERT INTO usuario (email, contra, rol) VALUES ('$email', '$contra', '$rol')";
    $sqlAprendiz = "INSERT INTO aprendices (cod, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nac, celular, email, contra) VALUES ('$identificacion', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$fechaNac', '$celular', '$email', '$contra')";


    
    $consulta = mysqli_query($coneccion, $sqlUsuario);
    $consulta = mysqli_query($coneccion, $sqlAprendiz);
    
    header("location: ../login.php");
 
}