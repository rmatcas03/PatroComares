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
                    <div class="col-6">
                        <div class="row-12 my-3">
                            <div class="col">
                                <h2>Te resolvemos cualquier duda</h1>
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
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Asunto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="asunto">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="exampleFormControlTextarea1">Tu mensaje</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row-12 my-3">
                            <div class="col">
                                <h2>Encuéntranos en</h2>
                            </div>
                        </div>
                        <div class="row-12 mt-3">
                            <div class="col">
                                <img src="assets\img\portfolio\cake.png" width="95%">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary">Enviar</button>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>