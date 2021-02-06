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

_spanishPages = ["index.php", "curriculum.php", "fotos.php", "videobook.php", "noticias.php", "sobre-mi.php", "contacto.php"],
_englishPages = ["home.php", "cv.php", "pictures.php", "videobook.php", "news.php", "about-me.php", "contact.php"],
_catalanPages = ["home.php", "curriculum.php", "fotos.php", "videobook.php", "noticies.php", "sobre-mi.php", "contacte.php"],

//Directories
_serverFunctions = "includes/functions.php",
_closeIcon = "images/web-icons/icons/times-solid.svg",
_closeIconHover = "images/web-icons/icons/times-solid-hover.svg";

//Direct JQuery
$(document).ready(function(){
    var width = ($(window).outerWidth() > 0) ? $(window).outerWidth() : $(document).outerWidth();
        if(width < _midWidth)
        {
            showSocial($(".checkMenu")[_zero]);
        }
    /*============================================================================
                                Scroll functions
    ==============================================================================*/
    $(window).scroll(function() {
        if($(window).scrollTop() > 0)
        {
            if($(".checkMenu")[_zero].checked)         
            {
                removeClass("header", "headerActive");
            } 
            else {
                addClass("header", "headerActive");
            }
        }
        else
        {
            removeClass("header", "headerActive");
        }
    });
    
    /*============================================================================
                                Resize functions
    ==============================================================================*/
    $(window).resize(function(){
        var width = ($(window).outerWidth() > 0) ? $(window).outerWidth() : $(document).outerWidth(),
        inheritHeight = "inherit",
        defaultLeftVal = "0%";
        if(width >= _midWidth)
        {
            //.socialMedia').style.left = defaultLeftVal;       THIS IS WITH ORIGINAL JAVASCRIPT    NEXT LINE IS WITH JQUERY
            $(".socialMedia").css({left: defaultLeftVal});
            $('.menuFlags').css({height: inheritHeight});
            $('.mainMenu').css({height: inheritHeight});
        }
        else
        {
            showSocial($(".checkMenu")[_zero]);
        }
    });

    /*============================================================================
                            Modal pictures actions
    ==============================================================================*/
    $(".galeryPic").click(function(){
        modalPicture($(".galeryPic").find("img").attr("src"));
    });
})

/*============================================================================
                            Functions related with header
==============================================================================*/
function showSocial(checkBox)
{
    var styleLeft = "",
    color = "",
    borderBottom = "",
    checkValPerc = "-50%",
    nonCheckValPerc = "-200%",
    height = "10px",
    inherit = "inherit";
    if(checkBox.checked == true)
    {
        styleLeft = checkValPerc;
        height = inherit;
        removeClass("header", "headerActive");
    }
    else
    {
        styleLeft = nonCheckValPerc;
        color = inherit;
        borderBottom = inherit;
        if($(window).scrollTop() > 0)
        {
            addClass("header", "headerActive");
        }
    }
    $('.socialMedia').css({"left": styleLeft});
    $('.menuFlags').css({"height": height});
    $('.mainMenu').css({"height": height});
    $('.options').css({"background-color": color, "border-bottom": borderBottom});
}

/*============================================================================
                            Functions related with modals
==============================================================================*/

/*TO FINISH: 
    Centrar modal en CSS
    Permitir cerrar modal
    Permitir cambiar de foto
    ocultar barra de scroll
    evitar que se cree otro modal si ya hay uno*/
function createModal(modal)
{
    let div = $("<div></div>"),
    html = $("<button>")
            .append($("<img></img>")
                .attr({"src":_closeIcon, "class":"bottom-img"}))
            .append($("<img></img>")
                .attr({"src":_closeIconHover, "class":"top-img"}));

    html.attr("class", "closeModal");
    html.attr("onclick", "removeModal()")
    
    div.attr("id", "modal");
    
    modal.contents().prepend(html);
    div.append(modal);
    $('#mainPic').append(div);
    return div;
}
function modalPicture(imgDir)
{
    let html = $("<div></div>")
        .attr("id","content")
        .append($("<div></div>")
            .attr("id","contentAndClose")
            .append($("<img></img>")
            .attr("src",imgDir))),
    modal = createModal(html);
    createModalPagination(modal);
}

function removeModal()
{
    $("#modal").remove();
}

/*============================================================================
                                Pagitnation
==============================================================================*/

function createModalPagination(modal)
{
    let leftArrow = $("<i></i>"),
    rightArrow = $("<i></i>"),
    leftButton = $("<button></button>"),
    rightButton = $("<button></button>");

    leftArrow.attr("class", "flaticon flaticon-left-arrow");
    rightArrow.attr("class", "flaticon flaticon-next");
    leftButton.attr("class", "preBtn");
    rightButton.attr("class", "nextBtn");

    leftButton.append(leftArrow);
    rightButton.append(rightArrow);
    
    $("#content").prepend(leftButton);
    $("#content").append(rightButton);
}

//TO FINISH
/*function loadSliderPictures(notSpanish)
{
    var xmlhttpRequest = new XMLHttpRequest();

    xmlhttpRequest.onreadystatechange = function(){

    }

    xmlhttpRequest.open("POST", _serverFunctions, _true);
    xmlhttpRequestr.send();
}*/

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
function removeClass(element, className)
{
    if($(element).hasClass(className))
    {
        $(element).removeClass(className);
    }
}
function addClass(element, className)
{
    if(!$(element).hasClass(className))
    {
        $(element).addClass(className);
    }

}