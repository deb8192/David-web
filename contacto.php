<?php
    // Page title, keywords & description
    $title = "Contacto";
    $keywords = "contacto, david, valls, david valls, actor, email, e-mail, telefono, contactar, informacion de contacto";
    $description = "P&aacute;gina de contacto de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("includes/head.php");
?>
    <body>
        <?php 
            include_once("includes/header.php");
        ?>
        <main id="mainContact">
            <h1>CONTACTO</h1>
            <article class="columns">
                <div class="column-50 column-textAlign-center">
                    <h2>Teléfono</h2>
                    <p>664 041 041</p>
                </div>
                <div class="column-50 column-textAlign-center">
                    <h2>Email</h2>
                    <p>davidvallsg@gmail.com</p>
                </div>
            </article>
        </main>
        <?php
            //Footer declaration
            include_once("includes/footer.php");
        ?>
        <script>
        </script>
    </body>
</html>