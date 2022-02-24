<?php include("includes/a_config.php"); 
include("includes/dbconnection.php");
include("includes/googleconnect.php");
if(isset($_SESSION['user_email_address'] )){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- Contact Section-->
        <body>

<div class="row mt-3 my-2  justify-content-center">
    <!-- para hacer tarjetas en horizontal-->

    <div class="card col-lg-4">

        <div class="card-body">
            <h2 style="font-family: 'Roboto', sans-serif"  class="d-flex justify-content-center">Login</h2>
            <hr>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pswd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Recordar contraseña
                    </label>
                </div>
                <p><span id="azulillo"> ¿Olvidó su contraseña? </span> </p>
                <div class="d-flex justify-content-end"> <!-- Esto es un parráfo //div que contiene en su interior un boton que los hemos desplazado a la derecha mediante la clase que le hemos puesto-->
                    <button type="submit" class="btn btn-secondary">Entrar</button>
                </div>
                <hr>
                <p><a  id="azulillo" href="includes\registermodal2.php">¿No está registrado? Regístrese!</a> </p>
            </form>

            <?php echo $login_button; ?>


        </div>
    </div>
   
</body>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>