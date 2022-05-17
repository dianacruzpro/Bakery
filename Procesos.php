<?php include("./TEMPLATE/cabecera.php") ?>

<section class="cabecera__procesos">
  <div class="texto__cabecera">
    <h2>Procesos de panificacion</h2>
    <p>Disponemos de una gran variedad de productos en panadería con la máxima calidad y auténtico sabor.</p>
  </div>
  <a class="boton boton-primario text-decoration-none text-white px-4 py-2" href="#proceso-pan" data-bs-toggle="modal" data-bs-target="#proceso-pan">Play Video <i class="bi bi-play-fill"></i> </a>
  <a id="saber-mas" class="text-white text-decoration-none"
  href="#procesos">Saber mas
  <i class="bi bi-chevron-double-down"></i></a>
</section>
<section class="procesos" id="procesos">
  <div class="titulo__procesos">
    <h2>Recetario</h2>
  </div>
  <div class="fila">
    <a class="tarjeta text-decoration-none" href="#receta-1" style="--i:url(../IMG/pan-frances.jpg)" data-bs-toggle="modal" data-bs-target="#receta-1">
      <div class="content">
        <h3>Pan Frances</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-2" style="--i:url(../IMG/FRANCES-INTEGRAL.jpg)">
      <div class="content">
        <h3>Pan integral</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-3" style="--i:url(../IMG/PAN-DE--MUERTO.jpg)">
      <div class="content">
        <h3>Pan de muerto</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-4" style="--i:url(../IMG/donas.jpg)">
      <div class="content">
        <h3>Donas</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-5" style="--i:url(../IMG/brazo.jpg)">
      <div class="content">
        <h3>Brazo</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-6" style="--i:url(../IMG/trenzado-de-fresa.jpg)">
      <div class="content">
        <h3>Trezado de fresa</h3>
      </div>
    </a>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="receta-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Pan Frances</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/pan-frances.jpg" alt="receta 1">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">Pesar correctamente todos los ingredientes y colocar en la amasadora sal, azúcar, manteca, agua y por último la levadura. Mezclar por 2 minutos en primera velocidad</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Incorporar harina dura y amasar 8 minutos en segunda velocidad, luego cubrir la masa (manta o nylon) y dejar fermentar de 45 minutos a 1 hora</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Refinar la masa hasta desarrollar el gluten, bolear al peso deseado, luego colocar en bandejas y reposar de 15 a 20 minutos para figurar</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Ingresar el producto a cámara de fermentación de 45 a 60 minutos ( temperatura 36°C a 40°C y humedad relativa de 70% a 90%) o a temperatura ambiente hasta que duplique su tamaño</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Hornear a 180° C (356° F) de 18 a 20 minutos</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hecho</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="proceso-pan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Proceso de panificación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/QTTfobnxMBc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hecho</button>
      </div>
    </div>
  </div>
</div>




<?php include("./TEMPLATE/pie.php") ?>