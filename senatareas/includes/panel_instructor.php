<div class="contenedor_instrutor">
    <h2>tecnicos programacion de software</h2>
    <?php
    require __DIR__.'/includes/consultar_aprendiz.php';
    $query = consultaraprendices();
    if ($query){
        while($resultado =mysqli_fecth_assoc($query)){
            $fecha_nac = new DataTime($resultado['edad']);
            $fecha_act = new DataTime ();
            $años = $fecha_act->diff($fecha_nac);
            $edad=$años->y;
    ?>
            <div class="registro">
                <div class="registro_cod"><?php echo ($resultado['cod']); ?></div>
                <div class="registro_nombre"><?php echo ($resultado['nombre']); ?></div>
                <div class="registro_edad"><?php echo($edad); ?></div>
                <div class="registro_edad"><?php echo ($resultado['celular']); ?></div>"</div>
                <div class="registro_email"><?php echo ($resultado['email']); ?></div>"</div>

        </div>

        <?php
        }
    } else {
    echo ('no se encontraron registros');
}


?>
</div>
