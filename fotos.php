<?php
    // Page title, keywords & description
    $title = "Fotos";
    $keywords = "fotos, david, valls, david valls, actor, pic, imagenes, imagen, foto, fotografia, fotografias";
    $description = "P&aacute;gina de fotos de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("includes/head.php");
?>
    <body onresize = "checkSocial();">
        <?php 
            include_once("includes/header.php");
        ?>
        <main id="mainPic">
        <h1>FOTOS</h1>
            <div class="pictureGrid">
                
            </div>
        </main>
        <?php
            //Footer declaration
            include_once("includes/footer.php");
        ?>
        <script>
            loadPictures(<?php echo Constant::_FALSE ?>);
        </script>
    </body>
</html>