<?php include("./TEMPLATE/cabecera.php") ?>

<div class="contenedor">
    <span class="circulo_grande"></span>
    <span class="circulo_grande2"></span>
    <div class="formulario">
        <div class="contacto_info">
            <h3 class="titulo">Vamos a ponernos en contacto</h3>
            <p class="texto">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="info">
                <div class="informacion d-flex align-items-center">
                    <lottie-player class="icono" src="https://assets8.lottiefiles.com/packages/lf20_lgpzpyna.json"  background="transparent"  speed="1"  style="width: 60px; height: 60px;"  loop  autoplay></lottie-player>
                    <p class="pt-4">Altos de San José II Calle San miguel, <br> Santa Tecla, La libertad</p>
                </div>
                <div class="informacion d-flex align-items-center align-content-center">
                    <lottie-player class="icono" src="https://assets7.lottiefiles.com/packages/lf20_nxkmi9um.json"  background="transparent"  speed="1"  style="width: 60px; height: 60px;"  loop  autoplay></lottie-player>
                    <p class="pt-4">lorem@ipsum.com</p>
                </div>
                <div class="informacion d-flex align-items-center">
                    <lottie-player class="icono" src="https://assets2.lottiefiles.com/packages/lf20_jpg31deq.json"  background="transparent"  speed="1"  style="width: 80px; height: 80px; margin-left:-15px; margin-right:-10px;"  loop  autoplay></lottie-player>
                    <p class="pt-3">123-456-789</p>
                </div>
            </div>
        </div>
        <div class="contacto_formulario">
            <span class="circulo uno"></span>
            <span class="circulo dos"></span>

            <form class="contacto" action="https://formsubmit.co/dsarai1511@gmail.com" method="POST">
                <h3 class="titulo">Contactenos</h3>
                <div class="input_contenedor">
                    <input type="text" name="nombre" class="input" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" title="Formato solo acepta letras y espacios en blanco" required>
                    <label class="contacto" for="">Nombre</label>
                    <span>Nombre </span>
                </div>
                <div class="input_contenedor">
                    <input type="email" name="correo" class="input" pattern="^(\w+[/./-]?){1,}@[a-z]+[/.]\w{2,}$" title="Formato de correo invalido" required>
                    <label class="contacto" for="">Correo</label>
                    <span>Correo</span>
                </div>
                <div class="input_contenedor">
                    <input type="tel" name="telefono" class="input" required>
                    <label class="contacto" for="">Telefono</label>
                    <span>Telefono</span>
                </div>
                <div class="input_contenedor textarea">
                    <textarea name="mensaje" class="input" required></textarea>
                    <label class="contacto" for="">Mensaje</label>
                    <span>Mensaje</span>
                </div>
               <input type="submit" value="Enviar" class="btn_contacto">
            </form>
        </div>
    </div>
</div>

<script src="./JS/contacto.js"></script>

<?php include("./TEMPLATE/pie.php") ?>