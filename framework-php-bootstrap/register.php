<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- Contact Section-->
        <body>

        

<div class="container-md">
    <div class="row my-5 d-flex justify-content-center container-fluid"> <!-- contiene la tarjeta, por lo que ajusta la posición de la misma-->
        
        <div class="card col-md-8 border-0 ">
            <div class="row">
                <header class="card-header py-4 " style="width: 100%;">
                    <h2 style="font-family: 'Roboto', sans-serif"  class="text-center">Únete a nosotros!</h2>
                </header>
            </div>

            <div class="card-body ">
                
                <div class="form-group row">
                    <div class="col-md-6 form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>

                <div class="form-group row">
                    <div class="col-md-6 form-group">
                        <label for="contraseña">Contraseña:</label>
                        <input type="contraseña" class="form-control" id="Contraseña" placeholder="Contraseña" name="contraseña">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="confirContraseña">Confirmar contraseña:</label>
                        <input type="confirContraseña" class="form-control" id="confirContraseña" placeholder="Confirmar Contraseña" name="confirContraseña">
                    </div>
                    
                </div>
                <hr>



                <div class="d-flex ">
                    <button type="submit" class="btn btn-secondary col-12 ">Registrar</button>
                </div>
            </div>
            <div class="row">
            <p><a  id="azulillo" href="login.php">¿Ya está registrado? ve a login!</a> </p>
            </div>
        </div>
    </div>
</div>





</body>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>