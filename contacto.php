<?php
    // Page title, keywords & description
    $title = "Contacto";
    $keywords = "contacto, david, valls, david valls, actor, email, e-mail, telefono, contactar, informacion de contacto";
    $description = "P&aacute;gina de contacto de David Valls";
    
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