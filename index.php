<?php
// Php es parecido a los lenguajes basado en C, como C++ y C#. La principal diferencia, es que
// las variables, se las llama con $ delante, por ejemplo: $animal = "gato". Otra diferencia
// es que uno no tiene que especificar el tipo de la variable. $animal = 1, $animal = true, $animal = 1.414256
include_once 'funciones.php'; //en servicios.php voy a ir escribiendo las funciones que voy a necesitar.



?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./img/logo.svg" alt="" width="72" height="72">
        <h2>Formulario de Contacto</h2>
        <p class="lead">Ingrese su consulta, nosotros le respondremos a la brevedad.</p>
      </div>

      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 centered">
          <h4 class="mb-3">Contacto</h4>
          <form class="needs-validation" action="servicios.php" method="post" >
            <input type="hidden" name="accion" id="accion" value="guardar"/>
             <div class="row">
              <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Por favor, debe Completar su Nombre.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Por favor ingrese un email Válido
              </div>
            </div>
            <div class="mb-3">
              <label for="id_producto_tipo">Producto a consultar <span class="text-muted"></span></label>
              <select id="id_producto_tipo" name="id_producto_tipo" class="form-control">
                    <option value="-1"> Seleccione el Producto </option>
                    <?=GetHTMLProductoTiposSelectOptions()?>
                </select>
              <div class="invalid-feedback">
                Por favor, seleccione un producto.
              </div>
            </div>
            <div class="mb-3">
              <label for="mensaje">Mensaje <span class="text-muted">(Opcional)</span></label>
              <textarea  class="form-control" id="mensaje" name="mensaje" placeholdeR="Escriba su mensaje">
                </textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-block center" type="submit">Enviar</button>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">©2023 The Bag of Pet Food Company</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      

    </script>
  

</body></html>