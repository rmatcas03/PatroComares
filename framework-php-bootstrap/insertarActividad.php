<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navigation.php"); ?>

  <main>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

   <script src="js/quill.min.js"></script>
    
  <div class="mt-2 mb-2 container">

    <form id="form1" onsubmit="enviaformulario()" method="post" action="registarActividad.php" class="row g-3">
      


      <div class="col-md-6">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="usuario" class="form-control" id="usuario" value="<?php echo $_SESSION['user_first_name']; ?>">
      </div>
      


      <div class="col-md-6">
        <label for="Actividad" class="form-label">Actividad</label>
        <input type="actividad" class="form-control" name="actividad" value="<?php echo $_GET['actividad']; ?>">
        <input type="hidden"  name="id_actividad" value="<?php echo $_GET['id_actividad']; ?>">
      </div>



      <div class="col-md-6">
        <label for="Fecha" class="form-label">Fecha Inscripcion</label>
        <input type="date" class="form-control" id="fecha" name="trip-start"
              value=""
              min="<?php echo date("Y-m-d");  ?>" max="<?php $date = date("Y-m-d");
                                                              echo date('Y-m-d', strtotime("+12 months $date"));?>">
      </div>


      
      <div class="col-md-6">
        <label for="provincia" class="form-label">Puntuación</label>
        <select id="provincia" class="form-select">
          <option selected> 1 - 10 </option>
          <option value="1"> 1 </option>
          <option value="2"> 2 </option>
          <option value="3"> 3 </option>
          <option value="4"> 4 </option>
          <option value="5"> 5 </option>
          <option value="6"> 6 </option>
          <option value="7"> 7 </option>
          <option value="8"> 8 </option>
          <option value="9"> 9 </option>
          <option value="10"> 10 </option>
        </select>
      </div>



      <div class="col-md-12">
        <label for="comentarios" class="form-label">Deje aquí sus comentarios</label>

        <div id="standalone-container">
          <div id="toolbar-container">
            <span class="ql-formats">
              <select class="ql-font"></select>
              <select class="ql-size"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-bold"></button>
              <button class="ql-italic"></button>
              <button class="ql-underline"></button>
              <button class="ql-strike"></button>
            </span>
            <span class="ql-formats">
              <select class="ql-color"></select>
              <select class="ql-background"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-script" value="sub"></button>
              <button class="ql-script" value="super"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-header" value="1"></button>
              <button class="ql-header" value="2"></button>
              <button class="ql-blockquote"></button>
              <button class="ql-code-block"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-list" value="ordered"></button>
              <button class="ql-list" value="bullet"></button>
              <button class="ql-indent" value="-1"></button>
              <button class="ql-indent" value="+1"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-direction" value="rtl"></button>
              <select class="ql-align"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-link"></button>
              <button class="ql-image"></button>
              <button class="ql-video"></button>
              <button class="ql-formula"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-clean"></button>
            </span>
          </div>
          <div id="editor-container"></div>
        </div>

        <input id="comentario" name="comentario" type="hidden"/>

        <script>
          var quill = new Quill('#editor-container', {
            modules: {
              formula: true,
              syntax: true,
              toolbar: '#toolbar-container'
            },
            placeholder: 'Compose an epic...',
            theme: 'snow'
          });
          
          function enviaformulario(){
            alert("La inscripción se envio correctamente, gracias por su participación");
//            alert("Hola"+quill.root.innerHTML);
            document.getElementById("comentario").value = quill.root.innerHTML;
            console.log(document.getElementById("comentario").value);
          }
        </script>

<!--
          <div style="width: 100%; text-align: center;">
            <button type="button" class="btn btn-primary btn-sm" aria-label="Close" onclick="JavaScript: alert(quill.root.innerHTML);">
              Obtener texto HTML mostrado en el editor
            </button>
          </div>
-->

      </div>





      <div class="col-md-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terminos">
            <label class="form-check-label" for="terminos">
              Acepta los términos y condiciones
            </label>
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-secondary">Confirmar</button>
      </div>
    </form>
  </div>





    

  </main>
  <?php include("includes/footer.php"); ?>
</body>

</html>