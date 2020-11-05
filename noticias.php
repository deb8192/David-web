<?php
    // Page title, keywords & description
    $title = "Noticias";
    $keywords = "noticias, david, valls, david valls, actor, noticia, informacion, novedades, novedad, ultima informacion";
    $description = "P&aacute;gina de noticias de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("includes/head.php");
?>
    <body onresize = "checkSocial();">
        <?php 
            include_once("includes/header.php");
        ?>
        <main id="mainSlider">
            <img class="med" src="images/pictures/fotos/MainSlide-med.jpg" alt="foto-principal">
            <img class="big" src="images/pictures/fotos/MainSlide.jpg" alt="foto-principal">
        </main>
        <?php
            //Footer declaration
            include_once("includes/footer.php");
        ?>
        <script>
        </script>
    </body>
</html>