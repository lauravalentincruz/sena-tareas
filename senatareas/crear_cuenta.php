<?php include '/apache/htdocs/senatareas/includes/header.php'; ?>

<div class="form_fondo">
    <div class="form_registro">
        <form action="" method="post">
            <fieldset>
                <legend>Crear cuenta</legend>
                <div class="camposRegistro">
                    <div class="campo">
                        <label for="identifica">Identificación</label>
                        <input type="text" id="identifica" name="identifica" placeholder="Identificación" required>
                    </div>
                    <div class="campo">
                        <label for="nombre1">Primer nombre</label>
                        <input type="text" id="nombre1" name="nombre1" placeholder="Escribe su primer nombre" required>
                    </div>
                    <div class="campo">
                        <label for="nombre2">Segundo nombre</label>
                        <input type="text" id="nombre2" name="nombre2" placeholder="Escribe su segundo nombre" required>
                    </div>
                    <div class="campo">
                        <label for="apellido1">Primer apellido</label>
                        <input type="text" id="apellido1" name="apellido1" placeholder="Escribe su apellido paterno" required>
                    </div>
                    <div class="campo">
                        <label for="apellido2">Segundo apellido</label>
                        <input type="text" id="apellido2" name="apellido2" placeholder="Escribe su apellido materno" required>
                    </div>
                    <div class="campo">
                        <label for="fecha_nac">Fecha de nacimiento</label>
                        <input type="date" id="fecha_nac" name="fecha_nac" required>
                    </div>
                    <div class="campo">
                        <label for="celular">Celular</label>
                        <input type="text" id="celular" name="celular" placeholder="Escribe su número de celular" required>
                    </div>
                    <div class="campo">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" placeholder="example@correo.com" required>
                    </div>
                    <div class="campo">
                        <label for="rol">Rol</label>
                        <select id="rol" name="rol" required>
                            <option value="" disabled selected>Seleccione un rol</option>
                            <option value="aprendiz">Aprendiz</option>
                            <option value="instructor">Instructor</option>
                        </select>
                    </div>
                    <div class="campo">
                    <label for="contra">Contraseña</label>
                        <input type="password" id="contra" name="contra" placeholder="Escribe una clave segura" required>
                    </div>
                    <div class="campo">
                        <input type="submit" value="Crear cuenta" class="btn">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php
include '/apache/htdocs/senatareas/funciones/insertar_registro.php';
include '/apache/htdocs/senatareas/includes/footer.php';
?>
