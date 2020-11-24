<?php
    // Page title, keywords & description
    $title = "Curr&iacute;culum";
    $keywords = "curriculum, david, valls, david valls, actor, cv, curriculo, curriculum vitae, vitae, experiencia, formacion academica, estudios";
    $description = "P&aacute;gina con el CV de David Valls";
    
     // DOCTYPE declaration, <html>, <head>, <title>, <meta> y <link>. 
    include_once("includes/head.php");
?>
    <body>
        <?php 
            include_once("includes/header.php");
        ?>
        <main id="mainCV">
            <h1>CURR&Iacute;CULUM</h1>
            <div class="divFlex">
                <article class="bloqueInfo">
                    <h2>Datos</h2>
                    <p>
                        <span class="spanCvLeft">Fecha de nacimiento</span>  <span class="spanCvRight">20/10/1994</span><br>
                        <span class="spanCvLeft">Altura</span>  <span class="spanCvRight">1'78</span><br>
                        <span class="spanCvLeft">Color de ojos</span>    <span class="spanCvRight">&Aacute;mbar</span><br>
                        <span class="spanCvLeft">Color de pelo</span>   <span class="spanCvRight">Moreno oscuro</span><br>
                        <span class="spanCvLeft">Tono de piel</span>    <span class="spanCvRight">Claro medio</span><br>
                        <span class="spanCvLeft">Tesitura Vocal</span>  <span class="spanCvRight">Bar&iacute;tono (Sol - Mi4)</span>
                    </p>
                </article>

                <article class="bloqueInfo">
                    <h2>Formaci&oacute;n art&iacute;stica</h2>
                    <p>2013 - 2017  Grado en Arte dram&aacute;, especialidad de Interpretaci&oacute;n musical (ESAD de Murcia)<br>
                    2019 (enero - junio)    Programa Avanzado de Interpretaci&oacute; ante la c&aacute;mara (Central de Cine)</p>
                </article>
            </div>

            <div class="divFlex">          
                <div class="bloqueInfo">
                    <article>
                        <h2>Idiomas</h2>
                        <p>Castellano (nativo) / English (C1) / Catal&agrave; (C1)</p>
                    </article>            
                    <article>
                        <h2>Experiencia profesional</h2>
                        <h3>Teatro</h3>
                        <p>2009 <b>JACK EL DESTRIPADOR</b> Secundario  TAE El Campello<br>
                            2010 <b>LITRONA</b> Protagonista    TAE El Campello<br>
                            2011 <b>LA VENGANZA DE DON MENDO</b> Secundario    TAE El Campello<br>
                            2013 <b>LA CANTANTE CALVA</b> Secundario    TAE El Campello<br>
                            2017 <b>COMPANY</b> Protagonista    Teatro Circo Murcia<br>
                            2018 <b>MIERDA BONITA</b> Protagonista    CES<br>
                            2018 <b>ROBERTO ZUCCO</b> Protabonista    C.Cultural Margarita Bur&oacute;n<br>
                            2019 <b>BRAGAS</b> Protagonista    Microteatro Sala Coolturetas<br>
                        </p>
                        <h3>Audiovisual</h3>
                        <p>2016 <b>LA VIDA EN EL CAMPO</b> Protagonista  ImagiaVideo<br>
                            2018 <b>OLVIDO</b> Javier    CES<br>
                        </p>
                    </article>
                </div>
                <div class="bloqueInfo">
                    <article>
                        <h2>Habilidades</h2>
                        <p>Canto / Claqu&eacute; / Lucha esc&eacute; / Teatro de T&iacute;tere</p>
                    </article>            
                    <article>
                        <h2>Cursos formativos</h2>
                        <p>2009 - 2013 Talleres de Artes Esc&eacute;nicas   (Almadrava Teatro)<br>
                            2013 - 2014 T&eacute;cnica Meisner   (J.Antonio S&aacute;nchez)<br>
                            2015 Introducci&oacute;n al M&eacute;todo Actors Studio   (C&eacute;sar Oliva Bernal)<br>
                            2015 - 2016 Interpretaci&oacute;n en teatro musical   (Silvia Montesinos)<br>
                            2016 Musical Theatre Workshop   (Regent's University)<br>
                            2016 Still Voice Training Nivel 1 y 2   (Robert Sussuma)<br>
                            2017 Taller Realidad-Deseo   (La Joven Compa&ntilde;&iacute;a)<br>
                            2017 Entrenamientos de La Joven Compa&ntilde;&iacute;a   (Andoni Larrabeiti)<br>
                            2019 Preparaci&oacute;n al casting audiovisual    (Juan Le&oacute;n)<br>
                            2019 Trabajo del actor dentro del largometraje   (Natalia Mateo)<br>
                        </p>
                    </article>
                </div>
            </div>
        </main>
        <?php
            //Footer declaration
            include_once("includes/footer.php");
        ?>
        <script>
        </script>
    </body>
</html>