<?php include("inc/header.php");?>
<body class="bg">
    <script type="text/javascript">
        $(document).ready(function() {
            var _currentFill = "#f00"; // red
            $svg = $("#svglogo");
            $("#diamante", $svg).attr('style', "fill:"+_currentFill); })
        });
    </script>
    <header class="Home">
        <div class="Home-logo">
            <?php
                $colorSvg = "#fff";
                include("logo-svg.php");
            ?>
        </div>
        <h1 class="Home-titulo">JEWEL</h1>
        <nav class="Home-menu">
            <ul>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="productos.html">Productos</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>