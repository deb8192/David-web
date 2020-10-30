<?php
    // Page title, keywords & description
    $title = "Videobook";
    $keywords = "videobook, david, valls, david valls, actor, experiencia, video, visual, trayectoria, curriculum";
    $description = "P&aacute;gina con el videobook de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("includes/head.php");
?>
    <body onresize = "checkSocial()">
        <header>
            <div class="logo">
                <h2><a href="index.php">David <span>V</span>alls</a></h2>
                <span class="socialMedia"><a href="#"><img class="bottom-img" src="images/web-icons/social-media/instagram-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/instagram.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="#"><img class="bottom-img" src="images/web-icons/social-media/vimeo-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/vimeo.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="#"><img class="bottom-img" src="images/web-icons/social-media/facebook-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/facebook.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="#"><img class="bottom-img" src="images/web-icons/social-media/youtube-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/youtube.svg" alt="instagram" height="64px" width="64px">
                    </a>
                </span>
            </div>
            <div class="menuFlags">
                <nav class="mainMenu">
                    <label for="mLateral">X</label>
                    <input type="checkbox" class="checkMenu" name="mLateral" id="mLateral" onclick="showSocial(this)"/>
                    <ul class="options">
                        <li class="mainNav">
                            <ul class="mainOptions">
                                <li><a href="curriculum.php">Curriculum</li></a>
                                <li><a href="fotos.php">Fotos</li></a>
                                <li><a href="videobook.php">Videobook</li></a>
                                <li><a href="noticias.php">Noticias</li></a>
                                <li><a href="sobre-mi.php">Sobre m&iacute;</li></a>
                                <li><a href="contacto.php">Contacto</li></a>
                            </ul> 
                        </li>
                        <li class="flagNav">
                            <ul class="langFlags"> 
                                <li><button name ="es" onclick="changeLink(this)"><img src="images/web-icons/flags/spain.png" alt="instagram" width="24px"></button></li>
                                <li><button name ="en" onclick="changeLink(this)"><img src="images/web-icons/flags/united-kingdom.png" alt="instagram" width="24px"></button></li>
                                <li><button name ="cat" onclick="changeLink(this)"><img src="images/web-icons/flags/catalonia.png" alt="instagram" width="24px"></button></li>
                            </ul>
                        </li>         
                    </ul>
                </nav>
            </div>
        </header>
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