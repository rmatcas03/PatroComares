<!--Cuando llamemos a este modal la sesión de Google está abierta, pero el usuario
aún no está en la base de datos.
Cuando el usuario complete todos los campos correctamente y pulse "Submit" se redigirá 
a register.php. En caso de que cancele el modal redirigimos a logout.php, ya que elregistro es obligatorio. --->


<div id="modalregistro" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-primary">
        <form class="modal-content" action="/register2.php" method="POST">
          <div class="container ">
            <h1 class="modal-title text-center">Registro</h1>
            <p class=" text-center ">Por favor rellene los campos que faltan.</p>
            <hr>

            <form>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="email"><b>E-mail</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="email" name="email" value="" required>
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="nombre"><b>Nombre</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="text" name="nombre" value="" required>
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="apellidos"><b>Apellidos</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="text" name="apellidos" value="" required>
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="tlf"><b>Teléfono</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="text" name="tlf" value="" required>
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="fecha_nacimiento"><b>Fecha Nac</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="date" name="fecha_nacimiento" required>
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="codigoPostal"><b>Código postal</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="text" pattern="^[0][1-9][0-9]{3}$|^[1-4][0-9]{4}$|^[5][0-2][0-9]{3}$" maxlength="5" placeholder="Introduce el código postal" name="codigoPostal" required>
                </div>
              </div>

              <label for="captcha"><b>
                  <?php //if (isset($_GET["captchaerror"])) 
                  // echo "Invalid code. Please enter de Captcha Text.";
                  //else 
                  //echo "Please Enter the Captcha Text<b>";
                  ?>
                </b></label>
              <div class="text-center">
                <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
              </div>
              <br>
              <div class="align-items-center text-center ">
                <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="pass"><b>Contraseña</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="pass" placeholder="Introduce contraseña" name="pass" value="">
                </div>
              </div>
              <div class="form row">
                <div class="form-group col-5 d-flex justify-content-end">
                  <label for="confContr"><b>Confirmar Contraseña</b></label>
                </div>
                <div class="form-group col-5 d-flex justify-content-start">
                  <input type="text" name="confContr" value="">
                </div>
              </div>
              <div class="text-center row mb-5">
                <label>
                  <input type="checkbox" required name="terms" style="margin-bottom:15px"> He leído y acepto los <a href="#" style="color:dodgerblue">Terms & Privacidad</a>.
                </label>
                <div class="mb-5 col">
                  <div class="row">
                    <div class="col-6">
                      <button type="button" onclick="document.getElementById('id01').style.display='none';location.href='logout.php'" class="cancelbtn">Cancelar</button>
                    </div>
                    <div class="col-6">
                      <button type="submit" name="enviar" class="signupbtn">Registrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!--<div class="modal-footer bg-primary text-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-secondary">Guardar cambios</button>-->

      </div>
    </div>
  </div>
</div>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none';location.href='logout.php'" class="close" title="Close Modal">&times;</span>
  <script>
    var refreshButton = document.querySelector(".refresh-captcha");
    refreshButton.onclick = function() {
      document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
    }
  </script>
</div>
<script>
  var myModal = new bootstrap.Modal(document.getElementById('modalregistro'), {
    keyboard: false
  })

  myModal.show();
</script>