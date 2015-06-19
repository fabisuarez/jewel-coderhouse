<?php include("inc/header.php");?>
<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#productos').addClass("active");
            $('.grid').masonry();
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
            <h2 class="Content-subTitle">PRODUCTOS</h2>
            <ul class="grid Galeria">
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/2.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/3.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/4.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/1.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/1.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/3.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/4.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
                <li class="grid-item Galeria-item">
                    <img class="Galeria-item-img" src="img/3.jpg" alt="Anillo">
                    <div class="Galeria-item-description">
                        <h3>Nombre del producto</h3>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit vel ipsum eum est similique provident delectus possimus expedita accusantium fugit quibusdam quisquam, non, impedit dolore eveniet officiis accusamus sequi esse.</p>
                        <strong>$290</strong>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>