<?php include("inc/header.php");?>
<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contacto').addClass("active");
        });
    </script>
    <nav class="Navegacion">
        <div class="container">
            <a href="index.php">
                <?php
                    $colorSvg = "#000";
                    include("inc/logo-svg.php");
                ?>
                <h1 class="Navegacion-titulo">JEWEL</h1>
            </a>
            <div class="Navegacion-menu">
                <?php include("inc/menu-principal.php");?>
            </div>
        </div>
    </nav>
    <section class="Content">
        <div class="container">
            <h2 class="Content-subTitle">CONTACTO</h2>
        </div>
        <div class="Mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1642.208985039857!2d-58.42967520789027!3d-34.59359094387015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1434750989884" width="100%" height="350" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="container Contacto">
            <div class="Formulario">
                <form action="#">
                    <input type="text" placeholder="NOMBRE">
                    <input type="text" placeholder="APELLIDO">
                    <input type="text" placeholder="TELÉFONO">
                    <button type="button">ENVIAR</button>
                </form>
            </div>
            <div class="Datos">
                <h3>DIRECCIÓN</h3>
                <p>Avenida Perón 1234 <br>Capital Federal <br>Argentina</p>
                <h3>TELÉFONO</h3>
                <p>011 4444 6666</p>
            </div>
            <div class="Redes-sociales">
                <a href="#"><span class="ion-social-twitter"></span>Twitter</a>
                <a href="#"><span class="ion-social-facebook"></span>Facebook</a>
                <a href="#"><span class="ion-social-googleplus"></span>Google+</a>
            </div>
        </div>
    </section>
</body>
</html>