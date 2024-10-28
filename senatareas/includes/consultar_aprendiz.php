<?php

function consultaraprendices()
{
    try{
        require __DIR__.'/includes/conexion_bd.php';

        $sql = "SELECT CONCAT(a.primer_nombre,''),''a.
        primer_apellido,' ',COALESCE(a.segundo_apellido)) AS nombre, a.cod, a.fecha_nac AS edad, a.
        celular, asu.email FROM aprendices a INNER JOIN usuarios usu ON a.email=usu.email;";

        $consulta = mysqli_query($coneccion,$sql);

        return $consulta;
    }catch (\Throwable $th){
        var_dump($th);
    }
}