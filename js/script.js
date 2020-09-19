const _true = true,
_false = false,
_midWidth = 720;

function showSocial(checkBox)
{
    let styleLeft = "",
    checkValPerc = "-36%",
    nonCheckValPerc = "-100%";
    if(checkBox.checked == true)
    {
        styleLeft = checkValPerc;
    }
    else
    {
        styleLeft = nonCheckValPerc;
    }
    document.querySelector('.socialMedia').style.left = styleLeft;
}

function checkSocial()
{
    let width = (window.innerWidth > 0) ? window.innerWidth : screen.width,
    defaultLeftVal = "0%";
    if(width >= _midWidth)
    {
        document.querySelector('.socialMedia').style.left = defaultLeftVal;
    }
    else
    {
        showSocial(document.querySelector('.checkMenu'));
    }
}