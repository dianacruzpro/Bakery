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
    <a class="tarjeta text-decoration-none" href="#receta-2" style="--i:url(../IMG/FRANCES-INTEGRAL.jpg)"
    data-bs-toggle="modal" data-bs-target="#receta-2">
      <div class="content">
        <h3>Pan integral</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-3" style="--i:url(../IMG/PAN-DE--MUERTO.jpg)"
    data-bs-toggle="modal" data-bs-target="#receta-3">
      <div class="content">
        <h3>Pan de muerto</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-4" style="--i:url(../IMG/donas.jpg)"
    data-bs-toggle="modal" data-bs-target="#receta-4">
      <div class="content">
        <h3>Donas</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-5" style="--i:url(../IMG/brazo.jpg)"
    data-bs-toggle="modal" data-bs-target="#receta-5">
      <div class="content">
        <h3>Brazo</h3>
      </div>
    </a>
    <a class="tarjeta text-decoration-none" href="#receta-6" style="--i:url(../IMG/trenzado-de-fresa.jpg)"
    data-bs-toggle="modal" data-bs-target="#receta-6">
      <div class="content">
        <h3>Trezado de fresa</h3>
      </div>
    </a>
  </div>
</section>


<!--  ******* Modals ******* -->
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

<div class="modal fade" id="receta-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Pan Integral</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/FRANCES-INTEGRAL.jpg" alt="receta 2">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">Pesar correctamente todos los ingredientes y colocar los ingredientes en la amasadora y amasar durante 6 minutos para retirar de la amasadora. Seguido refinar la masa hasta desarrollar el gluten.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Dividir las piezas (al tamaño deseado) y dejar en reposo por 10 minutos. Si   dejar   al   tamaño   deseado   ya  que  eso  depende  del  programa  de  producción.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Figurar en forma de francés, pirujo, bollo.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Dejar en fermentación hasta que duplique su tamaño</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Hornear a 180° C (356° F) por 18 a 20 minutos depende el tamaño.</p>
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

<div class="modal fade" id="receta-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Pan de muerto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/PAN-DE--MUERTO.jpg" alt="receta 3">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento:</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">Pesar correctamente todos los ingredientes, agregar a la amasadora azúcar, huevos, margarina, jugo de naranja, levadura, leche en polvo, sal y ralladura de naranja y mezclar por 2 minutos.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Agregar Harina Dura mezclada con el polvo para hornear y seguir mezclando de 10 a 12 minutos para sacar la masa de la amasadora.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Dividir la masa en 5 partes, pintar con colores (morado, anaranjado, amarillo, rojo); luego pesar y bolear: <br> - la masa de color morado y la masa de color anaranjado de 1 onza cada unidad, <br> - la masa de color amarillo y la masa de color rojo de 1.5 onza cada unidad y <br> - la masa neutra (sin color) de 3 onzas cada unidad.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Estirar con bolillo en forma redonda la masa de color anaranjado, cubrir la masa de color morado, luego la masa de color amarillo y cubrir la masa anterior luego la masa de color rojo, y por ultimo la masa neutra(cubriendo la masa anterior).</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Apachar la masa final y decorar con cordones la superficie del pan.
            Dejar fermentar por 1 hora en cámara de fermentación o 2 horas a temperatura ambiente. <br>
            Hornear a 170°C  (356°F) de 30 a 35 minutos. Dejar enfriar y barnizar con margarina derretida e inmediatamente espolvorear azúcar.</p>
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

<div class="modal fade" id="receta-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Donas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/donas.jpg" alt="receta 4">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento:</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark"><b class="text-dark">Pesar correctamente</b> la Premezcla para Donas, huevos, agua y levadura y colocarlos en la batidora Premezcla.
              <br> <b class="text-dark">Mezclar 2 minutos en la primera velocidad</b> con el gancho, <i class="text-dark">limpiar el tazón</i> con la espátula y <b class="text-dark">mezclar por 8 minutos aprox en segunda velocidad</b> o hasta que quede una masa homogénea y manejable, desarrollando el gluten para retirar la masa del tazón.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Bolear del tamaño deseado y dejar fermentar de 5 a 8 minutos.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Calentar el aceite hasta que llegue a una temperatura de 160° C.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Freir las donas hasta lograr el color deseado (aprox 45 segundos de ambos lados), dejar enfriar y aplicar la decoracion deseada.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Apachar la masa final y decorar con cordones la superficie del pan.
            Dejar fermentar por 1 hora en cámara de fermentación o 2 horas a temperatura ambiente. <br>
            Hornear a 170°C  (356°F) de 30 a 35 minutos. Dejar enfriar y barnizar con margarina derretida e inmediatamente espolvorear azúcar.</p>
            </div>
            <h4 class="my-4 text-center text-dark">Rendimiento de formulas:</h4>
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">5 lbs. Premezcla - 60 unidades <br> (2 onz de peso)</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">1 lbs. Premezcla - 12 unidades <br> (2 onz de peso)</p>
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

