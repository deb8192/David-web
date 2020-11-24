<?php
    // Page title, keywords & description
    $title = "David Valls";
    $keywords = "index, david, valls, david valls, actor, home, artista, cinema, teatre, musical";
    $description = "P&agrave;gina d'inici de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("../includes/head.php");
?>
    <body>
        <?php 
            include_once("../includes/header.php");
        ?>
        <main id="mainSlider">
            <?php
                findSliderPictures(Constant::ONE, Constant::TWO);
            ?>
        </main>
        <?php
            //Footer declaration
            include_once("../includes/footer.php");
        ?>
        <script>
        </script>
    </body>
</html>