<?php
include './includes/header.php';
?>

<div class="login">
   
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Iniciar sesión</legend>
                <label for="usu">Usuario</label>
                <input type="text" placeholder="Example@correo.com" id="usu" required name="email">
                <label for="pass">Contraseña</label>
                <input type="password" name="password" id="pass" placeholder="valide su usuario" required>
                <button type="submit">Iniciar sesión</button>
            </fieldset>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $password = $_POST['password'];
    session_start();

    try {
        require 'includes/conexion_bd.php';
        $sql = "SELECT email, contra, rol FROM usuario WHERE email='$correo'";
        $consulta= mysqli_query($coneccion, $sql);
        $resul = mysqli_fetch_assoc($consulta);

            if ($_POST['password'] == $resul['contra']) {
                $_SESSION['nombre'] = $resul['nombre'];
                $_SESSION['rol'] = $resul['rol'];
                header('location: panel_principal.php');} else
                echo('Usuario Y/O contraseña no son correctas');
            } catch (\Throwable $th){
                echo($th);
            }
        }
?>


<?php
include './includes/footer.php';
?>
