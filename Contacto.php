<?php include("./TEMPLATE/cabecera.php") ?>


<body>
    <div class="container">
        <h1 class="text-left" style="color: #f3f3f3">Contactanos</h1>
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="enviarcorreo.php">
                    <ul class="contact-form">
                        <li>
                            <div class="col-md-6">
                                <input name="nombre" placeholder="Escribe tu nombre" required="required" size="8" type="text" />
                            </div>

                        </li>

                        <li>
                            <div class="col-md-6">
                                <input name="telefono" placeholder="Escribe tu numero" required="required" size="8" type="text" />
                            </div>

                        </li>
                        <li>
                            <div class="col-md-12">
                                <input name="asunto" placeholder="Asunto" required="required" size="8" type="text" />
                            </div>
                        </li>

                        <li>
                            <div class="col-md-12">
                                <button type="submit">
                    Enviar mensaje
                    <span
                      class="glyphicon glyphicon-arrow-right"
                      aria-hidden="true"
                    ></span>
                  </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>
<link rel="stylesheet" href="css/style.css" />
</html>

<?php include("./TEMPLATE/pie.php") ?>