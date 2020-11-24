<?php
    // Page title, keywords & description
    $title = "Pictures";
    $keywords = "pictures, david, valls, david valls, actor, pic, imagenes, images, picture, photography, photos, photo";
    $description = "David Valls' pictures page";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("../includes/head.php");
?>
    <body>
        <?php 
            include_once("../includes/header.php");
        ?>
        <main id="mainPic">
        <h1>FOTOS</h1>
            <div class="pictureGrid">
                
            </div>
        </main>
        <?php
            //Footer declaration
            include_once("../includes/footer.php");
        ?>
        <script>
            loadPictures(<?php echo Constant::TRUE_CONST ?>);
        </script>
    </body>
</html>