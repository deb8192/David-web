const _true = true,
_false = false,

_midWidth = 720,
_zero = 0,
_one = 1,
_two = 2,

_spanish = "es",
_english = "en",
_catalan = "cat",
_spanishSel = 0,
_englishSel = 1,
_catalanSel = 2,

//change .php to .php
_spanishPages = ["index.php", "curriculum.php", "fotos.php", "videobook.php", "noticias.php", "sobre-mi.php", "contacto.php"],
_englishPages = ["home.php", "cv.php", "pictures.php", "videobook.php", "news.php", "about-me.php", "contact.php"],
_catalanPages = ["index.php", "curriculum.php", "fotos.php", "videobook.php", "noticies.php", "sobre-mi.php", "contacte.php"];

//Direct JQuery
$(document).ready(function(){
    $(window).scroll(function() {
        if($(window).scrollTop() > 0) {
            $("header").addClass("headerActive");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $("header").removeClass("headerActive");
        }
    });
    $(".galeryPic").click(function(){
        modalPicture($(".galeryPic").find("img").attr("src"));
    })
})



//MAYBE IT WILL DISSAPEAR

/*============================================================================
                            Functions related with header
==============================================================================*/
function showSocial(checkBox)
{
    var styleLeft = "",
    checkValPerc = "-33%",
    nonCheckValPerc = "-100%";
    height = "10px";
    inheritHeight = "inherit";
    if(checkBox.checked == true)
    {
        styleLeft = checkValPerc;
        height = inheritHeight;
    }
    else
    {
        styleLeft = nonCheckValPerc;
    }
    $('.socialMedia').css({left: styleLeft});
    $('.menuFlags').css({height: height});
    $('.mainMenu').css({height: height});
}

function checkSocial()
{
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width,
    defaultLeftVal = "0%";
    if(width >= _midWidth)
    {
        //.socialMedia').style.left = defaultLeftVal;       THIS IS WITH ORIGINAL JAVASCRIPT    NEXT LINE IS WITH JQUERY
        $(".socialMedia").css({left: defaultLeftVal});
    }
    else
    {
        showSocial($(".checkMenu"));
    }
}

/*============================================================================
                            Functions related with modals
==============================================================================*/

/*TO FINISH: 
    Centrar modal en CSS
    Permitir cerrar modal
    Permitir cambiar de foto
    ocultar barra de scroll*/
function createModal(html)
{
    let div = $("<div></div>");
    div.attr('id', 'background-layer');
    div.html(html);
    $('body').append(div);
}
function modalPicture(imgDir)
{
    let html = $("<article></article")
        .append($("<img></img>")
            .attr("src", imgDir));
    createModal(html);
}
//!MAYBE IT WILL DISSAPEAR

//Fotos loader function (provisional)
function loadPictures(notSpanish)
{
    for(let i = 0; i < 12; i++)
    {
        let html = '<img class="picture" src=" ';
        if(notSpanish)
        {
            html += '../';
        }
        html += 'images/pictures/fotos/thumbnail/img-thumb-prov-1.jpg" alt="img-thumb-prov-1-${i}">';
        let article = document.createElement("article")
        article.innerHTML = html;
        article.className = "galeryPic";
        $(".pictureGrid").append(article);
    }
}

function changeLink(button)
{
    var separator = '/',
    srcSplit = window.location.pathname.split(separator),
    result = window.location.pathname;
    
    if(srcSplit.length > _zero)
    {   
        switch(button.name)
        {
            case _spanish:
                result = changeLanguageFolder(srcSplit, _spanish);
                found = _true;
                break;

            case _english:
                result = changeLanguageFolder(srcSplit, _english);
                found = _true;
                break;

            case _catalan:
                result = changeLanguageFolder(srcSplit, _catalan);
                found = _true;
                break;
        }
    }
    window.location.replace(result);
}

function changeLanguageFolder(path, lang)
{
    var result,
    i = 0;
    found = _false; 
    while(i < path.length && !found)
    {
        if(i == path.length - _two)
        {
            if(lang == _spanish)
            {
                if(path[i] == _english || path[i] == _catalan)
                {
                    path.splice(i, _one);
                    path[i] = changeEquivalentLink(path[i], _spanishSel); 
                    found = _true;
                }
            }
            else
            {
                if(lang == _english)
                {
                    if(path[i] == _catalan)
                    {                    
                        path[i] = lang;
                        path[i + _one] = changeEquivalentLink(path[i + _one], _englishSel); 
                    }
                    else if(path[i] != _english)
                    {
                        i++;
                        path.splice(i, _zero, lang);
                        path[i + _one] = changeEquivalentLink(path[i + _one], _englishSel); 
                    }
                }
                else if(lang == _catalan)
                {
                    if(path[i] == _english)
                    {                    
                        path[i] = lang;
                        path[i + _one] = changeEquivalentLink(path[i + _one], _catalanSel);
                    }
                    else if(path[i] != _catalan)
                    {
                        i++;
                        path.splice(i, _zero, lang);
                        path[i + _one] = changeEquivalentLink(path[i + _one], _catalanSel);
                    }
                }
                found = _true;
            }
        }
        i++;
    }
    
    result = path.join('/');
    return result;
}

