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
        <script src="js/jqueryScript.js"></script><script src="js/bootstrap-js/bootstrap.bundle.js"></script>
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
        <main id="mainBio">
            <h1>SOBRE M&Iacute;</h1>
            <article>
                <h2>T&iacute;tulo de ep&iacute;grafe</h2>
                <p>David Valls nace en El Campello (Alicante) y a la edad de 13 años 
                    comienza sus primeros pasos en el mundo de la interpretación dentro 
                    de los talleres escénicos de la compañía alicantina Almadraba Teatro, 
                    dirigido por Jose Luis Alonso. Realiza cuatro montajes teatrales 
                    consecutivos a cargo de Mila García y Gloria Sirvent a la vez que 
                    termina sus estudios de bachillerato para entrar a formarse en 2013 a 
                    la Escuela Superior de Arte Dramático de Murcia, en interpretación musical.</p>
            </article>

            <article>
                <h2>T&iacute;tulo de ep&iacute;grafe</h2>
                <p>En el centro realiza varios montajes a la vez que se desarrolla en Método 
                    del Actors Studio con César Oliva Bernal, Técnica Meisner con Jose Antonio 
                    Sánchez, Técnica Vocal con Carmen Acosta e Interpretación en el Musical con 
                    Silvia Montesinos, entre otras muchas materias. Allí también obtiene el nivel 
                    1 y 2 de Still Voice Training, impartido por Robert Sussuma. En tercer curso 
                    viaja a Londres con el centro para asistir a un Workshop de Teatro Musical en 
                    Regent´s University.</p>
                            
                <p>Tras cuatro años de grado, finaliza sus estudios en la ESAD interpretando a Bobby
                    en el musical Company en el Teatro Circo de Murcia.</p>
            </article>

            <article>
                <h2>T&iacute;tulo de ep&iacute;grafe</h2>
                <p>Seguidamente se traslada a Madrid para participar en el taller Realidad/Deseo de La 
                    Joven Compañía, para posteriormente continuar sus entrenamientos en ella con Andoni Larrabeiti.</p>
            
                <p>En 2019 realiza el Máster Avanzado de Interpretación ante la Cámara, en la Central de Cine, 
                    formándose con Eva Lesmes, Juancho Calvo, Juan León, Álvaro Haro, Natalia Mateo y Sonia Baena.</p>
            
                <p>Ya en Madrid se ha involucrado tanto en diversas obras teatrales como Roberto Zucco (C.Cultural 
                    Margarita Buron) y Mierda Bonita (Escuela CES), como en el audiovisual, realizando el documental 
                    La vida en el campo (ImagiaVideo) y el corto Olvido (Escuela CES).</p>
            </article>
            
            <article>
                <h2>T&iacute;tulo de ep&iacute;grafe</h2>
                <p>Actualmente sigue entrenándose en canto e interpretación y estudiando y especializándose en 
                    teatro musical de manera autodidacta.</p>
            </article>
        </main>
        <footer>
            <div>Web designed by Deb-92</div>
        </footer>
        <script>
        </script>
    </body>
</html>