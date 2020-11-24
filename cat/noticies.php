<?php
    // Page title, keywords & description
    $title = "Noticies";
    $keywords = "noticies, david, valls, david valls, actor, noticia, informacio, novetats, novetat, ultima informacio, ultimes noticies, informacio recent";
    $description = "David Valls news page";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("../includes/head.php");
?>
    <body>
        <?php 
            include_once("../includes/header.php");
        ?>
        <main id="mainSlider">
            <img class="med" src="../images/pictures/fotos/MainSlide-med.jpg" alt="foto-principal">
            <img class="big" src="../images/pictures/fotos/MainSlide.jpg" alt="foto-principal">
        </main>
        <?php
            //Footer declaration
            include_once("../includes/footer.php");
        ?>
        <script>
        </script>
    </body>
</html>