<?php
    
    //If not default version
    if($engLang || $catLang)
    { ?>
        <header>
            <div class="logo">
                <h2><a href="home.php">David <span>V</span>alls</a></h2>
                <span class="socialMedia"><a href="https://instagram.com/davidvalls.actor"><img class="bottom-img" src="../images/web-icons/social-media/instagram-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="../images/web-icons/social-media/instagram.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="https://www.linkedin.com/in/david-valls-g%C3%B3mez-50593a17a"><img class="bottom-img" src="../images/web-icons/social-media/facebook-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="../images/web-icons/social-media/facebook.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="https://www.youtube.com/channel/UCVdwDtREs-YXkJmifczhk5A"><img class="bottom-img" src="../images/web-icons/social-media/youtube-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="../images/web-icons/social-media/youtube.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="http://vimeo.com/user84303526"><img class="bottom-img" src="../images/web-icons/social-media/vimeo-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="../images/web-icons/social-media/vimeo.svg" alt="instagram" height="64px" width="64px">
                    </a>
                </span>
            </div>
            <div class="menuFlags">
                <nav class="mainMenu">
                    <label for="mLateral"><i class = "flaticon flaticon-list"></i></label>
                    <input type="checkbox" class="checkMenu" name="mLateral" id="mLateral" onclick="showSocial(this)"/>
                    <ul class="options">
                        <?php
                            createHeaderMenuOptions($engLang, $catLang, $lang);
                        ?>
                        <li class="flagNav">
                            <ul class="langFlags"> 
                                <li><button name ="es" onclick="changeLink(this)"><img src="../images/web-icons/flags/spain.png" alt="instagram" width="24px"></button></li>
                                <li><button name ="en" onclick="changeLink(this)"><img src="../images/web-icons/flags/united-kingdom.png" alt="instagram" width="24px"></button></li>
                                <li><button name ="cat" onclick="changeLink(this)"><img src="../images/web-icons/flags/catalonia.png" alt="instagram" width="24px"></button></li>
                            </ul>
                        </li>        
                    </ul>
                </nav>
            </div>
        </header>
    <?php }

    else
    { ?>
        <header>
            <div class="logo">
                <h2><a href="index.php">David <span>V</span>alls</a></h2>
                <span class="socialMedia"><a href="https://instagram.com/davidvalls.actor"><img class="bottom-img" src="images/web-icons/social-media/instagram-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/instagram.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="https://www.linkedin.com/in/david-valls-g%C3%B3mez-50593a17a"><img class="bottom-img" src="images/web-icons/social-media/facebook-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/facebook.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="https://www.youtube.com/channel/UCVdwDtREs-YXkJmifczhk5A"><img class="bottom-img" src="images/web-icons/social-media/youtube-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/youtube.svg" alt="instagram" height="64px" width="64px">
                    </a>
                    <a href="http://vimeo.com/user84303526"><img class="bottom-img" src="images/web-icons/social-media/vimeo-grey.svg" alt="instagram" height="64px" width="64px">
                        <img class="top-img" src="images/web-icons/social-media/vimeo.svg" alt="instagram" height="64px" width="64px">
                    </a>
                </span>
            </div>
            <div class="menuFlags">
                <nav class="mainMenu">
                    <label for="mLateral"><i class="flaticon flaticon-list"></i></label>
                    <input type="checkbox" class="checkMenu" name="mLateral" id="mLateral" onclick="showSocial(this)"/>
                    <ul class="options">
                    <?php
                        createHeaderMenuOptions($engLang, $catLang, $lang);
                    ?>
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
    <?php } ?>
