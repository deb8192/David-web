<?php  

    //PHP functions

    function createHeaderMenuOptions($engValid, $catValid, $lang)
    {
        if($engValid)
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="cv.php">CV</li></a>
                    <li><a href="pictures.php">Pictures</li></a>
                    <li><a href="videobook.php">Videobook</li></a>
                    <li><a href="news.php">News</li></a>
                    <li><a href="about-me.php">About me</li></a>
                    <li><a href="contact.php">Contact</li></a>
                </ul> 
            </li>';
        }
        else if($catValid)
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="curriculum.php">Curriculum</li></a>
                    <li><a href="fotos.php">Fotos</li></a>
                    <li><a href="videobook.php">Videobook</li></a>
                    <li><a href="noticies.php">Noticies</li></a>
                    <li><a href="sobre-mi.php">Sobre mi</li></a>
                    <li><a href="contacte.php">Contacte</li></a>
                </ul> 
            </li>';
        }
        else
        {
            echo 
            '<li class="mainNav">
                <ul class="mainOptions">
                    <li><a href="curriculum.php">Curriculum</li></a>
                    <li><a href="fotos.php">Fotos</li></a>
                    <li><a href="videobook.php">Videobook</li></a>
                    <li><a href="noticias.php">Noticias</li></a>
                    <li><a href="sobre-mi.php">Sobre m&iacute;</li></a>
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
	
	function testRequests()
	{
		echo '<p>THIS WORKS PROPERLY =D</p>';
	}

    //Database functions
    //TO FINISH
    function findPictures($section, $language)
    {
        $db = new Database();
        $db->connect();

        $query = "SELECT urlPic, title, picDescription, picSizeID FROM pictures WHERE picSectionID = $section";
        $response = $db->executeQuery($query);
        if($response->num_rows > Constant::ZERO)
        {
            while($row = $response->fetch_object())
            {
                $class = $row->picSizeID;
                $className = "";
                $languagesRedirection = "../";
                switch ($class)
                {
                    case 1:
                        $className = "sml";
                    break;
                    
                    case 2:
                        $className = "med";
                    break;
                    
                    case 3:
                        $className = "lar";
                    break;
                }
                switch ($language)
                {                    
                    case 1:
                        $row->urlPic = appendChains($languagesRedirection, $row->urlPic);
                    break;
                    
                    case 2:
                        $row->urlPic = appendChains($languagesRedirection, $row->urlPic);
                    break;
                }
                echo '<img class="', $className ,'" src="' , $row->urlPic , '" alt="' , $row->picDescription , '">';
            }
        }
    }
?>