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
        <div class="container-fluid mb-5">

            <div class="d-flex justify-content-between row my-3 ">

                <div class="col-lg-6">
                    <div class="card border-0 mx-5" style="width:250px">
                        <h2 class="mx-5 text-center">Mi perfil</h2>
                        <img class="card-img-top " src="assets\img\imgTrabajo\image.jpg" alt="Card image">
                        <div class="card-body">

                            <div class="container-fluid text-center">
                                <!--pone centrado el boton de perfil-->
                                <a href="#" class="btn btn-secondary">Cambiar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column text-start">
                    <form>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Apellido1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido1">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Apellido2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido2">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Teléfono</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Telefono">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group my-3">
                            <label for="exampleFormControlInput1">Dirección</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Direccion">
                        </div>
                        <div class="form-group my-3 d-flex flex-row align-items-center ">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="password" class="password flex-grow-1 mx-1" id="exampleFormControlInput1" placeholder="Password">
                        </div>  
                        
                        <div class="align-items-center text-center ">
                        <button type="button" class="btn btn-secondary">Confirmar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>