<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <link rel = "stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel = "stylesheet" href="css/bootstrap/bootstrap-grid.css">
        <link rel = "stylesheet" href="css/bootstrap/bootstrap-reboot.css">
        <link rel = "stylesheet" href="css/style.css?v=2">
        <script src="js/script.js"></script>
        <script src="lib/js/jquery/jquery-3.5.1.slim.min.js"></script>
        <script src="js/jqueryScript.js"><script src="js/bootstrap-js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap-js/bootstrap.js"></script>
        <title>Index</title>
        <meta name="description" content="David Valls G&oacute;mez p&aacute;gina de inicio">

    </head>
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
        <main id="mainPic">
        <h1>FOTOS</h1>
            <div class="pictureGrid">
                
            </div>
        </main>
        <footer>
            <div>Web designed by Deb-92</div>
        </footer>
        <script>
            loadPictures();
        </script>
    </body>
</html>