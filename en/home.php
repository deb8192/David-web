<?php
    // Page title, keywords & description
    $title = "David Valls";
    $keywords = "index, david, valls, david valls, actor, home, artist, cinema, theatre, musical";
    $description = "David Valls' homepage";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("../includes/head.php");
?>
    <body>
        <?php 
            include_once("../includes/header.php");
        ?>
        <main id="mainSlider">
            <?php
                findPictures(Constant::ONE, Constant::ONE);
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