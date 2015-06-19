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
                include("inc/logo-svg.php");
            ?>
        </div>
        <h1 class="Home-titulo">JEWEL</h1>
        <?php include("inc/menu-principal.php");?>
    </header>
</body>
</html>