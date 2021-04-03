<?php  

    //PHP functions

    function createHeaderMenuOptions($engValid, $catValid, $lang)
    {
        if($engValid)
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="about-me.php">About me</li></a>
                    <li><a href="book.php">Book</li></a>
                    <li><a href="reel.php">Reel</li></a>
                    <li><a href="cv.php">CV</li></a>
                    <!-- <li><a href="news.php">News</li></a> -->
                    <li><a href="contact.php">Contact</li></a>
                </ul> 
            </li>';
        }
        else if($catValid)
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="sobre-mi.php">Sobre mi</li></a>
                    <li><a href="book.php">Book</li></a>
                    <li><a href="reel.php">Reel</li></a>
                    <li><a href="cv.php">CV</li></a>
                    <!-- <li><a href="noticies.php">Noticies</li></a> -->
                    <li><a href="contacte.php">Contacte</li></a>
                </ul> 
            </li>';
        }
        else
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="sobre-mi.php">Sobre m&iacute;</li></a>
                    <li><a href="book.php">Book</li></a>
                    <li><a href="reel.php">Reel</li></a>
                    <li><a href="cv.php">CV</li></a>
                    <!-- <li><a href="noticias.php">Noticias</li></a> -->
                    <li><a href="contacto.php">Contacto</li></a>
                </ul> 
            </li>';
        }
    }

    function appendChains($chain1, $chain2)
    {
        $chain1 .= $chain2;
        return $chain1;
    }
?>