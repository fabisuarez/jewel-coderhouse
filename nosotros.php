<?php include("inc/header.php");?>
<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nosotros').addClass("active");
        });
    </script>
    <nav class="Navegacion">
        <div class="container">
            <a href="index.html">
                <?php
                    $colorSvg = "#000";
                    include("logo-svg.php");
                ?>
                <h1 class="Navegacion-titulo">JEWEL</h1>
            </a>
            <ul class="Navegacion-menu">
                <li><a id="nosotros" href="nosotros.html">Nosotros</a></li>
                <li><a id="productos" href="productos.html">Productos</a></li>
                <li><a id="contacto" href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <section class="Content">
        <div class="container">
            <h2 class="Content-subTitle">NOSOTROS</h2>
            <div class="About">
                <div class="About-left">
                    <h3>DISEÑOS EXCLUSIVOS.</h3>
                </div>
                <div class="About-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore voluptatem quia, neque officia at, veniam libero beatae iste consectetur harum tempora corrupti nisi, omnis distinctio dolorem adipisci aspernatur optio.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore voluptatem quia, neque officia at, veniam libero beatae iste consectetur harum tempora corrupti nisi, omnis distinctio dolorem adipisci aspernatur optio.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore voluptatem quia, neque officia at, veniam libero beatae iste consectetur harum tempora corrupti nisi, omnis distinctio dolorem adipisci aspernatur optio.</p>
                </div>
                <div class="About-right">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore voluptatem quia, neque officia at, veniam libero beatae iste consectetur harum tempora corrupti nisi, omnis distinctio dolorem adipisci aspernatur optio.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>