<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navbar.php"); ?>
    <main>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container-fluid">
                <div class="d-flex justify-content-between row my-2">
                    <div class="col-lg-6">
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
                                        <label for="exampleFormControlInput1">Correo electrónico</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleFormControlInput1">Asunto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="asunto">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="exampleFormControlTextarea1">Tu mensaje</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row-12 my-3">
                            <div class="col">
                                <h2>Encuéntranos en</h2>
                            </div>
                        </div>
                        <div class="row-12 my-3">
                            <div class="col">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.1000011264236!2d-4.47977188483694!3d37.411111179827245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d77336192ab19%3A0x13417153fad2ce31!2sIES%20Marqu%C3%A9s%20de%20Comares!5e0!3m2!1ses!2ses!4v1637575280742!5m2!1ses!2ses" width="100%" loading="lazy"></iframe>
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