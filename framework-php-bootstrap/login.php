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
        <section class="page-section" id="contact">
            <div class="container-fluid">
                <div class="d-flex justify-content-between row my-2">
                    <div class="col-lg-6">
                        <div class="row-12 my-3">
                            <div class="col">
                                <h2>Mi perfil</h1>
                            </div>
                        </div>
                        <div class="row-12 my-3">
                            <div class="col">
                                <form>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Nombre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Apellido1</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="apellido1">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Apellido2</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="apellido2">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Teléfono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="telefono">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Dirección</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="direccion">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Password</label>
                                        <input type="text" class="password" id="exampleFormControlInput1" placeholder="password">
                                    
                                        <button type="button" class="btn btn-secondary">Cambiar</button>
                                    </div>
                            </div>
                        </div>

                    </div>
                  
                </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>