<div class="modal fade" id="receta-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Brazo gitano</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/brazo.jpg" alt="receta 5">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento:</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">Pesar correctamente la premezcla, los huevos, agua y aceite y colocarlos en la batidora en el siguiente orden: huevos, agua y Premezcla.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Mezcla 30 segundos en la velocidad más baja con la paleta, luego
                cambiar a velocidad media y mezclar por 2 minutos. <br>
                Agregar el aceite y mezclar por (minuto y medio) en velocidad baja.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Engrasar una Bandeja y preparla con papel encerado.
                Agregar la mezcla previamente preparada con los puntos de colores.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Hornear a 160° C (302°F) de 8 a 12 minutos minutos dependiendo el tamaño del molde, luego enrollar con una manta al salir del horno y dejar enfriar.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Pesar correctamente todos los ingredientes y agregar al tazon de la batidora, Harina Suave, Margarina, Azucar Glass y mezclar por 5 minutos a velocidad baja, hasta que tome consistencia.</p>
            </div>

            <h4 class="my-4 text-center text-dark">Puntitos de colores:</h4>
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">En el tazón de la Batidora, agregar a la mezcla las claras de huevo y mezclar a  velocidad baja. Batir con la paleta por 4 minutos, luego subir a velocidad media y batir por 5 minutos más.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Ya preparada la mezcla dividir en 5 recipientes y agregar colorantes en gel, rojo, verde, amarillo, azul y anaranjado, luego agregar en Mangas Pasteleras y preparar la bandeja para empezar a colocar los puntos de colores.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Al momento de tener lista la bandeja con la pasta cigarrete con puntos de colores llevar a refrigeración y dejar enfriar por 30 minutos.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Sacar de la refrigeradora y agregar la premezcla de pastel frio a la bandeja, esparcirla con espatula y hornear.</p>
            </div>

            <h4 class="my-4 text-center text-dark">Rendimiento de la formula:</h4>
            <div class="step pt-4">
              <p class="text-dark">Dos brazos gitanos.</p>
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

<div class="modal fade" id="receta-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel">Trenzado de fresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="portada-modal">
          <img src="./IMG/trenzado-de-fresa.jpg" alt="receta 6">
          <div class="curva" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
              <path d="M-20.03,18.27 C317.43,327.14 332.67,-122.84 513.26,117.94 L512.13,189.97 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg></div>
        </div>
        <div class="receta-info">
          <h4 class="my-4 text-center text-dark">Procedimiento:</h4>
          <div class="steps">
            <div class="step pt-4">
              <img src="./IMG/one.png" alt="">
              <p class="text-dark">Pesar correctamente los ingredientes, y mezclar por 7 minutos  todos los ingredientes y amasar hasta tener un buena integración de los mismos.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/two.png" alt="">
              <p class="text-dark">Con la ayuda de un rodillo, laminar la pasta de un grosor no mayor de 5 milímetros. Cortar piezas de 30 cm cuadrados. <br> Dividir el cuadrado en cuatro y hacer cortes en la parte superior izquierda y en la parte inferior derecha.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/three.png" alt="">
              <p class="text-dark">Barnizar y rellenar con Mermelada del sabor que desee  la parte superior derecha y con la parte inferior izquierda tapar. Seguido trenzar.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/four.png" alt="">
              <p class="text-dark">Las tiras serán dirigidas en forma recta hacia la parte superior y las del costado izquierdo para el lado derecho.</p>
            </div>
            <div class="step pt-4">
              <img src="./IMG/five.png" alt="">
              <p class="text-dark">Dejar fermentar por 45 minutos o hasta que duplique su tamaño, Hornear a 180°C (356°F) por 15 minutos dependiendo el tamaño.</p>
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





/** Modal Video **/

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