function changeEquivalentLink(changingElement, newLang)
{
    switch(newLang)
    {
        case 0:
            {
                switch(changingElement)
                {
                    case _englishPages[0]:
                        changingElement = _spanishPages[0];
                        break;
                        
                    case _englishPages[1]:
                        changingElement = _spanishPages[1];
                        break;
                        
                    case _englishPages[2]:
                        changingElement = _spanishPages[2];
                        break;
                        
                    case _englishPages[3]:
                        changingElement = _spanishPages[3];
                        break;

                    case _englishPages[4]:
                        changingElement = _spanishPages[4];
                        break;
                        
                    case _englishPages[5]:
                        changingElement = _spanishPages[5];
                        break;
                        
                    case _englishPages[6]:
                        changingElement = _spanishPages[6];
                        break;

                    case _catalanPages[0]:
                        changingElement = _spanishPages[0];
                        break;
                        
                    case _catalanPages[1]:
                        changingElement = _spanishPages[1];
                        break;
                        
                    case _catalanPages[2]:
                        changingElement = _spanishPages[2];
                        break;
                        
                    case _catalanPages[3]:
                        changingElement = _spanishPages[3];
                        break;

                    case _catalanPages[4]:
                        changingElement = _spanishPages[4];
                        break;
                        
                    case _catalanPages[5]:
                        changingElement = _spanishPages[5];
                        break;
                        
                    case _catalanPages[6]:
                        changingElement = _spanishPages[6];
                        break;
                }
            }
            break;

        case 1:
            {
                switch(changingElement)
                {
                    case _spanishPages[0]:
                        changingElement = _englishPages[0];
                        break;
                        
                    case _spanishPages[1]:
                        changingElement = _englishPages[1];
                        break;
                        
                    case _spanishPages[2]:
                        changingElement = _englishPages[2];
                        break;
                        
                    case _spanishPages[3]:
                        changingElement = _englishPages[3];
                        break;

                    case _spanishPages[4]:
                        changingElement = _englishPages[4];
                        break;
                        
                    case _spanishPages[5]:
                        changingElement = _englishPages[5];
                        break;
                        
                    case _spanishPages[6]:
                        changingElement = _englishPages[6];
                        break;

                    case _catalanPages[0]:
                        changingElement = _englishPages[0];
                        break;
                        
                    case _catalanPages[1]:
                        changingElement = _englishPages[1];
                        break;
                        
                    case _catalanPages[2]:
                        changingElement = _englishPages[2];
                        break;
                        
                    case _catalanPages[3]:
                        changingElement = _englishPages[3];
                        break;

                    case _catalanPages[4]:
                        changingElement = _englishPages[4];
                        break;
                        
                    case _catalanPages[5]:
                        changingElement = _englishPages[5];
                        break;
                        
                    case _catalanPages[6]:
                        changingElement = _englishPages[6];
                        break;
                }
            }
            break;
        case 2:
            {
                switch(changingElement)
                {
                    case _englishPages[0]:
                        changingElement = _catalanPages[0];
                        break;
                        
                    case _englishPages[1]:
                        changingElement = _catalanPages[1];
                        break;
                        
                    case _englishPages[2]:
                        changingElement = _catalanPages[2];
                        break;
                        
                    case _englishPages[3]:
                        changingElement = _catalanPages[3];
                        break;

                    case _englishPages[4]:
                        changingElement = _catalanPages[4];
                        break;
                        
                    case _englishPages[5]:
                        changingElement = _catalanPages[5];
                        break;
                        
                    case _englishPages[6]:
                        changingElement = _catalanPages[6];
                        break;

                    case _spanishPages[0]:
                        changingElement = _catalanPages[0];
                        break;
                        
                    case _spanishPages[1]:
                        changingElement = _catalanPages[1];
                        break;
                        
                    case _spanishPages[2]:
                        changingElement = _catalanPages[2];
                        break;
                        
                    case _spanishPages[3]:
                        changingElement = _catalanPages[3];
                        break;

                    case _spanishPages[4]:
                        changingElement = _catalanPages[4];
                        break;
                        
                    case _spanishPages[5]:
                        changingElement = _catalanPages[5];
                        break;
                        
                    case _spanishPages[6]:
                        changingElement = _catalanPages[6];
                        break;
                }
            }
            break;
    }
    return changingElement;
}